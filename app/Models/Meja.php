<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meja extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mejas';

    protected $fillable = ['nomor', 'qr_code', 'status'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->translatedFormat('d F Y, H:i');
    }

    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->translatedFormat('d F Y, H:i');
    }
}
