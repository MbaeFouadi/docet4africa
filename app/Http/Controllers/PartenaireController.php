<?php

namespace App\Http\Controllers;

use App\Models\partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $partenaires=DB::table("partenaires")->get();
        return view('admin.show_partenaires',compact("partenaires"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $partenaires=DB::table("partenaires")->get();
        return view('admin.add_partenaire',compact("partenaires"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            "design_partenaire"=>"required",
            "description"=>"required",           
            "image"=>'required|image|mimes:jpeg,png,jpg|max:1048',
        ]);

        $imageName = $request->titre.'.'.$request->image->extension();
        $request->image->move(public_path('assets/actualites'), $imageName);

        DB::table("partenaires")->insert([
            "design_partenaire"=>$request->design_partenaire,
            'slug' => Str::slug($request->design_partenaire),
            "description"=>$request->description,
            "image"=>$imageName
        ]);

        return redirect("partenaires");

    }

    /**
     * Display the specified resource.
     */
    public function show(partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(partenaire $partenaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, partenaire $partenaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(partenaire $partenaire)
    {
        //
    }

    public function equipe_projet(Request $request)
    {
        $request->validate([
         
            "nom_prenom"=>"required",
            "fonction"=>"required", 
            "partenaire_id"=>"required",            
        ]);

       

        DB::table("equipe_projet")->insert([
            "nom_prenom"=>$request->nom_prenom,
            "fonction"=>$request->fonction,
            "partenaire_id"=>$request->partenaire_id,
        ]);

       return redirect("partenaires/create");
    }
}
