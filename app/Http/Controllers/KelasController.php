<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{

    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas/index', compact('kelas'));
    }

    public function getdata($id)
    {
        $kelas = Kelas::where('id', $id)->first();
        echo json_encode($kelas);
        exit;
    }

    public function store()
    {
        $atrr = Request()->validate([
            'kelas' => ['required'],
        ]);
        Kelas::create($atrr);
        return redirect('kelas')->with('message', 'Data Kelas Berhasil ditambah!');
    }


    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->kelas = $request->kelas;
        $kelas->save();
        return redirect('kelas')->with('message', 'Berhasil Update Data Kelas');
    }


    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('kelas')->with('message', 'Berhasil Hapus Data Kelas');
    }
}
