<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir()
    {
        return redirect('https://www.educastudio.com/karir');
    }
    public function magang()
    {
        return redirect('https://www.educastudio.com/magang');
    }
    public function kunjungan()
    {
        return redirect('https://www.educastudio.com/kunjungan-industri');
    }
}
