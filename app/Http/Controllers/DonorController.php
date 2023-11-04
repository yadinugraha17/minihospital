<?php

namespace App\Http\Controllers;

use App\Models\Darah;
use App\Models\Formulir;
use App\Models\Jadwal;
use App\Models\Permintaan;
use App\Models\Unit;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function create()
    {
        $darahs = Darah::all();
        $jadwals = Jadwal::all();
        return view("user.donor", compact('darahs', 'jadwals'));

    }

    public function store(Request $request)
    {
        $formulir = new Formulir();
        $formulir->nama = $request->input('nama');
        $formulir->tanggal = $request->input('tanggal'); 
        $formulir->id_darah = $request->input('id_darah');
        $formulir->penyakit = $request->input('penyakit');
        $formulir->nohp = $request->input('nohp');
        $formulir->id_jadwal = $request->input('id_jadwal');
        $formulir->status = 'proses'; 
        $formulir->save();

        return redirect()->route('create.donor')->with('status', 'Formulir berhasil dikirim');
    }

    public function unit()
    {
        $units = Unit::all();
        $darahs = Darah::all();
        return view('user.permintaan', compact('units', 'darahs'));
    }

    public function permintaan(Request $request)
    {
        $permintaan = new Permintaan();
        $permintaan->id_unit = $request->input('id_unit');
        $permintaan->tanggal = $request->input('tanggal');
        $permintaan->id_darah = $request->input('id_darah');
        $permintaan->jumlah = $request->input('jumlah');
        $permintaan->status = 'proses';
        $permintaan->save();

        return redirect()->route('unit.permintaan')->with('status', 'Permintaan berhasil dikirim');
    }

    public function jadwal(Request $request)
    {
        $jadwal = Jadwal::all();
        return view('user.jadwal', compact('jadwal'));
        
    }

}
