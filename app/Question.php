<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function chapter(){
        return $this->belongsTo('App\Chapter');
    }

    public function getBodyAttribute($body){

        // Replace all the non-repeat fields
        $body =  preg_replace_callback('/{{([^}r,]+)(?:,([^}]+))?}}/', function($_) {
            return '<input size="5" class="question-input" type="text" name="var'.$_[1].'"' . (isset($_[2]) ? ' value="'.$_[2]. '"' : '') . '>';
        }, $body);

        // Replace all the repeat fields
        $body =  preg_replace_callback('/{{([^},]+)(?:,([^}]+))?}}/', function($_) {
            $without_r = substr($_[1], 0, -1);
            return '<input size="5" type="text" class="repeated-question-input repeated-var'.$without_r.'" disabled>';
        }, $body);

        return $body;
    }
    
}
