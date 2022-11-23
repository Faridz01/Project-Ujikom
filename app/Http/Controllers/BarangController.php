<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Validator;
use Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::orderBy('id', 'desc')->get();
        return view('admin.barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_barang' => 'required',
            'merk' => 'required',
            'stok_barang' => 'required',
            'harga_barang' => 'required',
        ];
        $messages = [
            'nama_barang' => 'Nama Barang Harus di isi',
            'merk' => 'Merk Harus di isi',
            'stok_barang' => 'Stok Harus di isi',
            'harga_barang' => 'Harga Barang Harus di isi',
        ];
        $validation = Validator::make($request->all(), $rules, $messages);
        if ($validation->fails()) {
            Alert::error('Oops!','data yang anda input ada kesalahan')->persistent("Ok");
            return back()->withErrors($validation)->withInput();
        }
            $barangs = new Barang();
            $barangs->nama_barang = $request->nama_barang;
            $barangs->merk = $request->merk;
            $barangs->stok_barang = $request->stok_barang;
            $barangs->harga_barang = $request->harga_barang;

            $barangs->save();
            Alert::success('Done', 'Data berhasil dibuat')->autoClose(2000);
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangs = Barang::findOrFail($id);
        return view('admin.barang.show', compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangs = Barang::findOrFail($id);
        return view('admin.barang.edit', compact('barangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request  $request, $id)
    {
        $rules = [
            'nama_barang' => 'required',
            'merk' => 'required',
            'stok_barang' => 'required',
            'harga_barang' => 'required',
        ];
        $messages = [
            'nama_barang' => 'Nama Barang Harus di isi',
            'merk' => 'Merk Harus di isi',
            'stok_barang' => 'Stok Harus di isi',
            'harga_barang' => 'Harga Barang Harus di isi',
        ];
        $validation = Validator::make($request->all(), $rules, $messages);
        if ($validation->fails()) {
            Alert::error('Oops!','data yang anda input ada kesalahan')->persistent("Ok");
            return back()->withErrors($validation)->withInput();
        }
            $barangs = new Barang();
            $barangs->nama_barang = $request->nama_barang;
            $barangs->merk = $request->merk;
            $barangs->stok_barang = $request->stok_barang;
            $barangs->harga_barang = $request->harga_barang;

            $barangs->save();
            Alert::success('Done', 'Data berhasil dibuat')->autoClose(2000);
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangs = Barang::findOrFail($id);
        $barangs->delete();
        return redirect()->route('barang.index')->with('success', 'Data Barang berhasil dihapus!');
    }
}
