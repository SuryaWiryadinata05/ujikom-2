<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class DashboardController extends Controller
{
    public function index (){
        $siswa = Siswa::select('id')->count();

        return view('home',compact('siswa'));
    }
}
