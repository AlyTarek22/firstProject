<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'Module'];
    protected $table = 'curriculum';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
     public function lessons()
    {
        return $this->hasMany(Lessons::class);
    }
}
