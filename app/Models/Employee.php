<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'photo',
        'company_id',
    ];


    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
