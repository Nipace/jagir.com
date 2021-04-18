<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title','description',
    'experience','qualificaton','job_skills','job_category'
    ,'employment_type','level','no_of_vacancy','offered_salary','application_deadline'
    ,'applying_procedure','company_id'
];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
