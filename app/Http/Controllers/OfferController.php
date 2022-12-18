<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    public function detail($offer){
        $context = Offer::find($offer);
        return view('detail', ['offer' => $context]);
    }
}
