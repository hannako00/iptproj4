<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Log extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'log_entry'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}