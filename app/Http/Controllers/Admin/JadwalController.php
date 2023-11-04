<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::all();
        return view('admin.jadwal.index', compact('data'));
    }

    public function create()
    {
        return view('admin.jadwal.create');
    }
    public function store(Request $request)
    {
        $jadwal = new Jadwal(); 
        $jadwal->jadwal = $request->input('jadwal');
        $jadwal->jam = $request->input('jam');
        $jadwal->hari = $request->input('hari');
        $jadwal->tanggal = $request->input('tanggal');
        $jadwal->tempat = $request->input('tempat');
        $jadwal->save();

        return redirect()->route('jadwal');
    }
    public function delete($id)
    {
        $formulir = Jadwal::findOrFail($id);
        $formulir->delete();

        return redirect()->back()->with('status', 'Formulir berhasil dihapus');
    }
}
