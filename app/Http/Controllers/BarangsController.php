<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Barang = Barang::all();
        return view('Barang.index',compact('Barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Barang = new Barang;
        $Barang->kode_barang=$request->a;
        $Barang->nama_barang=$request->b;
        $Barang->jumlah_barang=$request->c;
        $Barang->harga_barang=$request->d;
        $Barang->save();
        return redirect('Barang');
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
        $Barang = Barang::findOrFail($id);
        return view('Barang.show',compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $Barang = Barang::findOrFail($id);
        return view('Barang.edit',compact('Barang'));
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
        $Barang = Barang::findOrFail($id);
       $Barang->kode_barang=$request->a;
        $Barang->nama_barang=$request->b;
        $Barang->jumlah_barang=$request->c;
        $Barang->harga_barang=$request->d;
        $Barang->save();
        return redirect('Barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Barang= Barang::findOrFail($id);
        $Barang->delete();
        return redirect('Barang');
    }
}
