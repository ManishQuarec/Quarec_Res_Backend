<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'user_name',
        'title',
        'description',
        'status',
        'profile_image',
    ];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
