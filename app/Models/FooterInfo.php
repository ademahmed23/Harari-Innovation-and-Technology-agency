<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FooterInfo extends Model
{
    use HasFactory;
 function footer(): BelongsTo {

        return $this->belongsTo(Language ::class, getLangauge());

}

    protected $fillable = ['short_info', 'language', 'address', 'phone', 'email', 'copyright'];
}
