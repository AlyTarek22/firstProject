<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_for extends Model
{
    use HasFactory;
            protected $fillable = ['course_id', 'audience'];
        protected $table = 'course_for';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
