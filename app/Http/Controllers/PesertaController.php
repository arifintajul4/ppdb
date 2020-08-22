<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class PesertaController extends Controller
{

    public function index()
    {
        $peserta = peserta::all();
        return view('peserta/index', compact('peserta'));
    }

    public function create()
    {
        return view('peserta/add');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
