<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categ;
use App\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.dashAdmin');
        //bug de trabajo
    }
    public function addProdIndex()
    {
        $cat = Categ::all();
        return view('admin.addProduct',compact('cat'));
    }
    public function addProduct(Request $request)
    {
        DB::beginTransaction();
        //$po = new Product();
        try {
                $product = (new Product)->create([
                    'name' => $request->name,
                    'price' => $request->price,
                    'description' => $request->description,
                    'duracion' => $request->duracion,
                    'image' => $request->ima,
                    'status' => 'public',
                    'idCategory' => $request->category
                ]);
                $product->save();
        }
        catch(ValidationException $e)
        {
            DB::rollback();

        }
        DB::commit();

        return compact('product');
        //dd('sdfghjk');
    }
    /*------------------------------------------------------------------------------------------------------------*/
    public function productindex()
    {
        return view('admin.product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }
}
