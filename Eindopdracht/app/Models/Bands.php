<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Bands extends Model
{
    use HasFactory;
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function users() {
        return $this->belongsToMany(User::class, 'bands')->withPivot('user_id');
    }
    protected $fillable = [
        'name', 'user_id','image','description','biography','embed_url_1','embed_url_2','embed_url_3'
    ];
}
