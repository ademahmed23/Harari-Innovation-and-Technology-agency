<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;




    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }


    function user() : BelongsTo {
        return $this->belongsTo(Admin::class);
    }

    function comments() : HasMany {
        return $this->hasMany(BlogComment::class, 'blog_id', 'id');
    }
}
