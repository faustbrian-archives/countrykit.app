<?php

namespace App\Http\Controllers;

use App\Models\Country;

class ListCountriesController extends Controller
{
    public function __invoke()
    {
        return Country::paginate();
    }
}
