<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeFilter($query,$filters){
        if($filters['search'] ?? false){
            $query->where('title','like','%'.request('search').'%')
                    ->orWhere('description','like','%'.request('search').'%');
        }
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
