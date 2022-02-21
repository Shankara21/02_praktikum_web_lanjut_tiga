<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function kids()
    {
        return redirect('https://www.educastudio.com/category/marbel-and-friend-kids-games');
    }
    public function story()
    {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }
    public function sings()
    {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
