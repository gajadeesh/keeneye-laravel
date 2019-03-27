<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
    //
    protected $table = 'recruited';

    protected $fillable =['headhunterName','position','candidateName','recruited'];
}
