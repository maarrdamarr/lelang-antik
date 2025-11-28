<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 8 Barang Terbaru
        $auctions = Item::where('status', 'open')->with('user')->latest()->take(8)->get();
        
        // Ambil 3 Berita Terbaru
        $news = News::latest()->take(3)->get();

        return view('welcome', compact('auctions', 'news'));
    }
}