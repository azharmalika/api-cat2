<?php

namespace App\Models;

use App\Models\Hewan;
use App\Models\User;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->translatedFormat('l, d F Y H:i:s');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hewan()
    {
        return $this->belongsTo(Hewan::class);
    }
}