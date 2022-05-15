<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserChatController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmailVerficationController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublishRequestController;
use App\Http\Controllers\professionalProfileController;
use App\Http\Controllers\ServiceProviders;
use App\Http\Controllers\updateProfileController;
use App\Http\Controllers\RangeController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\CompanyLogoController;
use App\Http\Controllers\RealizeYourProjectController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\TwillioVerificationCodeController;
use App\Http\Controllers\ChatsController;
use Pusher\Pusher;









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
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
     Artisan::call('config:cache');

    return "Cache is cleared";
});



Route::post('send-twillio-code' , [ TwillioVerificationCodeController::class, 'sendTwillioCode' ])->name('send-twillio-code');

Route::get('testsendTwillioCode' , [ TwillioVerificationCodeController::class, 'testsendTwillioCode' ])->name('testsendTwillioCode');

Route::get('sendTestMail' , [ EmailVerficationController::class, 'sendTestMail' ])->name('sendTestMail');
    

Route::post('verify-twillio-code' , [ TwillioVerificationCodeController::class, 'verifytwilliocode' ])->name('verify-twillio-code');

Route::post('verify-email-code' , [ EmailVerficationController::class, 'verify_email_code' ])->name('verify-email-code');


Route::get('/' ,[ indexController::class , 'Home'] )->name('/');


Route::get('home' ,[ indexController::class , 'Home'] )->name('home');

Route::get('realizeYourProject', [ RealizeYourProjectController::class , 'realizeYourProject'])->name('realizeYourProject');



Route::post('updateprofilepicture', [PublishRequestController::class, 'updateprofilepicture'])->name('updateprofilepicture');
Route::post('updatecoverpicture', [PublishRequestController::class, 'updatecoverpicture'])->name('updatecoverpicture');


Route::get('serviceprovider' , [ ServiceProviders::class, 'index' ])->name('serviceproviders');

Route::get('serviceproviderfav/{id}' , [ ServiceProviders::class, 'serviceproviderfav' ])->name('serviceproviderfav');

Route::get('serviceprovidercate/{id}' , [ ServiceProviders::class, 'serviceprovidercate' ])->name('serviceprovidercate');


Route::post('whatareyoulookingforservice' , [ ServiceProviders::class, 'whatareyoulookingforservice' ])->name('whatareyoulookingforservice');



Route::get('serviceproviderboards/{id}' , [ ServiceProviders::class, 'serviceproviderboards' ])->name('serviceproviderboards');


Route::get('serviceprovderlimit/{limtit1}/{limtit2}', [ServiceProviders::class, 'serviceproviderpagination'])->name('serviceprovderlimit');


Route::post('updatemapofuser', [ professionalProfileController::class,'updatemapofuser' ])->name('updatemapofuser');



Route::get('requestsPage', [RequestController::class, 'requests'])->name('requestsPage');



Route::get('professionalProfile', [ professionalProfileController::class,'index' ])->name('professionalProfile');
Route::post('updateuserprofile/{id}' , [ professionalProfileController::class ,  'updateuserprofile'])->name('updateuserprofile');
Route::post('userprofileservice' , [ professionalProfileController::class ,  'userprofileservice'])->name('userprofileservice');

Route::get('profileuser/{id}', [ professionalProfileController::class,'profileuser' ])->name('profileuser');
Route::post('updatephotogallary' , [ professionalProfileController::class ,  'updatephotogallary'])->name('updatephotogallary');
Route::get('delete_gallery/{id}' , [ professionalProfileController::class ,  'delete_gallery'])->name('delete_gallery');


Route::post('updatenames' , [ professionalProfileController::class ,  'updatenames'])->name('updatenames');


Route::post('updateusertype' , [ professionalProfileController::class ,  'updateusertype'])->name('updateusertype');



Route::get('contactus', [ ContactUsController::class,'index' ])->name('contactus');


Route::post('contactus_save', [ ContactUsController::class,'contactus_save' ])->name('contactus_save');

Route::get('deleteuserservice/{id}',[ RequestController::class , 'deleteuserservice'] )->name('deleteuserservice');


// Auth::routes();


Route::get('requests', [RequestController::class, 'requests'])->name('requests');
Route::get('requests2/{limtit1}/{limtit2}', [RequestController::class, 'requests2'])->name('requests2');
Route::get('requests-location{id}', [RequestController::class, 'requests_location'])->name('requests-location');
Route::get('requests-category{id}', [RequestController::class, 'requests_category'])->name('requests-category');
Route::post('whatareyoulookingfor', [RequestController::class, 'whatareyoulookingfor'])->name('whatareyoulookingfor');



