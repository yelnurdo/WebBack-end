<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show all listings
    public function index(){
        return view('Listings.index',[
            'listings'=>Listing::latest()->filter(request(['tag','search']))->get()
        ]);
    }
    //Show single listing
    public function show(Listing $listing){
        return view('Listings.show', [
            'listing'=>$listing
        ]);
    }
}
