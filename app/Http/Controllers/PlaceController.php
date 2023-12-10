<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use App\Traits\Common;
use Faker\Core\File;
class PlaceController extends Controller
{    use Common;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $places = Place::paginate(6);
         return view('place', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addplace');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'title' => 'required|string',
            'from' => 'integer',
            'to' => 'integer',
            'shortdescription' => 'required|max:100|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
        Place::create($data);
        return redirect('placelist');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $places = Place::get();

        return view('placelist', compact('places'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    private function messages()
    {
        return [
            'title.required' => 'Title is required',
            'shortdescription.required' => 'should be text',
            'from.required' => 'price is required',
            'to.required' => 'price is required',

        ];
    }
}
