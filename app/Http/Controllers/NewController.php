<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {$news=News::get();

        return view('news',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addnews');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $News=new News();
        $News->title=$request->Title;
        $News->content=$request->contents;
        $News->author=$request->author;
        $published=$request->published;
        if(isset($request->published)){
            $News->published = true;
        }else{
            $News->published = false;
        }
        $News->save();
        return "News data add succefully";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $new=News::findOrFail($id);
        return view('editnews',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
