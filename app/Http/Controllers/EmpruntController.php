<?php

namespace App\Http\Controllers;

use App\Models\Pret;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{
    public function index()
    {
        $pret = Pret::all();
        dd($pret);
    }

    public function emprunteur2()
    {
        $pret = Pret::where('emprunteurs_id', 2)->get();
        dd($pret);
    }

    //
    public function book3()
    {
        $pret = Pret::where('book_id', 3)->get();
        dd($pret);
    }

    public function date()
    {
        $pret = Pret::where('date_retour','<', '2021-01-01')->get();
        dd($pret);
    }

    public function date0()
    {
        $pret = Pret::where('date_retour','null')->get();
        dd($pret);
    }


    public function create(Request $request)
    {
        $pret = new Pret;
        $pret -> date_pret = "2020-12-01 16:00:00";
        $pret -> date_retour = "null";
        $pret -> emprunteurs_id = 1;
        $pret -> livres_id = 1;
        dd($pret);
    }

    public function update()
    {
        $pret = Pret::where('id', 3)->update(['date_retour'=> '2020-05-01 10:00:00']);
        $pret = Pret::where('id', 3)->get();
        dd($pret);
    }

    public function delete()
    {
        $pret = Pret::where('id', 42)->delete();

        $pret = Pret::where('id', 42)->get();
        dd($pret);
    }
}
