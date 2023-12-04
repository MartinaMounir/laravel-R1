<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewController extends Controller
{
    private $columns = ['title','content','published','author'];

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
    public function store(Request $request):RedirectResponse
    {$messages=[
        'title.required'=>'Title is required',
        'content.required'=> 'should be text',
    ];
        $data = $request->validate([
            'author'=>'required|string',
            'title'=>'required|string',
            'content'=>'required|string'
        ], $messages);
        $data['published']=isset($data['published'])?true:false;
        News::create($data);
        return redirect('news');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::findOrFail($id);
        return view('newsdetails',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $new=News::findOrFail($id);
        return view('updatenews',compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? 1:0;
        News::where('id', $id)->update($data);
        return redirect('news');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        News::where('id', $id)->delete();
        return redirect('news');
    }
    public function trashed(){
        $news = News::onlyTrashed()->get();
        return view('trashednews',compact('news'));
    }
    public function restore(string $id) :RedirectResponse
    {
        News::where('id',$id)->restore();
        return redirect('news');
    }
    public function delete(string $id) :RedirectResponse
    {
        News::where('id',$id)->forcedelete();
        return redirect('news');
    }
}
