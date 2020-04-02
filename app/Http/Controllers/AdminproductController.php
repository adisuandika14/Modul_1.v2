<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(){
        // mengambil data dari table product
        $product = DB::table('products')->get();
 
        // mengirim data product ke view index
        return view('index',['products' => $product]);
 
    }

    // public function viewproduct()
    // {
    //     $all_product = product::select('products.id','product_name','price','description','product_rate','stock','weight')
    //     ->get();
        
    //     return view('admin/viewproduct');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodi = product::get();
        return view('createproduct', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $product = new product();
            $product->product_name = $request->product_name;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->product_rate = $request->product_rate;
            $product->stock = $request->stock;
            $product->weight = $request->weight;
            
            $product->save();
            return redirect('/viewproduct');
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
