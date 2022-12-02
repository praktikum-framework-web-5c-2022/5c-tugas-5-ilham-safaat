<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kontak;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class GuruController extends Controller
{
    public function where(){
        // $gurus = Guru::with('kontak')->whereHas('kontak', function($query){
        //     $query->where('guru_id', '<', 10);
        // })->get();
        // return view('guru.where', ['gurus' => $gurus]);
        $kontak = Kontak::all();
        $guru = Guru::all();
        return view('guru.where', ['guru' => $guru, 'kontak' => $kontak]);
    }

    public function store(Request $request){

        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'tanggal_lahir' => 'required',
            'kontak_id' => 'required'
        ]);

        $guru = new Guru;
        $guru->nip = $request->input('nip');
        $guru->nama_guru = $request->input('nama_guru');
        $guru->tanggal_lahir = $request->input('tanggal_lahir');
        $guru->kontak_id = $request->input('kontak_id');
        $guru->save();

        Alert::success('Congrats', 'Data Berhasil Ditambahkan');
        return redirect('guru/where');
    }
}
