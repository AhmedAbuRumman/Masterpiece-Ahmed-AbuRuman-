<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ValidationRequest($request)
    {

        $request->validate([
            'recipe_name'      => 'required',
            'recipe_calorie'   => 'required',
            'recipe_fat'       => 'required',
            'recipe_protien'   => 'required',
            'recipe_carb'      => 'required',
            'description'      => 'required',
            'category_id'      => 'required',
            "image"            => 'required',

        ]);
    }


    public function index()
    {
        //
    }

    public function SingleRecipes($id)
    {
        $recipe = recipe::find($id);
        return view('Public.singleRecipe', compact('recipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->ValidationRequest($request);

        
            $file = $request->image->getClientOriginalExtension();
            $file_name = time() . '.' . $file;
            $path = 'uploads/photo';
            $request->image->move($path, $file_name);
    

            //    dd($filename);
        Recipe::create([
            "recipe_name"      => $request['recipe_name'],
            "recipe_calorie"   => $request['recipe_calorie'],
            "recipe_fat"       => $request['recipe_fat'],
            "recipe_protien"   => $request['recipe_protien'],
            "recipe_carb"      => $request['recipe_carb'],
            "description"      => $request['description'],
            "category_id"      => $request['category_id'],
            "image"            => $file_name,
        ]);
        return redirect('submitRecipe');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $categories = Category::all();

        return view('Public.submitRecipe', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }

    
}
