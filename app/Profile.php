<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    Protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' =>'required',
        );
}
