<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategories;
use Illuminate\Http\Request;

class SubCategoriesController extends Controller
{
    
    public function index()
    {
    }


    public function create()
    {
        $Categories=Category::all();
        return view('subcategory.create',compact('Categories'));
    }

    
    public function store(Request $request)
    {
        try{
            $categories=SubCategories::create([
                'name'=>$request->name,
                'slug'=>$request->name,
                'category_id'=>$request->cat_id
            ]);
            return redirect()->back()->with(['success'=>'Category added successfully']);

        }catch(\Exception $e){
            return $e;
            return redirect()->back()->with(['fails'=>'Sorry, something went wrong, please try again']);
        }
    }

    
    public function show(SubCategories $subCategories)
    {
        //
    }

    public function edit(SubCategories $subCategories)
    {
        //
    }

    
    public function update(Request $request, SubCategories $subCategories)
    {
        //
    }

    
    public function destroy(SubCategories $subCategories)
    {
        //
    }
}
