<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "username",
        "password",
        "name",
        "cover",
        "photo",
        "bio",
        "experience",
        "cv"
    ];

    protected $hidden = [
        "id",
        "username",
        "password",
        "created_at",
        "updated_at"
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($user) {
            $user->password = Hash::make($user->password);
        });

        static::updating(function ($user) {
            if ($user->isDirty("password")) $user->password = Hash::make($user->password);
        });
    }
}
