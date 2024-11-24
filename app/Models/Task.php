<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        "title",
        "description",
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
