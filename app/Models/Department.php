<?php

namespace App\Models;

use Http;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Department extends Model
{
    use HasFactory, Sushi;

    // https://collectionapi.metmuseum.org/public/collection/v1/departments
    public function getRows() : array
    {
        $rows = Http::get('https://collectionapi.metmuseum.org/public/collection/v1/departments')->json()['departments'];
        return $rows;
    }
}
