<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Dashboard', function () {
    return view('layout.IndexDashboard');
});

Route::get('/List', function () {
    return view('layout.ListDashboard');
})->name('List');

Route::get('/ManageItems', function () {
    return view('Dashboard.ManageItems');
})->name('ManageItems');

Route::get('/ManageCategories', function () {
    return view('Dashboard.ManageCategories');
})->name('ManageCategories');

Route::get('/ManageRecipes', function () {
    return view('Dashboard.ManageRecipes');
})->name('ManageRecipes');

Route::get('/ManageAdmins', function () {
    return view('Dashboard.ManageAdmins');
})->name('ManageAdmins');

Route::get('/AddAdmins', function () {
    return view('Dashboard.AddAdmins');
})->name('AddAdmins');

//// Manage Admin 

Route::get('ManageAdmins', 'AdminController@index');
Route::post('AddAdmins/store', 'AdminController@store');
Route::get('ManageAdmins/{id}/delete', 'AdminController@destroy');
Route::get('ManageAdmins/{id}/edit', 'AdminController@edit');
Route::post('ManageAdmins/{id}/update', 'AdminController@update');

//// Manage Categories

Route::get('/AddCategories', function () {
    return view('Dashboard.AddCategories');
})->name('AddCategories');


Route::get('ManageCategories/{id}', 'CategoryController@destroy');
Route::post('Edit/{id}', 'CategoryController@update')->name('admin.edit.submit');
Route::post('AddCategories', 'CategoryController@store');
Route::get('ManageCategories', 'CategoryController@create');


//// Manage Items

Route::get('/AddItems', function () {
    return view('Dashboard.AddItems');
})->name('AddItems');

Route::get('ManageItems', 'ItemController@index');
Route::post('AddItems', 'ItemController@store');
Route::get('ManageItems/{id}/delete', 'ItemController@destroy');
Route::get('ManageItems/{id}/edit', 'ItemController@edit');
Route::post('ManageItems/{id}/update', 'ItemController@update');

//// Manage Items

Route::get('/Manageuser', 'UserController@index');
Route::get('/ManageUsers', 'UserController@show');
Route::get('/ManageUsers/{id}/delete', 'UserController@delete');

//// Manage Items

///// Public Theme /////


Route::get('/index', function () {
    return view('layout.indexLandingPage');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/searchitem', function () {
    return view('searchItem');
});

Route::get('/addmeal', function () {
    return view('addMeal');
});

Route::get('/ketodiet', function () {
    return view('Public.Article.ketodiet');
});
// Route::get('/categories', function () {
//     return view('categories');
// });

Route::get('/categories', 'CategoryController@CategoriesCreate');
Route::get('/submitRecipe', 'RecipeController@show');
Route::post('/createRecipe', 'RecipeController@create');
Route::get('/recipes/{id}', 'CategoryController@ShowRecipes');
Route::get('/recipe/single/{id}', 'RecipeController@SingleRecipes');


Route::get('/addmeal2', function () {
    return view('addMeal2');
});
Route::post('/addmeal2','MealController@Search');
Route::post('/addmeal23','MealController@EnterMeals');

Route::post('/addlunch','MealController@SearchLunch');
Route::post('/addlunch1','MealController@EnterLunchMeals');

Route::post('/addDinner','MealController@SearchDinner');
Route::post('/addDinner1','MealController@EnterDinnerMeals');

Route::get('/addmeal22','MealController@SpecifcDate');

