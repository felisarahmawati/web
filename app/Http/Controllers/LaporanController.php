<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\validasi;;

class LaporanController extends Controller
{
    public function index() {
        $data = array(
            'title' => 'Form Laporan Penjualan',
            'laporan' => validasi::all()
        );
        return view('laporan.index', $data);
    }

    public function proses() {
        $data = array('title' => 'Laporan Penjualan');
        return view('laporan.proses', $data);
    }
    public function formulir(Request $request)
    {
        $nama_lengkap = $request->nama_lengkap;
        $alamat = $request->alamat;
        $no_hp = $request->no_hp;
        $rekening = $request->rekening;
        $w3review = $request->w3review;

        if ($request->hasfile('upload_ktp') && $request->hasfile('bukti_pembayaran'))
        {
            $ekstensi1 = $request->upload_ktp->extension();
            $ekstensi2 = $request->bukti_pembayaran->extension();
            $uplaod_ktp = time()."__".$ekstensi1;
            $bukti_pembayaran = time()."__".$ekstensi2;
            $request->upload_ktp->storeAs('public/ktp/', $upload_ktp);
            $request->bukti_pembayaran->storeAs('public/pembayaran/', $bukti_pembayaran);
            if ($request->file('upload_ktp')->isValid() && $request->file('bukti_pembayaran')->isValid()) {
                validasi_pesanan::create([
                    'alamat'=> $alamat,
                    'no_hp'=> $no_hp,
                    'upload'=>$upload,
                    'rekening'=>$rekening,
                    'bukti_pembayaranphp'=>$bukti_pembayaran,
                ]);
            }
        }
        return redirect('/formulir');
    }
}