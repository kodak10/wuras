<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        // Récupérer les bannières depuis la base de données
        $banners = Banner::all();

        // Retourner la vue avec les données des bannières
        return view('banners.index', compact('banners'));
    }

    public function create()
    {
        return view('backend.pages.banners.create');
    }

}
