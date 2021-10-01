<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    use HasFactory;

    public function getTable(): string
    {
        return "mail";
    }

    protected $fillable = [
        "name",
        "email",
        "message"
    ];
}
