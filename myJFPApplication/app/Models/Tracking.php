<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function sprinters()
    {
        return $this->belongsTo(Sprinter::class,'sprinter_id');
    }
    public function transactions()
    {
        return $this->belongsTo(Transactions::class,'transactions_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
