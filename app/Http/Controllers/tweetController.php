<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tweet;
use App\profile;
use Auth;

class tweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tweets = tweet::where('user_id',Auth::id())->get();
        return view('tweet.principal',compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tweet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tweet = new tweet;
        $this->validate($request,[
            'body'=> 'required|unique:tweets',
            ]);
        $tweet->body = $request->body;
        $tweet->user_id = Auth::id();
        $tweet->save();
        return redirect('tweet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $item = tweet::find($id);
        return view('tweet.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = tweet::find($id);
        if ($item->user_id != Auth::id() || !$item) {
            return redirect('/tweet');
        }
        return view('tweet.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tweet = tweet::find($id);
        $this->validate($request,[
            'body'=> 'required',
            ]);
        $tweet->body = $request->body;
        $tweet->save();
        session()->flash('message','Actualizado');
        return redirect('tweet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = tweet::find($id);
        $item->delete();
        session()->flash('message','Eliminado');
        return redirect('/tweet');
    }
}
