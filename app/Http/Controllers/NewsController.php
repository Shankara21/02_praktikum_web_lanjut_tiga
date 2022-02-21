<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return redirect('https://www.educastudio.com/news');
    }
    public function news($topic)
    {
        return redirect('https://www.educastudio.com/news/' . $topic);
    }
}
