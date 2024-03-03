<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class State extends Model
{
    use HasFactory, Sushi;
    // protected $rows = [
    //     [
    //         'abbr' => 'NY',
    //         'name' => 'New York',
    //         'capital' => 'Albany',
    //         'numbers' => json_encode([
    //             'area' => 54556,
    //             'population' => 19530351,
    //         ]),
    //     ],
    //     [
    //         'abbr' => 'CA',
    //         'name' => 'California',
    //         'capital' => 'Sacramento',
    //         'numbers' => json_encode([
    //             'area' => 163695,
    //             'population' => 38332521,
    //         ]),
    //     ],
    // ];

    protected $casts = [
        'numbers' => 'collection',
    ];

    public function getRows()
    {
        $states = [
            [
                'abbr' => 'NY',
                'name' => 'New York',
                'capital' => 'Albany',
                'numbers' => json_encode([
                    'area' => 54556,
                    'population' => 19530351,
                ]),
            ],
            [
                'abbr' => 'CA',
                'name' => 'California',
                'capital' => 'Sacramento',
                'numbers' => json_encode([
                    'area' => 163695,
                    'population' => 38332521,
                ]),
            ],
        ];
        return $states;
    }
}
