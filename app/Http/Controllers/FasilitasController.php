<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MFasilitas;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = MFasilitas::all();

        return view('fasilitas.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'addMoreInputFields.*.photos' => 'required|mimes:jpg,png,jpeg,gif',
            'addMoreInputFields.*.desc' => 'required'
        ]);

        $category = $request->input('category');
        
        $data = []; // This will hold our data objects
        
        foreach($request->addMoreInputFields as $key => $value) {
            
            $fileName = $value['photos']->store('fasilitas');
            
            $photoPath = $value['photos']->storePubliclyAs('',$fileName);// Store the photo and get the path
            $value['photos']->move(public_path('fasilitas'), $fileName);
        
            // Create a new object with the photo path and description
            $dataObj = [
                'photoPath' => $photoPath,
                'description' => $value['desc']
            ];
        
            // Add data object to data array
            $data[] = $dataObj;

        }
        


        $model = new MFasilitas;
        $model->category = $category;
        $model->file_path = $data;
        $model->description = 'test';

        $model->save();
        
        return redirect()->route('fasilitas-admin.index')->with('message', 'Berhasil menambahkan item baru.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = MFasilitas::findOrFail($id);


        return view('fasilitas.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = MFasilitas::findOrFail($id);
        $model->delete();


        return redirect()->route('fasilitas-admin.index')->with('message', 'Berhasil menghapus item baru.'); 
    }
}
