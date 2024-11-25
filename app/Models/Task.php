<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Enums\TaskStatus;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "status",
        "user_id"
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
