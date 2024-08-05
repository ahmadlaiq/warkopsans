<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'promotions';

    protected $fillable = [
        'name',
        'image',
        'description',
        'discount',
        'start_date',
        'end_date',
    ];

    protected $dates = ['start_date', 'end_date'];

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
    
    public function getStartDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d F Y');
    }

    public function getEndDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d F Y');
    }
}
