<?php

namespace App\Models;

use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Konser extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Status()
    {
        return $this->belongsTo(Status::class, 'Status_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
