<?php

namespace App\Models\View;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterView extends Model
{
    use HasFactory;

    public function getTable(): String
    {
        return "counter_view";
    }
}
