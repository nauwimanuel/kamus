<?php

namespace App\Models;

use App\Models\User;
use App\Models\Beser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beser extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class)->select(['id', 'username']);
    }
    
    public function besers()
    {
        return $this->hasMany(Beser::class);
    }
}
