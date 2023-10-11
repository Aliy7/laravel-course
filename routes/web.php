<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// all listings 
Route::get('/', [ListingController::class, 'index']);

//single listing 

Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route:: get('/hello', function(){
   return response() -> json([
    'posts' => [
        [
            'title' => 'Post one'
        ]
       
       ]
        ]);
   
});

Route:: get('/posts/{id}', function($id){
      return response ('Post ' . $id);
}) ->where ('id', '[0-9]+');

Route:: get('/search', function(Request $request){
// return dd($request);
   return $request->name . ' ' . $request->city;
});

// common Resource Routes 
// index - Show all listing
//show - Show single listing 
// create - Show form to create new listing
// store - Store new listing
//edit - Show form to edit listing 
//update - Update listing
//destroy - Delete listing