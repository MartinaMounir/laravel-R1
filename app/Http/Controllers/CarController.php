<?php

namespace App\Http\Controllers;
use App\Traits\Common;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{   use Common;
  private $columns = ['Title','price','description','published','image'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {$cars=Car::get();

return view('car',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {$messages=[
        'title.required'=>'Title is required',
         'description.required'=> 'should be text',
    ];
        $data = $request->validate([
            'title'=>'required|string',
            'price'=>'integer',
            'description'=>'required|max:100|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], $messages);
        $data['published']=isset($data['published'])?true:false;
        $file=$request->image;
        $path='assets/images';
        $fileName=$this->uploadFile($file,$path);
        $data['image']=$fileName;
        Car::create($data);
        return redirect('car');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cars = Car::findOrFail($id);
        return view('cardetails',compact('cars'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {$car=Car::findOrFail($id);
         return view('updatecar',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {$cars=Car::find($id);
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? 1:0;
           if ($request->hasFile('image')){
               if (Storage::disk('public')->exists('assets/images/' . $cars->image)) {
                   Storage::disk('public')->delete('assets/images/' . $cars->image);
               }
            $image = $request->file('image');
            $file_extension = $image->getClientOriginalExtension();
            $file_name = time() . '.' . $file_extension;
$image->move('assets/images/',$file_name);
               $data['image'] = $file_name;
        }
        Car::where('id', $id)->update($data);
           return redirect('car');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) :RedirectResponse
    {
        Car::where('id', $id)->delete();
        return redirect('car');
    }
public function trashed(){
     $cars = Car::onlyTrashed()->get();
     return view('trashed',compact('cars'));
}
public function restore(string $id) :RedirectResponse
{
    Car::where('id',$id)->restore();
    return redirect('car');
}
    public function delete(string $id) :RedirectResponse
    {
        Car::where('id',$id)->forcedelete();
        return redirect('car');
    }
}
