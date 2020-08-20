<?php

namespace App\Http\Controllers\User;

use App\Review;
use App\Guest;
use Illuminate\Http\Request;
use Auth;
use  App\Http\Requests\ReviewRequest;
class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        if(Auth::check()){
            $data=['user_id'=>Auth::user()->id,
            'product_id' =>$request->product_id,
            'value'=>$request->value,
            'content'=>$request->content
        ];
        Review::create($data);
        return redirect()->back();   
    }
    else{
        $dataGuest=['name'=>$request->name,
        'email' =>$request->email
    ];
    $guest = Guest::create($dataGuest);
    $dataReview = ['guest_id'=>$guest->id,
    'product_id' =>$request->product_id,
    'value'=>$request->value,
    'content'=>$request->content ];
      Review::create($dataReview);
    return redirect()->back(); 
}

}

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
