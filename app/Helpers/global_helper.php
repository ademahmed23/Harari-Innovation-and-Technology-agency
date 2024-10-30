<?php

use App\Http\Middleware\Admin;
use App\Models\Admin as ModelsAdmin;
use App\Models\Language;
use App\Models\Setting;
use App\Models\Settings;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\String_;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;



function formatTags(array $tags): String
{
   return implode(',', $tags);
}

function getLangauge(): string
{
    if(session()->has('language')){
        return session('language');
    }else {
        try {
            $language = Language::where('default', 1)->first();
            setLanguage($language->lang);

            return $language->lang;
        } catch (\Throwable $th) {
            setLanguage('en');

            return $language->lang;

        }
    }
}

function setLanguage(string $code): void
{
    session(['language' => $code]);
}
function truncate(string $text, int $limit = 45): String
{
    return \Str::limit($text, $limit, '...');
}

function convertToKFormat(int $number): String
{
    if($number < 1000){
        return $number;
    }elseif($number < 1000000){
        return round($number / 1000, 1) . 'K';
    }else {
        return round($number / 1000000, 1). 'M';
    }
}

function canAccess(array $permissions){

    $permission = auth()->guard('admin')->user()->hasAnyPermission($permissions);
    $superAdmin = auth()->guard('admin')->user()->hasRole('Super Admin');

    if($permission || $superAdmin){
     return true;
    }else {
     return false;
    }

 }
 function getRole(){
    $role = auth()->guard('admin')->user()->getRoleNames();
    return $role->first();
}

/** check user permission */

function checkPermission(string $permission){
    return auth()->guard('admin')->user()->hasPermissionTo($permission);
}

 function getSetting($key){
    $data = Setting::where('key', $key)->first();
    return $data->value;
}
function settings(){
    $settings = Setting::first();
    return $settings;
}



/** Create unique slug */
if (!function_exists('generateUniqueSlug')) {
    function generateUniqueSlug($model, $name): string
    {
        $modelClass = "App\\Models\\$model";

        if (!class_exists($modelClass)) {
            throw new \InvalidArgumentException("Model $model not found.");
        }

        $slug = \Str::slug($name);
        $count = 2;

        while ($modelClass::where('slug', $slug)->exists()) {
            $slug = \Str::slug($name) . '-' . $count;
            $count++;
        }

        return $slug;
    }
}

if (!function_exists('currencyPosition')) {
    function currencyPosition($price): string
    {
        if (config('settings.site_currency_icon_position') === 'left') {
            return config('settings.site_currency_icon') . $price;
        } else {
            return $price . config('settings.site_currency_icon');
        }
    }
}

/** Calculate cart total price */
if (!function_exists('cartTotal')) {
    function cartTotal()
    {
        $total = 0;

        foreach (Cart::content() as $item) {
            $productPrice = $item->price;
            $sizePrice = $item->options?->product_size['price'] ?? 0;
            $optionsPrice = 0;
            foreach ($item->options->product_options as $option) {
                $optionsPrice += $option['price'];
            }

            $total += ($productPrice + $sizePrice + $optionsPrice) * $item->qty;
        }

        return $total;
    }
}

/** Calculate product total price */
if (!function_exists('productTotal')) {
    function productTotal($rowId)
    {
        $total = 0;

        $product = Cart::get($rowId);

        $productPrice = $product->price;
        $sizePrice = $product->options?->product_size['price'] ?? 0;
        $optionsPrice = 0;

        foreach ($product->options->product_options as $option) {
            $optionsPrice += $option['price'];
        }

        $total += ($productPrice + $sizePrice + $optionsPrice) * $product->qty;


        return $total;
    }
}

/** grand cart total */
if (!function_exists('grandCartTotal')) {
    function grandCartTotal($deliveryFee = 0)
    {
        $total = 0;
        $cartTotal = cartTotal();

        if (session()->has('coupon')) {
            $discount = session()->get('coupon')['discount'];
            $total = ($cartTotal + $deliveryFee) - $discount;

            return $total;
        } else {
            $total = $cartTotal + $deliveryFee;
            return $total;
        }
    }
}

/** Generate Invoice Id */
if (!function_exists('generateInvoiceId')) {
    function generateInvoiceId()
    {
        $randomNumber = rand(1, 9999);
        $currentDateTime = now();

        $invoiceId = $randomNumber . $currentDateTime->format('yd') . $currentDateTime->format('s');

        return $invoiceId;
    }
}

/** get product discount in percent */
if (!function_exists('discountInPercent')) {
    function discountInPercent($originalPrice, $discountPrice)
    {
        $result = (($originalPrice - $discountPrice) / $originalPrice) * 100;
        return round($result, 2);
    }
}

/** get product discount in percent */
if (!function_exists('truncate')) {
    function truncate(string $string, int $limit = 100)
    {
        return \Str::limit($string, $limit, '...');
    }
}

/** get product discount in percent */
if (!function_exists('getYtThumbnail')) {
    function getYtThumbnail($link, $size = 'medium')
    {
        try {
            $videoId = explode("?v=", $link);
            $videoId = $videoId[1];

            $finalSize = match ($size) {
                'low' => 'sddefault',
                'medium' => 'mqdefault',
                'high' => 'hqdefault',
                'max' => 'maxresdefault'
            };

            return "https://img.youtube.com/vi/$videoId/$finalSize.jpg";
        } catch (\Exception $e) {
            logger($e);
            return NULL;
        }
    }



    // function canAccess(array $permissions){

    //     $permission = auth()->guard('admin')->user()->hasAnyPermission($permissions);
    //     $superAdmin = auth()->guard('admin')->user()->hasRole('Super Admin');

    //     if($permission || $superAdmin){
    //      return true;
    //     }else {
    //      return false;
    //     }

    //  }
    /** get product discount in percent */
    if (!function_exists('setSidebarActive')) {
        function setSidebarActive(array $routes)
        {
            foreach($routes as $route){
                if(request()->routeIs($route)){
                    return 'active';
                }
            }
            return '';
        }
    }
}
