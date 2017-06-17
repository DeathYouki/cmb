<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Produit;
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
        $produits = Produit::all();
        $data=[];
        foreach ($produits as $produit){

            $data[]=[
                "id" => $produit->id,
                "name"  => $produit->name ,
                "marque" => $produit->marque
            ];
        }

        return response()->json($produits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->input());
        $pro= new Produit();
        //$pro= $request->input();

        $pro->id = $request->input('id');

        $pro->external_id = $request->input('external_id');

        $pro->name = $request->input('name');
        $pro->original_price = $request->input('original_price');
        $pro->price = $request->input('price');

        $pro->images = $request->input('images');

        $pro->variants_ids =$request->input('variants_ids');

        $pro->variants= $request->input('variants') ;

        $pro->details = $request->input('details');
        
        $pro->tags = $request->input('tags');

        $pro->save();

        return "true";



        //return view("home");



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
        if($produit = Produit::where('id', $id)->first()){
        return response()->json($produit);}
        else {
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
        return view("editProduct");
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
        if (!$produit = Produit::where('id', $id)->first()){ echo "false"; }
        else{$produit =  Produit::where('id', $id)
                    ->update([

                                'name' => $request->input('name'),
                                'original_price' => $request->input('original_price'),
                                'price' => $request->input('price'),

                                'images' => $request->input('images'),

                                'variants_ids' =>$request->input('variants_ids'),

                                'variants'=> $request->input('variants') ,

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
        if ( !$produit = Produit::where('id', $id)->first()){ return "false" ;}
        else{produit::where('id', $id)->delete(); return "true";}
        //echo "safi tmse7";

    }
}
