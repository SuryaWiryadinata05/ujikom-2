<?php

namespace App\Http\Controllers;

use Laratrust;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Kelas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.s
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Laratrust::hasRole('admin')) {
            return $this->adminDashboard();
        }

        if (Laratrust::hasRole('member')) {
            return $this->memberDashboard();
        }

        return view('home');
    }

    protected function adminDashboard()
    {
        $siswa = Siswa::select('id')->count();
        $jurusan = Jurusan::select('id')->count();
        $kelas = Kelas::select('id')->count();

        return view('admin.index',compact('siswa','jurusan','kelas'));
    }

    protected function memberDashboard()
    {
        return view('home');
    }

}