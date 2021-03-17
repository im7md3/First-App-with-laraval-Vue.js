<?php

namespace App\Http\Controllers;

use App\Category;
use App\Domain;
use App\Subcategories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    

    public function index()
    {
        $categories=Category::with('subCats')->get();
        return view('category.index',compact('categories'));
    }

    
    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        try{
            $category=Category::create([
                'name'=>$request->name,
                'slug'=>$request->name
            ]);
            return redirect()->back()->with(['success'=>'Category added successfully']);

        }catch(\Exception $e){
            return redirect()->back()->with(['fails'=>'Sorry, something went wrong, please try again']);
        }
    }


    public function show(Category $category)
    {
        //
    }

    
    public function edit(Category $category)
    {
        //
    }

    
    public function update(Request $request, Category $category)
    {
        //
    }

    
    public function destroy(Category $category)
    {
        //
    }

    public function catsWithDomains(){
        $categories=Category::get();
        $subcats=Subcategories::get();
        $domains=Domain::get();
        return view('welcome',compact(['categories','subcats','domains']));
    }
}
