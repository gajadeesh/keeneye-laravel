<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headhunter extends Model
{
    //
    protected $table = 'headhunter';

    protected $fillable =['name','description'];
}
