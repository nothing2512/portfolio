<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
    use HasFactory;

    protected $fillable = ["url", "code"];

    function getTable(): String
    {
        return "short_url";
    }
}
