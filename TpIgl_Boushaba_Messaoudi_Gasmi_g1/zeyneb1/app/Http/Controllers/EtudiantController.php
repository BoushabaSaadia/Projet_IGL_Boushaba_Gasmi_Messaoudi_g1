<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /*
   |--------------------------------------------------------------------------
   | Etudiant Controller
   |--------------------------------------------------------------------------
   |
   | This controller is responsible for get and post
   | and delete "etudiant"
   |
   |
   */
    public function index()
    {
        return view('etudiants');
    }

    public function get(Request $request)
    {
        $etudiants = Etudiant::orderBy('created_at', 'desc')->get();
        return response()->json($etudiants);
    }

    public function store(Request $request)
    {
        $etudiant = Etudiant::create($request->all());

        return response()->json($etudiant);
    }

    public function delete($id)
    {
        Etudiant::destroy($id);

        return response()->json("ok");
    }

}
