<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Homepage extends Model
{
    use HasFactory;

    public function homelangfrontend()
    {

        // $language = Language::where('default',1)->first();

            // $front_lang = Session::put('front_lang', $language->lang_code);

        return $this->belongsTo(HomepageLanguage::class, 'id', 'home_id','why_choose_title1')->where('language', getLangauge());
    }

    // public function homelangadmin()
    // {
    //     $admin_lang = Session::get('admin_lang');
    //     return $this->belongsTo(HomepageLanguage::class, 'id', 'home_id')->where('lang_code', $admin_lang);
    // }
}
