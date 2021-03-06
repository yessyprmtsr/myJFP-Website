<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'transactions';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function trackings()
    {
        return $this->hasOne(Tracking::class);
    }
}
