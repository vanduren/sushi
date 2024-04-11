<?php

namespace App\Models;

use Http;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class KuinOrder extends Model
{
    use HasFactory, Sushi;

    public function getRows() : array
    {
        $rows = Http::withToken('78|bdyLkQtJ047KRGTvVOaEtwt51HCYdaH0fdS9Ku6D')->get('https://kuin.summaict.nl/api/order')->json();
        return $rows;
    }
}
