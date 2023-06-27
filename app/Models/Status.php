<?php

namespace App\Models;

use App\Models\Konser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Konser()
    {
        return $this->hasMany(Konser::class);
    }
}
