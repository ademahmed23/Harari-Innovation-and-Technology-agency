<?php

use App\DataTables\SocialLinkDataTable;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminManagementController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Admin\AppDownloadSectionController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\ErrorPageController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OurFeatureController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\ChefController;
use App\Http\Controllers\Admin\ClearDatabaseController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CustomPageBuilderController;
use App\Http\Controllers\Admin\DailyOfferController;
use App\Http\Controllers\Admin\DeliveryAreaController;
use App\Http\Controllers\Admin\FooterInfoController;
use App\Http\Controllers\Admin\MenuBuilderController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentGatewaySettingController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\ProductOptionController;
use App\Http\Controllers\Admin\ProductReviewController;
use App\Http\Controllers\Admin\ProductSizeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\ReservationTimeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TramsAndConditionController;
use App\Http\Controllers\Admin\WhyChooseUsController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\RolePermisionController;
use App\Http\Controllers\Admin\RoleUserController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\AdminFeatureController;

use App\Models\AppDownloadSection;
use App\Models\BannerSlider;
use App\Models\PrivacyPolicy;
use App\Models\ReservationTime;
use App\Models\TramsAndCondtion;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin','as'=>'admin.'], function () {
    Route::get('login', [AdminAuthController::class, 'index'])->name('login');
    Route::post('login', [AdminAuthController::class, 'handleLogin'])->name('handle-login');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('forget-password', [AdminAuthController::class, 'forgetPassword'])->name('forget-password');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['admin']], function(){

    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    /** Profile Routes */
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password.update');

    /** Slider Routes */
    Route::resource('slider', SliderController::class);
    Route::get('/hero', [HeroController::class, 'index'])->name('hero.index');
    Route::put('/hero', [HeroController::class, 'update'])->name('hero.update');

    /** Why choose us Routes */
    Route::put('why-choose-title-update', [WhyChooseUsController::class, 'updateTitle'])->name('why-choose-title.update');
    Route::resource('why-choose-us', WhyChooseUsController::class);

    /** Product Category Routes */
    Route::resource('category', CategoryController::class);
    Route::resource('language', LanguageController::class);


    /** Product Routes */
    Route::resource('product', ProductController::class);

    /** Product Gallery Routes */
    Route::get('product-gallery/{product}', [ProductGalleryController::class, 'index'])->name('product-gallery.show-index');
    Route::resource('product-gallery', ProductGalleryController::class);

    /** Product Size Routes */
    Route::get('product-size/{product}', [ProductSizeController::class, 'index'])->name('product-size.show-index');
    Route::resource('product-size', ProductSizeController::class);

    /** Product Size Routes */
    Route::resource('product-option', ProductOptionController::class);

    /** Product Reviews Routes */
    Route::get('product-reviews', [ProductReviewController::class, 'index'])->name('product-reviews.index');
    Route::post('product-reviews', [ProductReviewController::class, 'updateStatus'])->name('product-reviews.update');
    Route::delete('product-reviews/{id}', [ProductReviewController::class, 'destroy'])->name('product-reviews.destroy');


    /** Coupon Routes */
    Route::resource('coupon', CouponController::class);
    Route::resource('error-page', ErrorPageController::class);

    /** Delivery Area Routes */
    Route::resource('delivery-area', DeliveryAreaController::class);
    // Route::resource('our-features', OurFeatureController::class);

    /** Order Routes */
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::delete('orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

    Route::get('pending-orders', [OrderController::class, 'pendingOrderIndex'])->name('pending-orders');
    Route::get('inprocess-orders', [OrderController::class, 'inProcessOrderIndex'])->name('inprocess-orders');
    Route::get('delivered-orders', [OrderController::class, 'deliveredOrderIndex'])->name('delivered-orders');
    Route::get('declined-orders', [OrderController::class, 'declinedOrderIndex'])->name('declined-orders');

    Route::get('orders/status/{id}', [OrderController::class, 'getOrderStatus'])->name('orders.status');
    Route::put('orders/status-update/{id}', [OrderController::class, 'orderStatusUpdate'])->name('orders.status-update');

    /** Order Notification Routes */
    Route::get('clear-notification',[AdminDashboardController::class, 'clearNotification'])->name('clear-notification');

    /** chat Routes */
    Route::get('chat',[ChatController::class, 'index'])->name('chat.index');
    Route::get('chat/get-conversation/{senderId}',[ChatController::class, 'getConversation'])->name('chat.get-conversation');
    Route::post('chat/send-message', [ChatController::class, 'sendMessage'])->name('chat.send-message');
    Route::post('translate-string', [LocalizationController::class, 'translateString'])->name('translate-string');

    Route::get('admin-localization', [LocalizationController::class, 'adminIndex'])->name('admin-localization.index');
    Route::get('frontend-localization', [LocalizationController::class, 'frontnedIndex'])->name('frontend-localization.index');

    Route::post('extract-localize-string', [LocalizationController::class, 'extractLocalizationStrings'])->name('extract-localize-string');

    Route::post('update-lang-string', [LocalizationController::class, 'updateLangString'])->name('update-lang-string');
    /** Daily Offer Routes */
    Route::get('daily-offer/search-product', [DailyOfferController::class, 'productSearch'])->name('daily-offer.search-product');
    Route::put('daily-offer-title-update', [DailyOfferController::class, 'updateTitle'])->name('daily-offer-title-update');
    Route::resource('daily-offer', DailyOfferController::class);

    /** Banner Slider Routes */
    Route::resource('banner-slider', BannerSliderController::class);

    /** Chefs Routes */
    Route::put('chefs-title-update', [ChefController::class, 'updateTitle'])->name('chefs-title-update');
    Route::resource('chefs', ChefController::class);

    /** App Download Routes */
    Route::get('app-download', [AppDownloadSectionController::class, 'index'])->name('app-download.index');
    Route::post('app-download', [AppDownloadSectionController::class, 'store'])->name('app-download.store');

    /** Testimonial Routes */
    Route::put('testimonial-title-update', [TestimonialController::class, 'updateTitle'])->name('testimonial-title-update');
    Route::resource('testimonial', TestimonialController::class);
    Route::put('features-title-update', [OurFeatureController::class, 'updatetitle'])->name('features-title-update');
    Route::resource('our-features', OurFeatureController::class);

    /** Counter Routes */
    Route::get('counter', [CounterController::class, 'index'])->name('counter.index');
    Route::put('counter', [CounterController::class, 'update'])->name('counter.update');

    /** Blogs Category Routes */
    Route::resource('blog-category', BlogCategoryController::class);
    Route::get('fetch-news-category', [BlogController::class, 'fetchCategory'])->name('fetch-news-category');


    /** Blogs Routes */
    Route::get('blogs/comments', [BlogController::class, 'blogComment'])->name('blogs.comments.index');
    Route::get('blogs/comments/{id}', [BlogController::class, 'commentStatusUpdate'])->name('blogs.comments.update');
    Route::delete('blogs/comments/{id}', [BlogController::class, 'commentDestroy'])->name('blogs.comments.destroy');

    Route::resource('blogs', BlogController::class);

    /** About Routes */
    Route::get('about', [AboutController::class, 'index'])->name('about.index');
    Route::put('about', [AboutController::class, 'update'])->name('about.update');

    /** privacy policy Routes */
    Route::get('privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy.index');
    Route::put('privacy-policy', [PrivacyPolicyController::class, 'update'])->name('privacy-policy.update');

    /** privacy policy Routes */
    Route::get('trams-and-conditions', [TramsAndConditionController::class, 'index'])->name('trams-and-conditions.index');
    Route::put('trams-and-conditions', [TramsAndConditionController::class, 'update'])->name('trams-and-conditions.update');

    /** Contact Routes */
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::put('contact', [ContactController::class, 'update'])->name('contact.update');

    /** Reservation Routes */
    Route::resource('reservation-time', ReservationTimeController::class);
    Route::get('reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::post('reservation', [ReservationController::class, 'update'])->name('reservation.update');
    Route::delete('reservation/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');

    /** News letter Routes */
    Route::get('news-letter', [NewsLetterController::class, 'index'])->name('news-letter.index');
    Route::post('news-letter', [NewsLetterController::class, 'sendNewsLetter'])->name('news-letter.send');

    /** Social Links Routes */
    Route::resource('social-link', SocialLinkController::class);

    /** Footer Routes */
    Route::get('footer-info', [FooterInfoController::class, 'index'])->name('footer-info.index');
    Route::put('footer-info', [FooterInfoController::class, 'update'])->name('footer-info.update');

    /** Menu builder Routes */
    Route::get('menu-builder', [MenuBuilderController::class, 'index'])->name('menu-builder.index');
    /** Custom page builder Routes */
    Route::resource('custom-page-builder', CustomPageBuilderController::class);

    /** Admin management Routes */
    Route::resource('admin-management', AdminManagementController::class);


    /** Payment Gateway Setting Routes */
    Route::get('/payment-gateway-setting', [PaymentGatewaySettingController::class, 'index'])->name('payment-setting.index');
    Route::put('/paypal-setting', [PaymentGatewaySettingController::class, 'paypalSettingUpdate'])->name('paypal-setting.update');
    Route::put('/stripe-setting', [PaymentGatewaySettingController::class, 'stripeSettingUpdate'])->name('stripe-setting.update');
    Route::put('/razorpay-setting', [PaymentGatewaySettingController::class, 'razorpaySettingUpdate'])->name('razorpay-setting.update');
    Route::put('/chapa-setting', [PaymentGatewaySettingController::class, 'chapapaySettingUpdate'])->name('chapa-setting.update');

    /** Setting Routes */
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::put('/general-setting', [SettingController::class, 'UpdateGeneralSetting'])->name('general-setting.update');
    Route::put('/pusher-setting', [SettingController::class, 'UpdatePusherSetting'])->name('pusher-setting.update');
    Route::put('/mail-setting', [SettingController::class, 'UpdateMailSetting'])->name('mail-setting.update');
    Route::put('/logo-setting', [SettingController::class, 'UpdateLogoSetting'])->name('logo-setting.update');
    Route::put('/appearance-setting', [SettingController::class, 'UpdateAppearanceSetting'])->name('appearance-setting.update');
    Route::put('/seo-setting', [SettingController::class, 'UpdateSeoSetting'])->name('seo-setting.update');
    Route::put('microsoft-api-setting', [SettingController::class, 'updateMicrosoftApiSetting'])->name('microsoft-api-setting.update');


    /** Clear Database Routes */
    Route::get('/clear-database', [ClearDatabaseController::class, 'index'])->name('clear-database.index');
    Route::post('/clear-database', [ClearDatabaseController::class, 'clearDB'])->name('clear-database.destroy');


    // Route::get('/admin/home-service', [AdminHomePageController::class, 'service'])->name('admin_home_service')->middleware('admin:admin');
    // Route::post('/admin/home-service-update', [AdminHomePageController::class, 'service_update'])->name('admin_home_service_update')->middleware('admin:admin');

    Route::get('/admin/service/show', [AdminServiceController::class, 'index'])->name('admin_service_show');
    Route::get('/admin/service/add', [AdminServiceController::class, 'add'])->name('admin_service_add');
    Route::post('/admin/service/submit', [AdminServiceController::class, 'store'])->name('admin_service_submit');
    Route::get('/admin/service/edit/{id}', [AdminServiceController::class, 'edit'])->name('admin_service_edit');
    Route::post('/admin/service/update/{id}', [AdminServiceController::class, 'update'])->name('admin_service_update');
    Route::get('/admin/service/delete/{id}', [AdminServiceController::class, 'delete'])->name('admin_service_delete');

    // Route::get('/admin/page/services', [AdminPageController::class, 'services'])->name('admin_page_services')->middleware('admin:admin');
    // Route::post('/admin/page/services/update', [AdminPageController::class, 'services_update'])->name('admin_page_services_update')->middleware('admin:admin');

    Route::resource('our-team', TeamController::class);
    Route::put('our-team-status/{id}',[TeamController::class,'changeStatus'])->name('our-team-status');

    Route::get('admin/event/index', [AdminEventController::class, 'index'])->name('admin_event_index');
    Route::get('admin/event/create', [AdminEventController::class, 'create'])->name('admin_event_create');
    Route::post('admin/event/create-submit', [AdminEventController::class, 'create_submit'])->name('admin_event_create_submit');
    Route::get('admin/event/edit/{id}', [AdminEventController::class, 'edit'])->name('admin_event_edit');
    Route::post('admin/event/edit-submit/{id}', [AdminEventController::class, 'edit_submit'])->name('admin_event_edit_submit');
    Route::get('admin/event/delete/{id}', [AdminEventController::class, 'delete'])->name('admin_event_delete');
    Route::get('admin/event/photo/{id}', [AdminEventController::class, 'photo'])->name('admin_event_photo');
    Route::post('admin/event/photo-submit/{id}', [AdminEventController::class, 'photo_submit'])->name('admin_event_photo_submit');
    Route::get('admin/event/photo-delete/{id}', [AdminEventController::class, 'photo_delete'])->name('admin_event_photo_delete');
    Route::get('admin/event/video/{id}', [AdminEventController::class, 'video'])->name('admin_event_video');
    Route::post('admin/event/video-submit/{id}', [AdminEventController::class, 'video_submit'])->name('admin_event_video_submit');
    Route::get('admin/event/video-delete/{id}', [AdminEventController::class, 'video_delete'])->name('admin_event_video_delete');
    Route::get('admin/event/tickets/{id}', [AdminEventController::class, 'tickets'])->name('admin_event_tickets');
    Route::get('/event/ticket/invoice/{id}', [AdminEventController::class, 'ticket_invoice'])->name('admin_event_ticket_invoice');

    Route::get('maintainance-mode',[ContentController::class,'maintainanceMode'])->name('maintainance-mode');
    Route::put('maintainance-mode-update',[ContentController::class,'maintainanceModeUpdate'])->name('maintainance-mode-update');

    Route::controller(PortfolioController::class)->group(function () {
        Route::get('/all/portfolio', 'AllPortfolio')->name('all.portfolio');
        Route::get('/add/portfolio', 'AddPortfolio')->name('add.portfolio');
        Route::post('/store/portfolio', 'StorePortfolio')->name('store.protfolio');
        Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio');
        Route::post('/update/portfolio', 'UpdatePortfolio')->name('update.protfolio');
         Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio');

         Route::get('/portfolio/details/{id}', 'PortfolioDetails')->name('portfolio.details');

         Route::get('/portfolio', 'HomePortfolio')->name('home.portfolio');
    });
   /** Role and Permissions Routes */
   Route::get('role', [RolePermisionController::class, 'index'])->name('role.index');
   Route::get('role/create', [RolePermisionController::class, 'create'])->name('role.create');
   Route::post('role/create', [RolePermisionController::class, 'store'])->name('role.store');
   Route::get('role/{id}/edit', [RolePermisionController::class, 'edit'])->name('role.edit');
   Route::put('role/{id}/edit', [RolePermisionController::class, 'update'])->name('role.update');
   Route::delete('role/{id}/destory', [RolePermisionController::class, 'destory'])->name('role.destory');

   /** Admin User Routes */
   Route::resource('role-users', RoleUserController::class);
   Route::get('admin/feature/index', [AdminFeatureController::class, 'index'])->name('admin_feature_index');
    Route::get('admin/feature/create', [AdminFeatureController::class, 'create'])->name('admin_feature_create');
    Route::post('admin/feature/create-submit', [AdminFeatureController::class, 'create_submit'])->name('admin_feature_create_submit');
    Route::get('admin/feature/edit/{id}', [AdminFeatureController::class, 'edit'])->name('admin_feature_edit');
    Route::post('admin/feature/edit-submit/{id}', [AdminFeatureController::class, 'edit_submit'])->name('admin_feature_edit_submit');
    Route::get('admin/feature/delete/{id}', [AdminFeatureController::class, 'delete'])->name('admin_feature_delete');
    Route::post('admin/feature/section-update', [AdminFeatureController::class, 'section_update'])->name('admin_feature_section_update');
});
