<?php

namespace App\Console\Commands;

use App\Models\Country;
use Illuminate\Console\Command;

class SeedCountries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'countries:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $countries = json_decode(file_get_contents(base_path('vendor/mledoze/countries/dist/countries.json')), true);

        foreach ($countries as $country) {
            if (empty($country['independent'])) {
                $country['independent'] = false;
            }

            Country::updateOrCreate(['cca2' => $country['cca2']], $country);
        }
    }
}
