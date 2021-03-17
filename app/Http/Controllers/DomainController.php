<?php

namespace App\Http\Controllers;

use App\Category;
use App\Domain;
use App\Http\Requests\DomainRequest;
use App\Subcategories;
use Illuminate\Http\Request;

class DomainController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        $categories = Category::get();
        $subCats = Subcategories::get();
        return view('domain.create', compact(['categories', 'subCats']));
    }


    public function store(DomainRequest $request)
    {
        try {
            if ($request->has('img')) {
                $file_path=ImgUpload($request->img);
                Domain::create([
                    'category_id' => $request->cat_id,
                    'subcategory_id' => $request->subcat_id,
                    'title' => $request->title,
                    'url' => $request->url,
                    'shortDesc' => $request->shortDesc,
                    'Desc' => $request->desc,
                    'email' => $request->email,
                    'img'=>$file_path
                ]);
            }else{
                Domain::create([
                    'category_id'=>$request->cat_id,
                    'subcategory_id'=>$request->subcat_id,
                    'title'=>$request->title,
                    'url'=>$request->url,
                    'shortDesc'=>$request->shortDesc,
                    'Desc'=>$request->desc,
                    'email'=>$request->email
                ]);
            }
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function show(Domain $domain)
    {
        //
    }


    public function edit(Domain $domain)
    {
        //
    }


    public function update(Request $request, Domain $domain)
    {
        //
    }

    public function destroy(Domain $domain)
    {
        //
    }
}
