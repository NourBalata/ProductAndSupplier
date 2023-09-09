<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table ='news';
    protected $guarded = [];

    public function getImageAttribute($value)
    {
        return asset('uploads/'.$value);
    }

    public function Category(){

        return $this->belongsTo(Category::class,'category_id');
    }

    public function Language(){

        return $this->belongsTo(Language::class,'language_id');
    }
    
    public function Status(){

        return $this->belongsTo(Status::class,'status_id');
    }
    public function Type(){

        return $this->belongsTo(Type::class,'type_id');
    }
    public function Writer(){

        return $this->belongsTo(Writer::class,'writer_id');
    }
    




}
