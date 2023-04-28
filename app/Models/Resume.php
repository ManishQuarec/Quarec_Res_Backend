<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'phone',
        'job_role',
        'year_of_exp',
        'current_ctc',
        'exp_ctc',
        'job_sector',
        'resume',
        'portfolio_url',
  
    ];
}
