<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * Get the Subjects related to this Course
     */
    public function subjects(){
        return $this->hasMany('App\Subject');
    }
}
