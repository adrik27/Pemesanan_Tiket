<?php

namespace App\Models;

use App\Models\User;
use App\Models\Konser;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembayaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Konser()
    {
        return $this->hasMany(Konser::class, 'id');
    }

    public function User()
    {
        return $this->hasMany(User::class, 'id');
    }

    public function Status()
    {
        return $this->belongsTo(Status::class, 'Status_id');
    }
}
