<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'article_id';
    
    public function area(){
        return $this->belongsTo(Area::class, 'area_id');
    }

    
    public function scopeName($query, $search){
        if(!empty($search)){
            return $query->where('name', 'like', "%$search%");
        }
    }
    
    public function scopeDescription($query, $search){
        if(!empty($search)){
            return $query->orWhere('description', 'like', "%$search%");
        }
    }
    public function scopeResume($query, $search){
        if(!empty($search)){
            return $query->orWhere('resume', 'like', "%$search%");
        }
    }

    public function scopeAuthor($query, $search){
        if(!empty($search)){
            return $query->orWhere('author', 'like', "%$search%");
        }
    }
}
