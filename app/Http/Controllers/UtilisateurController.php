<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function index()
    {
        $utilisateur = User::all();
        dd($utilisateur);
    }

    public function ID()
    {
        $utilisateur = User::where('id', 1)->get();
        dd($utilisateur);
    }

    public function mail()
    {
        $utilisateur = User::where('email', "foo.foo@exemple.com")->get();
        dd($utilisateur);
    }

    public function role()
    {
        $utilisateur = User::where('role', "ROLE_EMPRUNTEUR")->get();
        dd($utilisateur);
    }
}