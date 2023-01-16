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
}
