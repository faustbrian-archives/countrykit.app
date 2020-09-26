<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array|bool
     */
    protected $guarded = false;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'name'         => 'array',
        'tld'          => 'array',
        'independent'  => 'boolean',
        'currencies'   => 'array',
        'idd'          => 'array',
        'capital'      => 'array',
        'altSpellings' => 'array',
        'languages'    => 'array',
        'translations' => 'array',
        'latlng'       => 'array',
        'borders'      => 'array',
        'demonyms'     => 'array',
    ];
}
