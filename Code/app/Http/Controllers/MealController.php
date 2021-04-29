<?php

namespace App\Http\Controllers;

use App\Meal;
use Illuminate\Http\Request;
use App\Item;
use DB;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function SpecifcDate(Request $request)
    {

        $meals = DB::table('meals')->Where('date', '=', $request->get('selectedDate'))->get();
        return view('addMeal2', compact('meals'));
        // $date = $request->get('selectedDate');
        dd($meals);
    }


    public function Search(Request $request)
    {
        $inputSearch = $request['inputSearch'];
        // echo $inputSearch;
        $keyResult = DB::table('items')
            ->Where('item_name', 'LIKE', '%' . $inputSearch . '%')
            ->get();
        echo $keyResult;
    }

    public function SearchLunch(Request $request)
    {
        $inputSearch2 = $request['inputSearch2'];
        // echo $inputSearch;
        $keyResult2 = DB::table('items')
            ->Where('item_name', 'LIKE', '%' . $inputSearch2 . '%')
            ->get();
        echo $keyResult2;
    }
    public function SearchDinner(Request $request)
    {
        $inputSearch3 = $request['inputSearch3'];
        // echo $inputSearch;
        $keyResult3 = DB::table('items')
            ->Where('item_name', 'LIKE', '%' . $inputSearch3 . '%')
            ->get();
        echo $keyResult3;
    }
    public function EnterMeals(Request $request)
    {
        // dd($request['item_name']);
        // dd($request->item_name);
        
        // return $meals1->id;
        // return $request;
        $matchingRecords = false;
        $meals = Meal::all();
        foreach ($meals as $meal) {
            if ($meal->date == $request->get('date') && $meal->meal_type_id == $request->get('meal_type_id')) {
                 $matchingRecords = $meal;
                // dd($matchingRecords);
            }
        };

        if ($matchingRecords) {
            
            $matchingRecords->items()->attach($request->get('id'));

        }else{
            $newMeal                = new Meal();
            $newMeal->date          = $request->get('date');
            // $meals->item_id       = $request->get('id');
            $newMeal->meal_type_id  = $request->get('meal_type_id');
            $newMeal->save();
            $newMeal->items()->attach($request->get('id'));
        }


        return redirect('addmeal2');

        // Meal::create([
        //     "date"              => $request['date'],
        //     "item_id"           => $request['id'],
        //     "meal_type_id"      => $request['meal_type_id'],

        // ]);
        // // $meals->majors()->attach($request->get('major_id'));

        // return redirect('addmeal2');
    }
    public function EnterLunchMeals(Request $request)
    {
        // dd($request['item_name']);
        // dd($request->item_name);
        Meal::create([
            "date"              => $request['date'],
            "item_id"         => $request['id'],
            "meal_type_id"      => $request['meal_type_id'],

        ]);
        return redirect('addmeal2');
    }
    public function EnterDinnerMeals(Request $request)
    {
        // dd($request['item_name']);
        // dd($request->item_name);
        Meal::create([
            "date"              => $request['date'],
            "item_id"         => $request['id'],
            "meal_type_id"      => $request['meal_type_id'],

        ]);
        return redirect('addmeal2');
    }

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Meal::create([

            'datepiker' => $request['datepiker'],

        ]);

        return redirect('addMeal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        //
    }
}
