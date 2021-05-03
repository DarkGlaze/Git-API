<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;

class BarangKeluarController extends Controller
{
    public function index()
    {
        //
        return BarangKeluar::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //
        $barang = new BarangKeluar;
        $barang->id_vendor = $request->id_vendor;
        $barang->nama_produk = $request->nama_produk;
        $barang->deskripsi = $request->deskripsi;
        $barang->jumlah = $request->jumlah;
        $barang->harga = $request->harga;
        $barang->save();

        return "Data Berhasil Masuk";

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {
        //
        $id_vendor = $request->id_vendor;
        $nama = $request->nama_produk;
        $deskripsi = $request->deskripsi;
        $harga = $request->harga;
        $jumlah = $request->jumlah;

        $barang = BarangKeluar::find($id);
        $barang->id_vendor = $id_vendor;
        $barang->nama_produk = $nama;
        $barang->deskripsi = $deskripsi;
        $barang->harga = $harga;
        $barang->jumlah = $jumlah;
        $barang->save();

        return "Data Berhasil di Update";
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $barang = BarangKeluar::find($id);
        $barang->delete();

        return "Data Berhasil di Hapus";
    }
}
