<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class ShowCountryController extends Controller
{
    public function __invoke(Request $request, string $country)
    {
        return Country::query()
            ->orWhere('cca2', $country)
            ->orWhere('ccn3', $country)
            ->orWhere('cca3', $country)
            ->orWhere('cioc', $country)
            ->firstOrFail();
    }
}
