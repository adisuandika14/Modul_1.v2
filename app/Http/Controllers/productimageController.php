<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(){
        // mengambil data dari table product
        $product = DB::table('products_image')
            $file = $request->file('file');
            $tujuan = 'product_image\\';
            $disimpan = $tujuan . $file->getClientOriginalName();
            $file->move($tujuan, $file->getClientOriginalName());
        ->get();
 
        // mengirim data product ke view index
        return view('productimage',['products_image' => $product_image]);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
 
         // memanggil view tambah
        return view('tambah');
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            DB::table('products_image')-> insert([
            'image_name' => $request->image_name,
]);
    // alihkan halaman ke halaman pegawai
    return redirect('/productimage');
 
}
    /**
     * Display the specified resource.
     *
     * @param  \App\tb_dosen  $tb_dosen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $product = product::where("id",$id)->first();
        return view('showproduct');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_dosen  $tb_dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $product = product::where("id",$id)->first();
        return view('editproduct');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_dosen  $tb_dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $dosen = tb_dosen::where("id",$id)->first();
        $dosen->nip_dosen = $request->nip_dosen;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->id_prodi = $request->prodi;
        $dosen->update();
        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_dosen  $tb_dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_dosen $dosen)
    {
        $dosen->delete();
        return redirect('/dosen');
    }
}
