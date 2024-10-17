<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Method untuk halaman Dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Method untuk halaman Anggota Tim
    public function anggotaTim()
    {
        return view('admin.anggota-tim');
    }

    // Method untuk halaman Ketua Tim
    public function ketuaTim()
    {
        return view('admin.ketua-tim');
    }

    // Method untuk halaman Pengaduan
    public function pengaduan()
    {
        return view('admin.pengaduan');
    }
}
