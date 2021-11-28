<?php

use App\Models\User;

 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\ShippingAreaController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\SiteSettingController;
use App\Http\Controllers\Backend\ComplainController;
use App\Http\Controllers\Backend\AdminUserController;

use App\Http\Controllers\User\WishlistController;
use App\Http\Controllers\User\CartPageController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\StripeController;
use App\Http\Controllers\User\CashController;
use App\Http\Controllers\User\AllUserController;
use App\Http\Controllers\User\ReviewController;

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeBlogController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:admin'])->group(function(){



Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard')->middleware('auth:admin');

// Admin All Routes 

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');

Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');

Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');

Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');

Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');

});  // end Middleware admin

//User All Routs
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
	$id = Auth::user()->id;
    $user = User::find($id);
    return view('dashboard',compact('user'));
})->name('dashboard');

Route::get('/', [IndexController::class, 'index']);

Route::get('/user/logout', [IndexController::class, 'UserLogout']) ->name('user.logout');

Route::get('/user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');

Route::post('/user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');

Route::get('/user/change/password', [IndexController::class, 'UserChangePassword'])->name('change.password');

Route::post('/user/password/update', [IndexController::class, 'UserPasswordUpdate'])->name('user.password.update');


// Admin Category all Routes  
Route::prefix('category')->group(function(){

    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');
    
    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
    
    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
    
    Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
    
    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');

    // Admin Sub Category All Routes

    Route::get('/sub/view', [SubCategoryController::class, 'SubCategoryView'])->name('all.subcategory');

    Route::post('/sub/store', [SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');

    Route::get('/sub/edit/{id}', [SubCategoryController::class, 'SubCategoryEdit'])->name('subcategory.edit');

    Route::post('/update', [SubCategoryController::class, 'SubCategoryUpdate'])->name('subcategory.update');

    Route::get('/sub/delete/{id}', [SubCategoryController::class, 'SubCategoryDelete'])->name('subcategory.delete');

    Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);
    
});



// Admin Services All Routes 

Route::prefix('service')->group(function(){

    Route::get('/add', [ServiceController::class, 'AddService'])->name('add-service');
    
    Route::post('/store', [ServiceController::class, 'StoreService'])->name('service-store');

    Route::get('/manage', [ServiceController::class, 'ManageService'])->name('manage-service');
    
    Route::get('/edit/{id}', [ServiceController::class, 'EditService'])->name('service.edit');
    
    Route::post('/data/update', [ServiceController::class, 'ServiceDataUpdate'])->name('service-update');
    
    Route::post('/image/update', [ServiceController::class, 'MultiImageUpdate'])->name('update-service-image');
    
    Route::post('/thambnail/update', [ServiceController::class, 'ThambnailImageUpdate'])->name('update-service-thambnail');
    
    Route::get('/multiimg/delete/{id}', [ServiceController::class, 'MultiImageDelete'])->name('service.multiimg.delete');
    
    Route::get('/inactive/{id}', [ServiceController::class, 'ServiceInactive'])->name('service.inactive');
    
    Route::get('/active/{id}', [ServiceController::class, 'ServiceActive'])->name('service.active');
    
    Route::get('/delete/{id}', [ServiceController::class, 'ServiceDelete'])->name('service.delete');
     
});


//// Frontend All Routes /////
/// Multi Language All Routes ////

Route::get('/language/bangla', [LanguageController::class, 'Bangla'])->name('bangla.language');

Route::get('/language/english', [LanguageController::class, 'English'])->name('english.language');

// Frontend Service Details Page url 
Route::get('/service/details/{id}/{slug}', [IndexController::class, 'ServiceDetails']);

// Frontend Service Tags Page 
Route::get('/service/tag/{tag}', [IndexController::class, 'TagWiseService']);

// Frontend Category wise Data
Route::get('/category/service/{cat_id}/{slug}', [IndexController::class, 'CatWiseService']);

// Frontend SubCategory wise Data
Route::get('/subcategory/service/{subcat_id}/{slug}', [IndexController::class, 'SubCatWiseService']);

// Service View Modal with Ajax
Route::get('/service/view/modal/{id}', [IndexController::class, 'ServiceViewAjax']);

// Add to Cart Store Data
Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);

