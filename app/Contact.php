<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    public function company() {
        return $this->belongsTo(Company::class, 'company_id');
    }
    protected $fillable = [
        'first_name', 'last_name', 'email', 'city', 'country', 'job_title'
    ];
}
