<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function addRating(Request $request, $product_id){
        //dd(request('comment'));
        $validated = $request->validate([
            'star_rating' => ['required']
        ]);
        if($validated){
            
            if(Product::where('id',$product_id)->exists()){
                $rating = Rating::where('user_id',auth()->user()->id)->where('product_id',$product_id);
                if($rating->exists()){
                    $rating->update([
                        'user_id' => auth()->user()->id,
                        'product_id' => $product_id,
                        'star_rating' => $validated['star_rating'],
                        'comment' => request('comment')
                    ]);

                    return redirect()->back()->with('ratingSuccess', 'Thank you for sharing your experience with us!');
                }else{
                    Rating::create([
                        'user_id' => auth()->user()->id,
                        'product_id' => $product_id,
                        'star_rating' => $validated['star_rating'],
                        'comment' => request('comment')
                    ]);

                    return redirect()->back()->with('ratingSuccess', 'Thank you for sharing your experience with us!');
                }

                
            }else{
                return redirect()->back()->with('ratingError', 'Product not Found.');
            }
        }
    }
}
