<?php

namespace App\Http\Controllers;

use App\Category;
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
        return view('Dashboard.ManageCategories');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_category = category::orderByDesc('id')->get();

        return view('Dashboard.ManageCategories', compact('all_category'));
    }

    public function CategoriesCreate()
    {
        $all_category = category::orderByDesc('id')->get();

        return view('Public.categories', compact('all_category'));
    }

    public function validation(Request $request)
    {

        $request->validate([
            'category_name' => 'required',
            'category_image' => 'required',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        $file = $request->category_image->getClientOriginalExtension();
        $file_name = time() . '.' . $file;
        $path = 'uploads/photo';
        $request->category_image->move($path, $file_name);

        category::create([

            'category_name' => $request['category_name'],
            'category_image' => $file_name,


        ]);

        return redirect("ManageCategories");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category,$id)
    {
        $categories = category::where('id', $id)->get()->first();
        return $categories;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
       
        $request->validate([
            'category_name' => 'required',
        ]);

        if ($request->hasFile('category_image')) {
            $file = $request->category_image->getClientOriginalExtension();
            $file_name = time() . '.' . $file;
            $path = 'image/categories';
            $request->category_image->move($path, $file_name);
        } else {
            $file_name = category::find($id)->category_image;
        }

        category::where("id", $id)->update([
            'category_name' => $request['category_name'],
            'category_image' => $file_name,
        ]);
        return redirect("admin/categories");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        $category_id = category::where('id', $id)->delete();
        $all_category = category::all();
        return redirect("/admin/categories");
    }


    public function ShowRecipes($id)
    {
        $recipes = category::find($id)->Recipe;
        return view('Public.recipes', compact('recipes'));

        // dd($recipes);
    }

}
