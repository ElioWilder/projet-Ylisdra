<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galerie;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    public function index(){
        $galeries = Galerie::all();
        foreach($galeries as $image){
            $image->emplacement = Storage::disk('uploads')->url($image->id);
        }
        return view("galeries.index", ["galeries" => $galeries]);
    }
    
    public function show($id){
        $galerie = Galerie::findOrFail($id);

        $galerie->description = request("description");
        return view("galeries.show", ["galeries" => $galeries]);
    }

    public function more(){
        return view("galeries.more");
    }

    public function store(){
        $galerie = new Galerie;

        $galerie->description = request("description");
        $galerie->categorie = request("categorie");
        $galerie->titre = request("titre");
        $galerie->id = request("id");

        $galerie->save();
        return redirect("/galeries");
    }
}