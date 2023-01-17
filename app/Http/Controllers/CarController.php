<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarMake;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function show(Car $car)
    {
        $car_makes = DB::table('car_makes_pivot')->where('car_id', $car->id)
            ->pluck('car_make_id');

        $carMakes = array();
        foreach($car_makes as $car_make)
        {
            $carMakes[] = CarMake::all()->where('id', (int)$car_make);
        }

        $car_categories = DB::table('car_categories')->where('car_id', $car->id)
            ->pluck('category_id');

        $categories = array();
        foreach($car_categories as $category)
        {
            $categories[] = Category::all()->where('id', (int)$category);
        }

        return view('cars.show', compact('car', 'carMakes', 'categories'));
    }
    public function search(Request $request)
    {
        $model = is_null($request['model']) ? '' : $request['model'];
        $year = is_null($request['year']) ? '' : $request['year'];

        $cars = Car::query()
            ->where('car_model', 'like', "%$model%")
            ->where('year', 'like', "%$year%")
            ->get();

        return view('welcome', compact('cars'));
    }

}
