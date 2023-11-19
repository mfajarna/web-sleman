<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MKontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontaks = MKontak::all();

        return view('kontak.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak.create');
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
            'title' => 'required|string',
            'link' => 'required|string',
        ]);


        $model = new MKontak;
        $model->title = $request->title;
        $model->link = $request->link;
        $model->status = 'active';

        $model->save();

        return redirect()->route('kontak-admin.index')->with('message', 'Berhasil menambahkan item baru.');
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
        $kontak = MKontak::findOrFail($id);

        return view('kontak.edit', compact('kontak'));
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
        $model = MKontak::findOrFail($id);

        $model->title = $request->title;
        $model->link = $request->link;
        $model->status = $model->status;

        $model->save();

   
        return redirect()->route('kontak-admin.index')->with('message', 'Berhasil update item baru.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = MKontak::findOrFail($id);
        $model->delete();

 
        return redirect()->route('kontak-admin.index')->with('message', 'Berhasil menghapus item.');
    }
}
