<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\About
 *
 * @property int $id
 * @property string $language
 * @property string $image
 * @property string $title
 * @property string $main_title
 * @property string $description
 * @property string $video_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About query()
 * @method static \Illuminate\Database\Eloquent\Builder|About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereMainTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereVideoLink($value)
 */
	class About extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property int $user_id
 * @property int $delivery_area_id
 * @property string $first_name
 * @property string|null $last_name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DeliveryArea $deliveryArea
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDeliveryAreaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $avator
 * @property string $name
 * @property string $role
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property int $status
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereAvator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin withoutRole($roles, $guard = null)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AppDownloadSection
 *
 * @property int $id
 * @property string $image
 * @property string $background
 * @property string $title
 * @property string $short_description
 * @property string|null $play_store_link
 * @property string|null $apple_store_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection whereAppleStoreLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection wherePlayStoreLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppDownloadSection whereUpdatedAt($value)
 */
	class AppDownloadSection extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Author
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author query()
 */
	class Author extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BannerSlider
 *
 * @property int $id
 * @property string $title
 * @property string $sub_title
 * @property string $url
 * @property string $banner
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider query()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSlider whereUrl($value)
 */
	class BannerSlider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string $language
 * @property int $user_id
 * @property int $category_id
 * @property string $image
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\BlogCategory $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\BlogComment> $comments
 * @property-read int|null $comments_count
 * @property-read \App\Models\Admin $user
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUserId($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogCategory
 *
 * @property int $id
 * @property string $name
 * @property string $language
 * @property string $slug
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Language|null $blog
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Blog> $blogs
 * @property-read int|null $blogs_count
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogCategory whereUpdatedAt($value)
 */
	class BlogCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BlogComment
 *
 * @property int $id
 * @property int $blog_id
 * @property int $user_id
 * @property string $comment
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Blog $blog
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogComment whereUserId($value)
 */
	class BlogComment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $status
 * @property int $show_at_home
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereShowAtHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Chat
 *
 * @property int $id
 * @property int $sender_id
 * @property int $receiver_id
 * @property string $message
 * @property int $seen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Admin|null $receiver
 * @property-read \App\Models\User|null $sender
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereReceiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUpdatedAt($value)
 */
	class Chat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Chef
 *
 * @property int $id
 * @property string $image
 * @property string $name
 * @property string $language
 * @property string $title
 * @property string|null $fb
 * @property string|null $in
 * @property string|null $x
 * @property string|null $web
 * @property int $show_at_home
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $insta
 * @property string|null $t
 * @property int|null $tlg
 * @method static \Illuminate\Database\Eloquent\Builder|Chef newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chef newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chef query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereFb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereInsta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereShowAtHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereT($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereTlg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereWeb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chef whereX($value)
 */
	class Chef extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $language
 * @property string $image
 * @property string|null $off_day
 * @property string|null $support_title
 * @property string $time
 * @property string|null $phone_one
 * @property string|null $phone_two
 * @property string|null $mail_one
 * @property string|null $mail_two
 * @property string|null $address
 * @property string|null $map_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMailOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMailTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereMapLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereOffDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhoneOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhoneTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereSupportTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Counter
 *
 * @property int $id
 * @property string $background
 * @property string $counter_icon_one
 * @property string $counter_count_one
 * @property string $counter_name_one
 * @property string $counter_icon_two
 * @property string $counter_count_two
 * @property string $counter_name_two
 * @property string $counter_icon_three
 * @property string $counter_count_three
 * @property string $counter_name_three
 * @property string $counter_icon_four
 * @property string $counter_count_four
 * @property string $counter_name_four
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Counter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterCountFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterCountOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterCountThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterCountTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterIconFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterIconOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterIconThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterIconTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterNameFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterNameOne($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterNameThree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCounterNameTwo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereUpdatedAt($value)
 */
	class Counter extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $quantity
 * @property int $min_purchase_amount
 * @property string $expire_date
 * @property string $discount_type
 * @property float $discount
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CouponFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereExpireDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMinPurchaseAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 */
	class Coupon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CustomPageBuilder
 *
 * @property int $id
 * @property string $name
 * @property string $language
 * @property string $slug
 * @property string $content
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder query()
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CustomPageBuilder whereUpdatedAt($value)
 */
	class CustomPageBuilder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DailyOffer
 *
 * @property int $id
 * @property int $product_id
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|DailyOffer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DailyOffer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DailyOffer query()
 * @method static \Illuminate\Database\Eloquent\Builder|DailyOffer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyOffer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyOffer whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyOffer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DailyOffer whereUpdatedAt($value)
 */
	class DailyOffer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryArea
 *
 * @property int $id
 * @property string $area_name
 * @property string $min_delivery_time
 * @property string $max_delivery_time
 * @property float $delivery_fee
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereAreaName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereDeliveryFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereMaxDeliveryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereMinDeliveryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryArea whereUpdatedAt($value)
 */
	class DeliveryArea extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ErrorPage
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $button_text
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPage whereButtonText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPage whereUpdatedAt($value)
 */
	class ErrorPage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ErrorPageLanguage
 *
 * @property int $id
 * @property int $error_id
 * @property string $language
 * @property string|null $title
 * @property string|null $button_text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPageLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPageLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPageLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPageLanguage whereButtonText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPageLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPageLanguage whereErrorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPageLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPageLanguage whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPageLanguage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ErrorPageLanguage whereUpdatedAt($value)
 */
	class ErrorPageLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Event
 *
 * @property int $id
 * @property string $name
 * @property string $language
 * @property string $slug
 * @property string $short_description
 * @property string $description
 * @property string $featured_photo
 * @property string $date
 * @property string $time
 * @property string $location
 * @property string|null $map
 * @property int|null $price
 * @property int|null $total_seat
 * @property int|null $booked_seat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereBookedSeat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereFeaturedPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereTotalSeat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EventPhoto
 *
 * @property int $id
 * @property int $event_id
 * @property string $photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EventPhoto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventPhoto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventPhoto query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventPhoto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventPhoto whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventPhoto wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventPhoto whereUpdatedAt($value)
 */
	class EventPhoto extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EventTicket
 *
 * @property int $id
 * @property int $event_id
 * @property int $user_id
 * @property int $unit_price
 * @property int $number_of_tickets
 * @property int $total_price
 * @property string|null $currency
 * @property string $payment_id
 * @property string $payment_method
 * @property string $payment_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereNumberOfTickets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventTicket whereUserId($value)
 */
	class EventTicket extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EventVideo
 *
 * @property int $id
 * @property int $event_id
 * @property string $youtube_video_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EventVideo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventVideo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventVideo query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventVideo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventVideo whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventVideo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventVideo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventVideo whereYoutubeVideoLink($value)
 */
	class EventVideo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Faq
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 */
	class Faq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Feature
 *
 * @property int $id
 * @property string $icon
 * @property string $heading
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereUpdatedAt($value)
 */
	class Feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FooterInfo
 *
 * @property int $id
 * @property string $language
 * @property string|null $short_info
 * @property string|null $address
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $copyright
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Language|null $footer
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereCopyright($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereShortInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterInfo whereUpdatedAt($value)
 */
	class FooterInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hero
 *
 * @property int $id
 * @property string $language
 * @property string|null $background
 * @property string $title
 * @property string $sub_title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Hero newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hero newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hero query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hero whereUpdatedAt($value)
 */
	class Hero extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Homepage
 *
 * @property int $id
 * @property string $language
 * @property string|null $why_choose_item1_icon
 * @property string|null $why_choose_item2_icon
 * @property string|null $why_choose_item3_icon
 * @property string|null $why_choose_home2_background
 * @property string|null $why_choose_home3_item1_icon
 * @property string|null $why_choose_home3_item2_icon
 * @property string|null $why_choose_home3_item3_icon
 * @property string|null $offer_home3_background
 * @property string|null $offer_home3_item1_image
 * @property string|null $offer_home3_item2_image
 * @property string|null $offer_link
 * @property string|null $offer_home3_item1_link
 * @property string|null $offer_home3_item2_link
 * @property string|null $about_offer_link
 * @property string|null $about_offer_background
 * @property string|null $trending_offer_link
 * @property string|null $trending_offer_image
 * @property string|null $counter1_value
 * @property string|null $counter2_value
 * @property string|null $counter3_value
 * @property string|null $counter4_value
 * @property string|null $counter1_description
 * @property string|null $counter2_description
 * @property string|null $counter3_description
 * @property string|null $counter_item1_title
 * @property string|null $counter_item1_description
 * @property string|null $counter_item1_link
 * @property string|null $counter_item1_icon
 * @property string|null $counter_item2_title
 * @property string|null $counter_item2_description
 * @property string|null $counter_item2_link
 * @property string|null $counter_item2_icon
 * @property string|null $counter_icon1
 * @property string|null $counter_icon2
 * @property string|null $counter_icon3
 * @property string|null $counter_icon4
 * @property string|null $counter_icon5
 * @property string|null $counter_icon6
 * @property string|null $counter_icon7
 * @property string|null $counter_icon8
 * @property string|null $counter_home1_background
 * @property string|null $counter_home2_background
 * @property string|null $app_play_store_link
 * @property string|null $app_apple_store_link
 * @property string|null $app_home1_foreground
 * @property string|null $app_home2_foreground
 * @property string|null $app_home3_foreground
 * @property string|null $app_home3_background
 * @property string|null $app_home1_background
 * @property string|null $app_home2_background
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\HomepageLanguage|null $homelangfrontend
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereAboutOfferBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereAboutOfferLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereAppAppleStoreLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereAppHome1Background($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereAppHome1Foreground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereAppHome2Background($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereAppHome2Foreground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereAppHome3Background($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereAppHome3Foreground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereAppPlayStoreLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounter1Description($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounter1Value($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounter2Description($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounter2Value($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounter3Description($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounter3Value($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounter4Value($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterHome1Background($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterHome2Background($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterIcon1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterIcon2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterIcon3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterIcon4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterIcon5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterIcon6($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterIcon7($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterIcon8($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterItem1Description($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterItem1Icon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterItem1Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterItem1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterItem2Description($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterItem2Icon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterItem2Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCounterItem2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereOfferHome3Background($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereOfferHome3Item1Image($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereOfferHome3Item1Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereOfferHome3Item2Image($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereOfferHome3Item2Link($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereOfferLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereTrendingOfferImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereTrendingOfferLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereWhyChooseHome2Background($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereWhyChooseHome3Item1Icon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereWhyChooseHome3Item2Icon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereWhyChooseHome3Item3Icon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereWhyChooseItem1Icon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereWhyChooseItem2Icon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Homepage whereWhyChooseItem3Icon($value)
 */
	class Homepage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HomepageLanguage
 *
 * @property int $id
 * @property int $home_id
 * @property string $language
 * @property string|null $why_choose_title1
 * @property string|null $why_choose_title2
 * @property string|null $why_choose_item1_title
 * @property string|null $why_choose_item2_title
 * @property string|null $why_choose_item3_title
 * @property string|null $why_choose_home3_item1_title
 * @property string|null $why_choose_home3_item2_title
 * @property string|null $why_choose_home3_item3_title
 * @property string|null $why_choose_home3_item1_desc
 * @property string|null $why_choose_home3_item2_desc
 * @property string|null $why_choose_home3_item3_desc
 * @property string|null $counter1_title
 * @property string|null $counter2_title
 * @property string|null $counter3_title
 * @property string|null $counter4_title
 * @property string|null $offer_title1
 * @property string|null $offer_title2
 * @property string|null $offer_home3_item1_title
 * @property string|null $offer_home3_item2_title
 * @property string|null $offer_home3_item1_description
 * @property string|null $offer_home3_item2_description
 * @property string|null $about_offer_title1
 * @property string|null $about_offer_title2
 * @property string|null $about_offer_title3
 * @property string|null $trending_offer_title1
 * @property string|null $trending_offer_title2
 * @property string|null $app_title1
 * @property string|null $app_title2
 * @property string|null $app_title3
 * @property string|null $app_description
 * @property string|null $app_home2_title
 * @property string|null $app_home2_desc
 * @property string|null $app_home3_title
 * @property string|null $app_home3_desc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAboutOfferTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAboutOfferTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAboutOfferTitle3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAppDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAppHome2Desc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAppHome2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAppHome3Desc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAppHome3Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAppTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAppTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereAppTitle3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereCounter1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereCounter2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereCounter3Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereCounter4Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereHomeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereOfferHome3Item1Description($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereOfferHome3Item1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereOfferHome3Item2Description($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereOfferHome3Item2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereOfferTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereOfferTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereTrendingOfferTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereTrendingOfferTitle2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseHome3Item1Desc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseHome3Item1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseHome3Item2Desc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseHome3Item2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseHome3Item3Desc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseHome3Item3Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseItem1Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseItem2Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseItem3Title($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseTitle1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomepageLanguage whereWhyChooseTitle2($value)
 */
	class HomepageLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $name
 * @property string $lang
 * @property string $slug
 * @property int $default
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Language whereUpdatedAt($value)
 */
	class Language extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MaintainanceText
 *
 * @property int $id
 * @property int $status
 * @property string $image
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MaintainanceText newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintainanceText newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintainanceText query()
 * @method static \Illuminate\Database\Eloquent\Builder|MaintainanceText whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintainanceText whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintainanceText whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintainanceText whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintainanceText whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MaintainanceText whereUpdatedAt($value)
 */
	class MaintainanceText extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property string $invoice_id
 * @property int $user_id
 * @property string $address
 * @property float $discount
 * @property float $delivery_charge
 * @property float $subtotal
 * @property float $grand_total
 * @property int $product_qty
 * @property string|null $payment_method
 * @property string $payment_status
 * @property string|null $payment_approve_date
 * @property string|null $transaction_id
 * @property mixed|null $coupon_info
 * @property string|null $currency_name
 * @property string $order_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $address_id
 * @property-read \App\Models\DeliveryArea|null $deliveryArea
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\OrderItem> $orderItems
 * @property-read int|null $order_items_count
 * @property-read \App\Models\User $user
 * @property-read \App\Models\Address|null $userAddress
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCouponInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCurrencyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereGrandTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentApproveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereProductQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderItem
 *
 * @property int $id
 * @property int $order_id
 * @property string $product_name
 * @property int $product_id
 * @property float $unit_price
 * @property int $qty
 * @property mixed|null $product_size
 * @property mixed|null $product_option
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereProductOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereProductSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderItem whereUpdatedAt($value)
 */
	class OrderItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderPlacedNotification
 *
 * @property int $id
 * @property string $message
 * @property int $order_id
 * @property int $seen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderPlacedNotification whereUpdatedAt($value)
 */
	class OrderPlacedNotification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OurFeature
 *
 * @property int $id
 * @property string $language
 * @property string $icon
 * @property string $our_feature_title
 * @property string $title
 * @property string $short_description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature whereOurFeatureTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurFeature whereUpdatedAt($value)
 */
	class OurFeature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OurTeam
 *
 * @property int $id
 * @property string $image
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $linkedin
 * @property string|null $instagram
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $tiktok
 * @property string $telegram
 * @property-read \App\Models\OurTeamLanguage|null $teamlangadmin
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam query()
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereLinkedin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereTiktok($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeam whereUpdatedAt($value)
 */
	class OurTeam extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OurTeamLanguage
 *
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeamLanguage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeamLanguage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OurTeamLanguage query()
 */
	class OurTeamLanguage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PageItem
 *
 * @property int $id
 * @property string $services_heading
 * @property string $services_banner
 * @property string|null $services_seo_title
 * @property string|null $services_seo_meta_description
 * @property string $portfolios_heading
 * @property string $portfolios_banner
 * @property string|null $portfolios_seo_title
 * @property string|null $portfolios_seo_meta_description
 * @property string $about_heading
 * @property string $about_banner
 * @property string|null $about_photo
 * @property string $about_description
 * @property string|null $about_seo_title
 * @property string|null $about_seo_meta_description
 * @property string $contact_heading
 * @property string $contact_banner
 * @property string $contact_address
 * @property string $contact_email
 * @property string $contact_phone
 * @property string $contact_map_iframe
 * @property string|null $contact_seo_title
 * @property string|null $contact_seo_meta_description
 * @property string $blog_heading
 * @property string $blog_banner
 * @property string|null $blog_seo_title
 * @property string|null $blog_seo_meta_description
 * @property string $category_banner
 * @property string $archive_banner
 * @property string|null $archive_seo_title
 * @property string|null $archive_seo_meta_description
 * @property string $search_banner
 * @property string|null $search_seo_title
 * @property string|null $search_seo_meta_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereAboutBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereAboutDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereAboutHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereAboutPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereAboutSeoMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereAboutSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereArchiveBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereArchiveSeoMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereArchiveSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereBlogBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereBlogHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereBlogSeoMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereBlogSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereCategoryBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereContactAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereContactBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereContactEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereContactHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereContactMapIframe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereContactPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereContactSeoMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereContactSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem wherePortfoliosBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem wherePortfoliosHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem wherePortfoliosSeoMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem wherePortfoliosSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereSearchBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereSearchSeoMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereSearchSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereServicesBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereServicesHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereServicesSeoMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereServicesSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageItem whereUpdatedAt($value)
 */
	class PageItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PaymentGatewaySetting
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentGatewaySetting whereValue($value)
 */
	class PaymentGatewaySetting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Portfolio
 *
 * @property int $id
 * @property int $portfolio_category_id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $photo
 * @property string $banner
 * @property string|null $project_client
 * @property string|null $project_company
 * @property string|null $project_start_date
 * @property string|null $project_end_date
 * @property string|null $project_cost
 * @property string|null $project_website
 * @property string|null $seo_title
 * @property string|null $seo_meta_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PortfolioCategory|null $rPortfolioCategory
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio wherePortfolioCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereProjectClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereProjectCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereProjectCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereProjectEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereProjectStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereProjectWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereSeoMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Portfolio whereUpdatedAt($value)
 */
	class Portfolio extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PortfolioCategory
 *
 * @property int $id
 * @property string $category_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioCategory whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioCategory whereUpdatedAt($value)
 */
	class PortfolioCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PortfolioPhoto
 *
 * @property int $id
 * @property int $portfolio_id
 * @property string $photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioPhoto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioPhoto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioPhoto query()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioPhoto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioPhoto wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioPhoto wherePortfolioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioPhoto whereUpdatedAt($value)
 */
	class PortfolioPhoto extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PortfolioVideo
 *
 * @property int $id
 * @property int $portfolio_id
 * @property string $caption
 * @property string $video_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioVideo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioVideo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioVideo query()
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioVideo whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioVideo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioVideo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioVideo wherePortfolioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioVideo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PortfolioVideo whereVideoId($value)
 */
	class PortfolioVideo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PrivacyPolicy
 *
 * @property int $id
 * @property string $language
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyPolicy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyPolicy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyPolicy query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyPolicy whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyPolicy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyPolicy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyPolicy whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyPolicy whereUpdatedAt($value)
 */
	class PrivacyPolicy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $thumb_image
 * @property int $category_id
 * @property string $short_description
 * @property string $long_description
 * @property float $price
 * @property float $offer_price
 * @property int $quantity
 * @property string|null $sku
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property int $show_at_home
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductGallery> $productImages
 * @property-read int|null $product_images_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductOption> $productOptions
 * @property-read int|null $product_options_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductSize> $productSizes
 * @property-read int|null $product_sizes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ProductRating> $reviews
 * @property-read int|null $reviews_count
 * @method static \Database\Factories\ProductFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOfferPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShowAtHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereThumbImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductGallery
 *
 * @property int $id
 * @property int $product_id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductGallery whereUpdatedAt($value)
 */
	class ProductGallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductOption
 *
 * @property int $id
 * @property int $product_id
 * @property string $name
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductOption whereUpdatedAt($value)
 */
	class ProductOption extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductRating
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property int $rating
 * @property string $review
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductRating whereUserId($value)
 */
	class ProductRating extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductSize
 *
 * @property int $id
 * @property int $product_id
 * @property string $name
 * @property float $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductSize whereUpdatedAt($value)
 */
	class ProductSize extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Reservation
 *
 * @property int $id
 * @property string $reservation_id
 * @property int $user_id
 * @property string $name
 * @property string $phone
 * @property string $date
 * @property string $time
 * @property int $persons
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation wherePersons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereReservationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereUserId($value)
 */
	class Reservation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ReservationTime
 *
 * @property int $id
 * @property string $start_time
 * @property string $end_time
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationTime query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationTime whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationTime whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationTime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationTime whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationTime whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationTime whereUpdatedAt($value)
 */
	class ReservationTime extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SectionTitle
 *
 * @property int $id
 * @property string $language
 * @property string|null $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle query()
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SectionTitle whereValue($value)
 */
	class SectionTitle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property string $name
 * @property string $language
 * @property string $slug
 * @property string $short_description
 * @property string $description
 * @property string $icon
 * @property string $photo
 * @property string $banner
 * @property string|null $seo_title
 * @property string|null $seo_meta_description
 * @property int $item_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereItemOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSeoMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Slider
 *
 * @property int $id
 * @property string $language
 * @property string $image
 * @property string $background_video
 * @property string|null $offer
 * @property string $title
 * @property string $sub_title
 * @property string $short_description
 * @property string|null $button_link
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SliderFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereBackgroundVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereButtonLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereOffer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereSubTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereUpdatedAt($value)
 */
	class Slider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SocialLink
 *
 * @property int $id
 * @property string $icon
 * @property string $name
 * @property string $link
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLink whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLink whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLink whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLink whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLink whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLink whereUpdatedAt($value)
 */
	class SocialLink extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subscriber
 *
 * @property int $id
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereUpdatedAt($value)
 */
	class Subscriber extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Testimonial
 *
 * @property int $id
 * @property string $language
 * @property string $image
 * @property string $name
 * @property string $title
 * @property string $review
 * @property int $rating
 * @property int $show_at_home
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereShowAtHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 */
	class Testimonial extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TramsAndCondition
 *
 * @property int $id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TramsAndCondition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TramsAndCondition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TramsAndCondition query()
 * @method static \Illuminate\Database\Eloquent\Builder|TramsAndCondition whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TramsAndCondition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TramsAndCondition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TramsAndCondition whereUpdatedAt($value)
 */
	class TramsAndCondition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $avatar
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Chat> $chats
 * @property-read int|null $chats_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Order> $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vendor
 *
 * @property int $id
 * @property string $banner
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $description
 * @property string|null $fb_link
 * @property string|null $tw_link
 * @property string|null $insta_link
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $shop_name
 * @property int|null $status
 * @property-read \App\Models\Admin|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereFbLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereInstaLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereShopName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereTwLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereUserId($value)
 */
	class Vendor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VendorCondition
 *
 * @method static \Illuminate\Database\Eloquent\Builder|VendorCondition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VendorCondition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VendorCondition query()
 */
	class VendorCondition extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WhyChooseUs
 *
 * @property int $id
 * @property string $language
 * @property string $icon
 * @property string $title
 * @property string $short_description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\WhyChooseUsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WhyChooseUs whereUpdatedAt($value)
 */
	class WhyChooseUs extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Wishlist
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist query()
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Wishlist whereUserId($value)
 */
	class Wishlist extends \Eloquent {}
}

