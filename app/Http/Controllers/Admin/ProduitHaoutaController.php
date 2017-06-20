<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ProduitHaouta;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class ProduitHaoutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $produits = ProduitHaouta::all();

        return response()->json($produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pro = new ProduitHaouta();

        $pro->buffer($request->input());

        $pro->save();

        return "true";

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
        return $id;
        if($produit = ProduitHaouta::where('id', $id)->first()){
            return response()->json($produit);
        } else {
            return "False";
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "edit";
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
        //echo (count(Produit::where('id', $id)->get()));
        if (!$produit = ProduitHaouta::where('id', $id)->first()){ 
            echo "false"; 
        }
        else{
            $produit =  ProduitHaouta::where('id', $id)
                    ->update([

                                'name' => $request->input('name'),
                                'original_price' => $request->input('original_price'),
                                'price' => $request->input('price'),

                                'images' => $request->input('images'),

                                'variants_ids' =>$request->input('variants_ids'),

                                'variants_data'=> $request->input('variants_data') ,

                                'details' => $request->input('details'),
                                
                                'tags' => $request->input('tags')
                                
                            ]);
            return "true";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ( !$produit = ProduitHaouta::where('id', $id)->first()){ 
            return "false" ;
        }
        else{
            produit::where('id', $id)->delete(); return "true";
        }
    }
}
