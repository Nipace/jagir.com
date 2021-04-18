<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSkill extends Model
{
    protected $fillable = [
        'skill_title','status','guidelines'
    ];
}