// Get Data from mini cart
Route::get('/service/mini/cart/', [CartController::class, 'AddMiniCart']);

// Remove mini cart
Route::get('/minicart/service-remove/{rowId}', [CartController::class, 'RemoveMiniCart']);

// Add to Wishlist
Route::post('/add-to-wishlist/{service_id}', [CartController::class, 'AddToWishlist']);

/////////////////////  User Must Login  ////
Route::group(['prefix'=>'user','middleware' => ['user','auth'],'namespace'=>'User'],function(){

    // Wishlist page
    Route::get('/wishlist', [WishlistController::class, 'ViewWishlist'])->name('wishlist');
    
    Route::get('/get-wishlist-service', [WishlistController::class, 'GetWishlistService']);
    
    Route::get('/wishlist-remove/{id}', [WishlistController::class, 'RemoveWishlistService']);
    
    Route::post('/stripe/order', [StripeController::class, 'StripeOrder'])->name('stripe.order');
    
    Route::post('/cash/order', [CashController::class, 'CashOrder'])->name('cash.order');
    
    Route::get('/my/bookings', [AllUserController::class, 'MyBookings'])->name('my.bookings');
    
    Route::get('/booking_details/{booking_id}', [AllUserController::class, 'BookingDetails']);
    
    Route::get('/invoice_download/{booking_id}', [AllUserController::class, 'InvoiceDownload']);
    
    Route::post('/complain/booking/{booking_id}', [AllUserController::class, 'ComplainBooking'])->name('complain.booking');
    
    Route::get('/complain/booking/list', [AllUserController::class, 'ComplainBookingList'])->name('complain.booking.list');
    
    Route::get('/cancel/bookings', [AllUserController::class, 'CancelBookings'])->name('cancel.bookings');
        
    
    // /// Order Traking Route 
    Route::post('/booking/tracking', [AllUserController::class, 'BookingTraking'])->name('track.booking'); 
    
});

// My Cart Page All Routes
Route::get('/mycart', [CartPageController::class, 'MyCart'])->name('mycart');

Route::get('/user/get-cart-service', [CartPageController::class, 'GetCartService']);

Route::get('/user/cart-remove/{rowId}', [CartPageController::class, 'RemoveCartService']);

Route::get('/cart-increment/{rowId}', [CartPageController::class, 'CartIncrement']);

Route::get('/cart-decrement/{rowId}', [CartPageController::class, 'CartDecrement']);

// Admin Coupons All Routes 

Route::prefix('coupons')->group(function(){

    Route::get('/view', [CouponController::class, 'CouponView'])->name('manage-coupon');
    
    Route::post('/store', [CouponController::class, 'CouponStore'])->name('coupon.store');
    
    Route::get('/edit/{id}', [CouponController::class, 'CouponEdit'])->name('coupon.edit');

    Route::post('/update/{id}', [CouponController::class, 'CouponUpdate'])->name('coupon.update');
    
    Route::get('/delete/{id}', [CouponController::class, 'CouponDelete'])->name('coupon.delete');
     
});


// Admin Shipping All Routes 

Route::prefix('shipping')->group(function(){

    // Ship Division 
    Route::get('/division/view', [ShippingAreaController::class, 'DivisionView'])->name('manage-division');
    
    Route::post('/division/store', [ShippingAreaController::class, 'DivisionStore'])->name('division.store');
    
    Route::get('/division/edit/{id}', [ShippingAreaController::class, 'DivisionEdit'])->name('division.edit');
    
    Route::post('/division/update/{id}', [ShippingAreaController::class, 'DivisionUpdate'])->name('division.update');
    
    Route::get('/division/delete/{id}', [ShippingAreaController::class, 'DivisionDelete'])->name('division.delete');
    
    
    
    // Ship District 
    Route::get('/district/view', [ShippingAreaController::class, 'DistrictView'])->name('manage-district');
    
    Route::post('/district/store', [ShippingAreaController::class, 'DistrictStore'])->name('district.store');
    
    Route::get('/district/edit/{id}', [ShippingAreaController::class, 'DistrictEdit'])->name('district.edit');
    
    Route::post('/district/update/{id}', [ShippingAreaController::class, 'DistrictUpdate'])->name('district.update');
    
    Route::get('/district/delete/{id}', [ShippingAreaController::class, 'DistrictDelete'])->name('district.delete');
      
    
    // Ship City 
    Route::get('/city/view', [ShippingAreaController::class, 'CityView'])->name('manage-city');
    
    Route::post('/city/store', [ShippingAreaController::class, 'CityStore'])->name('city.store');
    
    Route::get('/city/edit/{id}', [ShippingAreaController::class, 'CityEdit'])->name('city.edit');
    
    Route::post('/city/update/{id}', [ShippingAreaController::class, 'CityUpdate'])->name('city.update');
    
    Route::get('/city/delete/{id}', [ShippingAreaController::class, 'CityDelete'])->name('city.delete');
     
});

