<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator.index');
    }
    public function tambah()
    {
        $title = "Form Tambah";
        $jumlah = 0;
        return view('kalkulator.tambah', compact('title', 'jumlah'));
    }
    public function storeTambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 + $angka2;
        $title = "hasil dari" . $angka1 . "+" . $angka2 . "adalah : " . $jumlah;
        return view('kalkulator.tambah', compact('jumlah'));
    }
    public function kurang()
    {

        $title = "Form kurang";
        $kurang = 0;
        return view('kalkulator.kurang', compact('title', 'kurang'));
    }
    public function storeKurang(Request $request)
    {
        $angka3 = $request->angka3;
        $angka4 = $request->angka4;
        $kurang = $angka3 - $angka4;
        $title = "hasil dari" . $angka3 . "-" . $angka4 . "adalah : " . $kurang;
        return view('kalkulator.kurang', compact('kurang'));
    }
    public function kali()
    {

        $title = "Form kali";
        $kali = 0;
        return view('kalkulator.kali', compact('title', 'kali'));
    }
    public function storeKali(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $kali = $angka1 * $angka2;
        $title = "hasil dari" . $angka1 . "X" . $angka2 . "adalah : " . $kali;
        return view('kalkulator.kali', compact('title', 'kali'));
    }
    public function bagi()
    {
        return "ini bagi";
    }
}
