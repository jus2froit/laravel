<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Livre::all();
        dd($book);
    }

    public function id()
    {
        $book = Livre::where('id', 1)->get();
        dd($book);
    }

    public function lorem()
    {
        $book = Livre::where('titre', 'like', '%lorem%')->get();
        dd($book);
    }

    public function auteur2()
    {
        $book = Livre::where('auteurs_id', 2)->get();
        dd($book);
    }

    public function roman()
    {
        $book = Livre::where('roman_id', [3, 4, 5])->get();
        dd($book);
    }

    public function create(Request $request)
    {
        $book = new Livre;
        $book->titre = 'Totum autem id externum';
        $book->annee_edition = 2020;
        $book->nombres_pages = 300;
        $book->code_ibsn = 9790412882714;
        $book->auteurs_id = 2;
        // $book->genres_id = 6;
        $book->save();
        dd($book);
    }

    public function update()
    {
        $book = Livre::where('id', 2)->update(['titre'=> 'Aperiendum est igitur']);
        // $book = Livre::where('id', 2)->update(['genres_id'=> 5]);
        $book = Livre::where('id', 2)->get();
        dd($book);
    }

    public function delete()
    {
        $book = Livre::where('id', 123)->delete();

        $book = Livre::where('id', 123)->get();
        dd($book);
    }
}