// Frontend Coupon Option

Route::post('/coupon-apply', [CartController::class, 'CouponApply']);

Route::get('/coupon-calculation', [CartController::class, 'CouponCalculation']);

Route::get('/coupon-remove', [CartController::class, 'CouponRemove']);

// Checkout Routes 

Route::get('/checkout', [CartController::class, 'CheckoutCreate'])->name('checkout');

Route::get('/district-get/ajax/{division_id}', [CheckoutController::class, 'DistrictGetAjax']);

Route::get('/city-get/ajax/{district_id}', [CheckoutController::class, 'CityGetAjax']);

Route::post('/checkout/store', [CheckoutController::class, 'CheckoutStore'])->name('checkout.store');

// Admin Order All Routes 

Route::prefix('bookings')->group(function(){

    Route::get('/pending/bookings', [BookingController::class, 'PendingBookings'])->name('pending-bookings');
    
    Route::get('/pending/bookings/details/{booking_id}', [BookingController::class, 'PendingBookingsDetails'])->name('pending.booking.details');
    
    Route::get('/confirmed/bookings', [BookingController::class, 'ConfirmedBookings'])->name('confirmed-bookings');
    
    Route::get('/processing/bookings', [BookingController::class, 'ProcessingBookings'])->name('processing-bookings');
    
    Route::get('/shipped/bookings', [BookingController::class, 'ShippedBookings'])->name('shipped-bookings');
    
    Route::get('/delivered/bookings', [BookingController::class, 'DeliveredBookings'])->name('delivered-bookings');
    
    Route::get('/cancel/bookings', [BookingController::class, 'CancelBookings'])->name('cancel-bookings');

    // Update Status 
    Route::get('/pending/confirm/{booking_id}', [BookingController::class, 'PendingToConfirm'])->name('pending-confirm');

    Route::get('/confirm/processing/{booking_id}', [BookingController::class, 'ConfirmToProcessing'])->name('confirm.processing');

    Route::get('/processing/shipped/{booking_id}', [BookingController::class, 'ProcessingToShipped'])->name('processing.shipped');

    Route::get('/shipped/delivered/{booking_id}', [BookingController::class, 'ShippedToDelivered'])->name('shipped.delivered');

    Route::get('/invoice/download/{booking_id}', [BookingController::class, 'AdminInvoiceDownload'])->name('invoice.download');

});

// Admin Reports Routes 
Route::prefix('reports')->group(function(){

    Route::get('/view', [ReportController::class, 'ReportView'])->name('all-reports');
    
    Route::post('/search/by/date', [ReportController::class, 'ReportByDate'])->name('search-by-date');
    
    Route::post('/search/by/month', [ReportController::class, 'ReportByMonth'])->name('search-by-month');
    
    Route::post('/search/by/year', [ReportController::class, 'ReportByYear'])->name('search-by-year');
    
});

    // Admin Get All User Routes 
Route::prefix('alluser')->group(function(){

    Route::get('/view', [AdminProfileController::class, 'AllUsers'])->name('all-users');
     
    
});

