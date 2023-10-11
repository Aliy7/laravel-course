<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
   public function index(){
    return view('listings.index', [
        
        'listings' => Listing::all() // Assuming your Listing model is in the 'App' namespace
    ]);
   }
   public function show(Listing $listing){
    return view('listings.show', [
        'listing' => $listing
    ]);

   }
}
