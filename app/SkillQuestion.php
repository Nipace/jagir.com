<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillQuestion extends Model
{
    protected $fillable = [
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'right_answer',
        'job_skill_id'
    ];

    public function jobSkillTest()
    {
        return $this->belongsTo(JobSkill::class);
    }
}