// Admin Blog  Routes 
Route::prefix('blog')->group(function(){

    Route::get('/category', [BlogController::class, 'BlogCategory'])->name('blog.category');
    
    Route::post('/store', [BlogController::class, 'BlogCategoryStore'])->name('blogcategory.store');
    
    Route::get('/category/edit/{id}', [BlogController::class, 'BlogCategoryEdit'])->name('blog.category.edit');
    
    Route::get('/category/delete/{id}', [BlogController::class, 'BlogCategoryDelete'])->name('blog.category.delete');
    
    Route::post('/category/update', [BlogController::class, 'BlogCategoryUpdate'])->name('blogcategory.update');

    // Admin View Blog Post Routes 

    Route::get('/list/post', [BlogController::class, 'ListBlogPost'])->name('list.post');

    Route::get('/add/post', [BlogController::class, 'AddBlogPost'])->name('add.post');

    Route::post('/post/store', [BlogController::class, 'BlogPostStore'])->name('post-store');

    Route::get('/post/edit/{id}', [BlogController::class, 'BlogPostEdit'])->name('blog.post.edit');
    
    Route::get('/post/delete/{id}', [BlogController::class, 'BlogPostDelete'])->name('blog.post.delete');

    Route::post('/post/update', [BlogController::class, 'BlogPostUpdate'])->name('blogpost.update');

});

//  Frontend Blog Show Routes 

Route::get('/blog', [HomeBlogController::class, 'AddBlogPost'])->name('home.blog');

Route::get('/post/details/{id}', [HomeBlogController::class, 'DetailsBlogPost'])->name('post.details');

Route::get('/blog/category/post/{category_id}', [HomeBlogController::class, 'HomeBlogCatPost']);

// Admin Site Setting Routes 
Route::prefix('setting')->group(function(){

    Route::get('/site', [SiteSettingController::class, 'SiteSetting'])->name('site.setting');
    Route::post('/site/update', [SiteSettingController::class, 'SiteSettingUpdate'])->name('update.sitesetting');
    
    Route::get('/seo', [SiteSettingController::class, 'SeoSetting'])->name('seo.setting'); 
    Route::post('/seo/update', [SiteSettingController::class, 'SeoSettingUpdate'])->name('update.seosetting');
});

// Newsletter Email Routes
Route::post('/newsletter/email', [IndexController::class, 'NewsletterEmail'])->name('newsletter.email');

// Admin Booking Complain Routes 
Route::prefix('complain')->group(function(){

    Route::get('/admin/request', [ComplainController::class, 'ComplainRequest'])->name('complain.request');
    
    Route::get('/admin/complain/approve/{booking_id}', [ComplainController::class, 'ComplainRequestApprove'])->name('complain.approve');
    Route::get('/admin/complain/reject/{booking_id}', [ComplainController::class, 'ComplainRequestReject'])->name('complain.reject');
    
    Route::get('/admin/all/request', [ComplainController::class, 'ComplainAllRequest'])->name('all.request');
     
});

/// Frontend Service Review Routes

Route::post('/review/store', [ReviewController::class, 'ReviewStore'])->name('review.store');

// Admin Manage Review Routes 
Route::prefix('review')->group(function(){

    Route::get('/pending', [ReviewController::class, 'PendingReview'])->name('pending.review');
    
    Route::get('/admin/approve/{id}', [ReviewController::class, 'ReviewApprove'])->name('review.approve');
    
    Route::get('/publish', [ReviewController::class, 'PublishReview'])->name('publish.review');
    
    Route::get('/delete/{id}', [ReviewController::class, 'DeleteReview'])->name('delete.review');
     
});

// Admin Manage Stock Routes 
Route::prefix('stock')->group(function(){

    Route::get('/service', [ServiceController::class, 'ServiceStock'])->name('service.stock');
     
     
});

// Admin User Role Routes 
Route::prefix('adminuserrole')->group(function(){

    Route::get('/all', [AdminUserController::class, 'AllAdminRole'])->name('all.admin.user');
    
    Route::get('/add', [AdminUserController::class, 'AddAdminRole'])->name('add.admin');
    
    Route::post('/store', [AdminUserController::class, 'StoreAdminRole'])->name('admin.user.store');
      
    Route::get('/edit/{id}', [AdminUserController::class, 'EditAdminRole'])->name('edit.admin.user');
    
    Route::post('/update', [AdminUserController::class, 'UpdateAdminRole'])->name('admin.user.update');
    
    Route::get('/delete/{id}', [AdminUserController::class, 'DeleteAdminRole'])->name('delete.admin.user');
     
});

/// Product Search Route 
Route::post('/search', [IndexController::class, 'ServiceSearch'])->name('service.search');

// Advance Search Routes 
Route::post('search-service', [IndexController::class, 'SearchService']);
    