<?php

namespace App\Http\Controllers;

use App\Models\Emprunteur;
use Illuminate\Http\Request;

class EmprunteurController extends Controller
{
    public function index()
    {
        $book = Emprunteur::all();
        dd($book);
    }

    public function ID()
    {
        $emprunteur = Emprunteur::where('id', 3)->get();
        dd($emprunteur);
    }

    public function user()
    {
        $emprunteur = Emprunteur::where('users_id', 3)->get();
        dd($emprunteur);
    }

    public function foo()
    {
        $emprunteur = Emprunteur::where('nom', "foo")->get();
        $emprunteur = Emprunteur::where('prenom', "foo")->get();
        dd($emprunteur, $emprunteur);
    }

    public function tel()
    {
        $emprunteur = Emprunteur::where('tel','LIKE', "%1234%")->get();
        dd($emprunteur);
    }

    public function date()
    {
        $emprunteur = Emprunteur::where('created_at','<', '2021-03-01')->get();
        dd($emprunteur);
    }

    public function actif()
    {
        $emprunteur = Emprunteur::where('actif', 0)->get();
        dd($emprunteur);
    }
}