Route::get('favouriterequest/{user_id}/{requestid}', [RequestController::class, 'favouriterequest'])->name('favouriterequest');

Route::get('close/{id}', [RequestController::class, 'close'])->name('close');

Route::get('cancel/{id}', [RequestController::class, 'cancel'])->name('cancel');





Route::post('/userRegister', [UserController::class, 'userRegister'])->name('userRegister');
Route::post('forgetPassword', [UserController::class, 'forgetPassword'])->name('forgetPassword');
Route::post('/userLogin', [AuthController::class, 'userLogin'])->name('userLogin');
Route::get('/userDashboard', [HomeController::class, 'userDashboard'])->name('userDashboard');

Route::get('/user-chat/{id}', [UserChatController::class, 'user_chat'])->name('user-chat');



Route::get('publishrequest', [PublishRequestController::class, 'publishrequest'])->name('publishrequest');



Route::get('email-verification/{token}', [EmailVerficationController::class, 'email_verification'])->name('email-verification');

Route::post('email-check', [EmailVerficationController::class, 'email_check'])->name('email-check');

Route::post('phone_number_check', [TwillioVerificationCodeController::class, 'phone_number_check'])->name('phone_number_check');

Route::post('email-opt-verfication', [EmailVerficationController::class, 'email_opt_verfication'])->name('email-opt-verfication');


Route::get('UpdatePublishRequest/{id}', [RequestController::class, 'UpdatePublishRequest'])->name('UpdatePublishRequest');


Route::post('confirm-publish-save', [RequestController::class, 'confirm_publish_save'])->name('confirm-publish-save');

Route::post('confirm-publish-save-update', [RequestController::class, 'confirm_publish_save_update'])->name('confirm-publish-save-update');

Route::get('modify_delete_image/{id}', [RequestController::class, 'modify_delete_image'])->name('modify_delete_image');


Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('confirm-publish/{id}', [RequestController::class, 'confirm_publish'])->name('confirm-publish');



Route::get('validating-request', [RequestController::class, 'validating_request'])->name('validating-request');


Route::get('view-request-detail/{id}', [RequestController::class, 'view_request'])->name('view-request1');


Route::get('view-request/{id}', [RequestController::class, 'view_request'])->name('view-request');



Route::get('my-request', [RequestController::class, 'my_request'])->name('my-request');




Route::get('myfavourites-neighbor', [RequestController::class, 'myfavourites_neighbor'])->name('myfavourites-neighbor');

Route::post('email-Verification-opt', [UserController::class, 'email_Verification_opt'])->name('email-Verification-opt');



Route::get('my-favourite-request', [RequestController::class, 'my_favourite_request'])->name('my-favourite-request');

Route::get('my-favourite-request2/{limtit1}/{limtit2}', [RequestController::class, 'my_favourite_request2'])->name('my-favourite-request2');

Route::get('my-favourite-request2/{limtit1}/{limtit2}', [RequestController::class, 'my_favourite_request2'])->name('my-favourite-request2');

Route::post('my-favourite-request-category', [ RequestController::class, 'my_favourite_request_category' ])->name('my-favourite-request-category');


Route::get('chat/{id}', [UserChatController::class, 'bluechat'])->name('chat');
Route::post('chat', [RequestController::class, 'store'])->name('store.chat');

Route::get('/{id}/chat', [UserChatController::class, 'bluechat'])->name('bluechat');

Route::get('/LeaveReviewBlue/{id}', [UserChatController::class, 'LeaveReviewBlue'])->name('LeaveReviewBlue');

Route::post('/save_serviceprovider', [UserChatController::class, 'save_serviceprovider'])->name('save_serviceprovider');




Route::get('mobile-chat-message', [RequestController::class, 'mobile_chat_message'])->name('mobile-chat-message');




Route::get('mobile-chat-profile', [RequestController::class, 'mobile_chat_profile'])->name('mobile-chat-profile');



Route::get('pink-leave-review/{id}', [RequestController::class, 'pink_leave_review'])->name('pink-leave-review');


Route::post('save_review/{id}', [ RequestController::class, 'save_review' ])->name('save_review');



Route::get('modify-personal-info', [RequestController::class, 'modify_personal_info'])->name('modify-personal-info');




