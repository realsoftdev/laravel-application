<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RssFeedSeoController extends Controller
{
    public function index() {
        
        return view('pages.frontend.rss_feed_seo.list');
    }

    public function add() {
        
        return view('pages.frontend.rss_feed_seo.add');
    }
}
