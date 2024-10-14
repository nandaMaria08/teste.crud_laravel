<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateSupport;

class CategoryController extends Controller
{
public readonly Category $category;

public function __construct()
{
    $this->category = new Category();
}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categories =$this->category->all();
       return view('categories', ['categories'=> $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSupport  $request)
    {
       $created = $this->category->create([
        'name'=> $request->input('name'),
        'description'=> $request->input('description')
       ]);

       if($created){
         return redirect()->back()->with('message', 'Sucessfully created');
       }

       return redirect()->back()->with('message', 'Error create');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
     return view('category_show', ['category'=>$category]);  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category_edit', ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

       $updated=$this->category->where('id', $id)->update($request->except(['_token', '_method'])); 

       if($updated){
            return redirect()->back()->with('message', 'Successfully updated');
           }

           return redirect()->back()->with('message', 'Error update');
    //    var_dump($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->category->where('id', $id)->delete();

        return redirect()->route('categories.index');
    }
}
