<?php

namespace App\Http\Controllers;

use App\ModelKontak;
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Kontak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('kontak',compact('data'));
    }

    public function login()
    {
        return view('login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Product();
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->deskripsi = $request->deskripsi;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('kontak.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = Product::where('id',$id)->get();

        return view('kontak_edit',compact('data'));
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
        $data = Product::where('id',$id)->first();
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->deskripsi = $request->deskripsi;
        $data->image = $request->image;
        $data->save();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasil diubah!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::where('id',$id)->first();
        $data->delete();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasi dihapus!');
    }
}
