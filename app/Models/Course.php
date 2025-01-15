<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'intro'
    ];


    public function users()
    {
        return $this->belongsToMany(User::class, 'records', 'course_id', 'user_id');
    }

    public function records()
    {
        return $this->hasMany(Record::class, 'course_id');
    }
}