Route::get('change-password', [RequestController::class, 'change_password'])->name('change-password');

Route::post('changepassword', [RequestController::class, 'changepassword'])->name('changepassword');



Route::get('modify-categories', [RequestController::class, 'modify_categories'])->name('modify-categories');



Route::get('modify-categories-edit', [RequestController::class, 'modify_categories_edit'])->name('modify-categories-edit');



Route::get('modify-distance', [RequestController::class, 'modify_distance'])->name('modify-distance');



Route::get('change-language', [RequestController::class, 'change_language'])->name('change-language');




Route::get('view-detail/{id}', [RequestController::class, 'view_detail'])->name('view-detail');





Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
Route::post('user-confirm-published-save', [RequestController::class, 'user_confirm_published_save'])->name('user-confirm-published-save');





Route::group(['prefix' => 'user',  'middleware' => ['can:user']], function()
{


 Route::post('user-confirm-publish-save', [RequestController::class, 'user_confirm_publish_save'])->name('user-confirm-publish-save');




       });

 //updateprofile

       Route::post('updateprofile', [updateProfileController::class, 'updateprofile'])->name('updateprofile');
       Route::post('saverange', [ RangeController::class, 'saverange' ])->name('saverange');




Route::group(['prefix' => 'admin',  'middleware' => ['can:admin']], function()
{


    Route::get('admin-home', [AdminController::class, 'admin_home'])->name('admin-home');

   Route::get('category-list', [AdminController::class, 'category_list'])->name('category-list');


   Route::get('ContactusMessages', [  AdminController::class, 'ContactusMessages'  ])->name('ContactusMessages');




   // Compnay Logo
   Route::get('CompanyLogo', [  CompanyLogoController::class, 'CompanyLogo'  ])->name('CompanyLogo');
   Route::get('add_new_companylogo', [  CompanyLogoController::class, 'add_new_companylogo'  ])->name('add_new_companylogo');
   Route::post('add_save_companylogo', [  CompanyLogoController::class, 'add_save_companylogo'  ])->name('add_save_companylogo');
   Route::get('add_new_companylogo_delete/{id}', [  CompanyLogoController::class, 'add_new_companylogo_delete'  ])->name('add_new_companylogo_delete');
   Route::get('add_new_companylogo_edit/{id}', [  CompanyLogoController::class, 'add_new_companylogo_edit'  ])->name('add_new_companylogo_edit');
   Route::post('add_new_companylogo_edit_save/{id}', [  CompanyLogoController::class, 'add_new_companylogo_edit_save'  ])->name('add_new_companylogo_edit_save');



    //All Status
   Route::get('allstatus', [AdminController::class, 'allstatus'])->name('allstatus');
   Route::get('add_new_status', [AdminController::class, 'add_new_status'])->name('add_new_status');
   Route::post('admin-status-save', [AdminController::class, 'admin_status_save'])->name('admin-status-save');
   Route::get('admin-status-delete/{id}', [AdminController::class, 'admin_status_delete'])->name('admin-status-delete');
   Route::get('admin-status-edit/{id}', [AdminController::class, 'admin_status_edit'])->name('admin-status-edit');
   Route::post('admin-status-update', [AdminController::class, 'admin_status_update'])->name('admin-status-update');



    //The Bardos
    Route::get('thebardos', [AdminController::class, 'thebardos'])->name('thebardos');
    Route::get('add_new_thebardos', [AdminController::class, 'add_new_thebardos'])->name('add_new_thebardos');
    Route::post('admin_thebardos_save', [AdminController::class, 'admin_thebardos_save'])->name('admin_thebardos_save');
    Route::get('admin_theboard_delete/{id}', [AdminController::class, 'admin_theboard_delete'])->name('admin_theboard_delete');
    Route::get('admin-theboard-edit/{id}', [AdminController::class, 'admin_theboard_edit'])->name('admin-theboard-edit');
    Route::post('admin-theboards-update', [AdminController::class, 'admin_theboards_update'])->name('admin-theboards-update');



    //Service Provider
    Route::get('Service_Provider', [AdminController::class, 'Service_Provider'])->name('Service_Provider');
    Route::get('add_new_serviceprovider', [AdminController::class, 'add_new_serviceprovider'])->name('add_new_serviceprovider');
    Route::post('add_save_serviceprovider', [AdminController::class, 'add_save_serviceprovider'])->name('add_save_serviceprovider');
    Route::get('admin-serviceprovider-delete/{id}', [AdminController::class, 'admin_serviceprovider_delete'])->name('admin-serviceprovider-delete');
    Route::get('admin-serviceprovider-edit/{id}', [AdminController::class, 'admin_serviceprovider_edit'])->name('admin-serviceprovider-edit');
    Route::post('admin-serviceprovider-update', [AdminController::class, 'admin_serviceprovider_update'])->name('admin-serviceprovider-update');



    //Request Slider
    Route::get('requestSlider', [ AdminController::class, 'requestSlider' ])->name('requestSlider');
    Route::get('add_new_requestSlider', [ AdminController::class, 'add_new_requestSlider' ])->name('add_new_requestSlider');
    Route::post('add_save_requestSlider', [ AdminController::class, 'add_save_requestSlider' ])->name('add_save_requestSlider');
    Route::get('admin-requestSlider-delete/{id}', [ AdminController::class, 'admin_requestSlider_delete' ])->name('admin-requestSlider-delete');
    Route::get('admin-requestSlider-edit/{id}', [ AdminController::class, 'admin_requestSlider_edit' ])->name('admin-requestSlider-edit');
    Route::post('add_save_requestSlider_edit_save/{id}', [ AdminController::class, 'add_save_requestSlider_edit_save' ])->name('add_save_requestSlider_edit_save');



    //Service Slider
    Route::get('serviceSlider', [ AdminController::class, 'serviceSlider' ])->name('serviceSlider');
    Route::get('add_new_serviceSlider', [ AdminController::class, 'add_new_serviceSlider' ])->name('add_new_serviceSlider');
    Route::post('add_save_serviceSlider', [ AdminController::class, 'add_save_serviceSlider' ])->name('add_save_serviceSlider');
    Route::get('admin-serviceSlider-delete/{id}', [ AdminController::class, 'admin_serviceSlider_delete' ])->name('admin-serviceSlider-delete');
    Route::get('admin-serviceSlider-edit/{id}', [ AdminController::class, 'admin_serviceSlider_edit' ])->name('admin-serviceSlider-edit');
    Route::post('add_save_serviceSlider_edit_save/{id}', [ AdminController::class, 'add_save_serviceSlider_edit_save' ])->name('add_save_serviceSlider_edit_save');



    // Moments of life
    Route::get('momentoflifetable', [ AdminController::class, 'momentoflifetable' ])->name('momentoflifetable');
    Route::get('momonentsoflife', [ AdminController::class, 'momonentsoflife' ])->name('momonentsoflife');
    Route::post('momentsoflife_add', [ AdminController::class, 'momentsoflife_add' ])->name('momentsoflife_add');
    Route::get('momonentsoflife_delete/{id}', [ AdminController::class, 'momonentsoflife_delete' ])->name('momonentsoflife_delete');
    Route::get('momonentsoflife_edit/{id}', [ AdminController::class, 'momonentsoflife_edit' ])->name('momonentsoflife_edit');
    Route::post('momentsoflife_edit_save/{id}', [ AdminController::class, 'momentsoflife_edit_save' ])->name('momentsoflife_edit_save');


    // Exchange with Confidence
    Route::get('exchangewithconfidence', [ AdminController::class, 'exchangewithconfidence' ])->name('exchangewithconfidence');
    Route::get('exchangewithconfidence_add', [ AdminController::class, 'exchangewithconfidence_add' ])->name('exchangewithconfidence_add');
    Route::post('exchangewithconfidence_add_save', [ AdminController::class, 'exchangewithconfidence_add_save' ])->name('exchangewithconfidence_add_save');
    Route::get('exchangewithconfidence_delete/{id}', [ AdminController::class, 'exchangewithconfidence_delete' ])->name('exchangewithconfidence_delete');
    Route::get('exchangewithconfidence_edit/{id}', [ AdminController::class, 'exchangewithconfidence_edit' ])->name('exchangewithconfidence_edit');
    Route::post('exchangewithconfidence_edit_save/{id}', [ AdminController::class, 'exchangewithconfidence_edit_save' ])->name('exchangewithconfidence_edit_save');


    // Easy Steps
    Route::get('easysteps', [ AdminController::class, 'easysteps' ])->name('easysteps');
    Route::get('easystepstofind_add', [ AdminController::class, 'easystepstofind_add' ])->name('easystepstofind_add');
    Route::post('easystepstofind_add_save', [ AdminController::class, 'easystepstofind_add_save' ])->name('easystepstofind_add_save');
    Route::get('easysteps_delete/{id}', [ AdminController::class, 'easysteps_delete' ])->name('easysteps_delete');
    Route::get('easysteps_edit/{id}', [ AdminController::class, 'easysteps_edit' ])->name('easysteps_edit');
    Route::post('easystepstofind_edit_save/{id}', [ AdminController::class, 'easystepstofind_edit_save' ])->name('easystepstofind_edit_save');









Route::get('admin-add-new-category', [AdminController::class, 'admin_add_new_category'])->name('admin-add-new-category');


Route::post('admin-category-save', [AdminController::class, 'admin_category_save'])->name('admin-category-save');



Route::get('admin-category-edit/{id}', [AdminController::class, 'admin_category_edit'])->name('admin-category-edit');




Route::post('admin-category-update', [AdminController::class, 'admin_category_update'])->name('admin-category-update');



Route::get('admin-category-delete/{id}', [AdminController::class, 'admin_category_delete'])->name('admin-category-delete');



Route::get('sub-category-list', [AdminController::class, 'sub_category_list'])->name('sub-category-list');




Route::get('add-new-subcategory', [AdminController::class, 'add_new_subcategory'])->name('add-new-subcategory');




Route::post('admin-subcategory-save', [AdminController::class, 'admin_subcategory_save'])->name('admin-subcategory-save');



Route::get('admin-subcategory-edit/{id}', [AdminController::class, 'admin_subcategory_edit'])->name('admin-subcategory-edit');

Route::post('admin-subcategory-update', [AdminController::class, 'admin_subcategory_update'])->name('admin-subcategory-update');



Route::get('admin-subcategory-delete/{id}', [AdminController::class, 'admin_subcategory_delete'])->name('admin-subcategory-delete');



Route::get('user-list', [AdminController::class, 'user_list'])->name('user-list');




Route::get('admin-add-new-user', [AdminController::class, 'admin_add_new_user'])->name('admin-add-new-user');



Route::post('admin-user-save', [AdminController::class, 'admin_user_save'])->name('admin-user-save');



Route::get('admin-user-edit/{id}', [AdminController::class, 'admin_user_edit'])->name('admin-user-edit');



Route::post('admin-user-update', [AdminController::class, 'admin_user_update'])->name('admin-user-update');



Route::get('admin-user-delete/{id}', [AdminController::class, 'admin_user_delete'])->name('admin-user-delete');


//settings modules route
Route::get('settings',[AdminController::class,'create'])->name('create.settings');
Route::post('settings',[AdminController::class,'store'])->name('store.settings');




Route::get('publish-request-list', [PublishRequestController::class, 'publish_request_list'])->name('publish-request-list');

Route::get('admin-request-approve/{id}', [PublishRequestController::class, 'admin_request_approve'])->name('admin-request-approve');


Route::post('admin-request-disapprove{id}', [PublishRequestController::class, 'admin_request_disapprove'])->name('admin-request-disapprove');
Route::get('admin_request_disapproe_givereason/{id}', [PublishRequestController::class, 'admin_request_disapproe_givereason'])->name('admin_request_disapproe_givereason');



Route::get('admin-publish-request-delete/{id}', [PublishRequestController::class, 'admin_publish_request_delete'])->name('admin-publish-request-delete');

});

Route::post('get_subcategory', [PublishRequestController::class, 'get_subcategory'])->name('get_subcategory');


Route::get('event', function () {});

Route::post('sendMessage', [ChatsController::class, 'sendMessage'])->name('sendMessage');


Route::get('user/categories', [UserController::class, 'user_categories'])->name('user_categories');
Route::post('user/categories/save', [UserController::class, 'user_save_categories'])->name('user_save_categories');
Route::get('user/choose/distance', [UserController::class, 'choose_distance'])->name('user_choose_distance');
Route::post('user/save/distance', [UserController::class, 'user_save_distance'])->name('user_save_distance');
Route::get('user/category/remove/{id}', [UserController::class, 'user_categories_remove'])->name('user_categories_remove');
Route::get('get_subcategories', [UserController::class, 'get_subcategories'])->name('get_subcategories');

Route::get('lang/change/{lang}', [indexController::class, 'lang_change'])->name('lang/change');

Route::get('how-it-works', [indexController::class, 'how_it_works'])->name('how-it-works');
