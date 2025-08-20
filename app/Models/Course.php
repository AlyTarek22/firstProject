<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\table;

class Course extends Model
{
    use HasFactory;
    protected $table = "courses";
    protected $fillable = [
        'title',
        'description',
        'language',
        'duration',
        'price',
        'level',
        'category_id',
        // "image"
    ];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function instructor()
    {
        return $this->belongsTo(User::class);
    }
    public function enroll()
    {
        return $this->belongsTo(Enrollment::class);
    }
    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }
    public function WillLearn()
    {
        return $this->hasMany(WillLearn::class);
    }
    public function course_for()
    {
        return $this->hasMany(course_for::class);
    }
    public function levels()
    {
        return $this->hasMany(level::class);
    }
    public function curriculum()
    {
        return $this->hasMany(Curriculum::class);
    }
}
