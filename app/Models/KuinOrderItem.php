<?php

namespace App\Models;

use Http;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class KuinOrderItem extends Model
{
    use HasFactory, Sushi;

    public function getRows() : array
    {
        $rows = Http::withToken('78|bdyLkQtJ047KRGTvVOaEtwt51HCYdaH0fdS9Ku6D')->get('https://kuin.summaict.nl/api/orderItem?order_id=1144')->json();
        return $rows;
    }
}
