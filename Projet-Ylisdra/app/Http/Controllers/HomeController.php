<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galerie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $galeries = Galerie::all();
        return view("home", ["galeries" => $galeries]);
    }

    public function msg(){
        return view("galeries.user");
    }

    public function create(){
        return view("galeries.create");
    }

    public function edit($id){
        $galerie = Galerie::findOrFail($id);
        return view("galeries.edit", ["galerie" => $galerie]);
    }

    public function update($id){
        $galerie = Galerie::findOrFail($id);

        $galerie->titre = request("titre");
        $galerie->categorie = request("categorie");
        $galerie->description = request("description");


        $galerie->save();
        return redirect("home");
    }

    public function destroy($id){
        $galerie = Galerie::findOrFail($id);

        $galerie->delete();
        return redirect("home");
    }

    public function store(Request $request){
        $galerie = new Galerie;

        $galerie->description = request("description");
        $galerie->categorie = request("categorie");
        $galerie->titre = request("titre");
        $galerie->save();

        $request->file('image')->storeAs('', $galerie->id, 'uploads');

        return redirect("home");
    }
}
