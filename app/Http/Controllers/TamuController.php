<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function form() {
        return view('formtamu');
    }

    public function simpantamu(Request $request) {
        Tamu::create([
            'nama' => $request->nama,
            'nomor_kamar' => $request->nomor_kamar,
            'tanggal_checkin' => $request->tanggal_checkin,
            'tanggal_checkout' => $request->tanggal_checkout,
            'status_pembayaran' => $request->status_pembayaran,
        ]);

        return "Data tamu berhasil disimpan!";
    }

    public function daftar() {
        $data = Tamu::all();
        return view('tamu',['tamu' => $data]);
    }
}
