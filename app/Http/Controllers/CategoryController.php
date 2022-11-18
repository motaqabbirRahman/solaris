<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category= new Category;
        $category->id= $request->id;
        $category->name= $request->name;
        $category->description= $request->description;
        if($request->hasFile('image')){
            // $path = $request->file('image')->getRealPath();
            // $image = file_get_contents('$path');
            // $base64 = bse64_encode($image);
            // $category->image = $base64;
            // $file= $request->file('image');
            // $extension= $file->getClientOriginalExtension();
            // $filename=rand(1000, 9999) . '.' . $extention;
            $filename=$request->file('image')->getRealPath();
            dd($filename);
            $file->move('category', $filename);
            $category->image= $filename;
        }
    //    dd($filename);
        // dd($request->file('image'));
        $category->save();
        return redirect()->back()->with('mesage','category successfully created');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
