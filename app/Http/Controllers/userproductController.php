<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\products;

class userproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(){
        // mengambil data dari table product
        $product = DB::table('products')
        ->get();
 
        // mengirim data product ke view index
        return view('index',['products' => $product]);
 
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
            DB::table('products')-> insert([
            'id' => $request->id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'description' => $request->description,
            'product_rate' => $request->product_rate,
            'stock' => $request->stock,
            'weight' => $request->weight,
]);
    // alihkan halaman ke halaman pegawai
    return redirect('/product');
 
}
    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $product = product::where("id",$id)->first();
        return view('product');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
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
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $dosen = products::where("id",$id)->first();
        $dosen->nip_dosen = $request->nip_dosen;
        $dosen->nama_dosen = $request->nama_dosen;
        $dosen->id_prodi = $request->prodi;
        $dosen->update();
        return redirect('/dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
// method untuk destroy data pegawai
public function destroy($id)
{
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('products')->where('id',$id)->delete();
        
    // alihkan halaman ke halaman product
    return redirect('/product');
}
}