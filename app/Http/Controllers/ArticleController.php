<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{

    public function article($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
