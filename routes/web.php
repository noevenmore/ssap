<?php

use Illuminate\Support\Facades\Route;

// ADMIN PANEL
Route::prefix('admin')->group(function () {
    Route::get('/ex/get-filters',[App\Http\Controllers\FilterController::class, 'get_category_filters'])->name('get_category_filters');

    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_index');
    Route::get('/search-recalculate',[App\Http\Controllers\SearchController::class, 'Recalculate'])->name('search-recalculate');
    Route::get('/slug-recalculate',[App\Http\Controllers\AdminController::class, 'recalculate_slugs'])->name('slug-recalculate');
    
    Route::get('/make_fake',[App\Http\Controllers\EmailDBController::class, 'make_fake'])->name('make_fake');


    Route::get('/change_main_image', [App\Http\Controllers\AdminController::class, 'change_main_image'])->name('admin_change_main_image');

    Route::get('/var_editor', [App\Http\Controllers\SystemController::class, 'var_editor_show'])->name('admin_var_editor_show');
    Route::post('/var_editor', [App\Http\Controllers\SystemController::class, 'var_editor_update_post'])->name('admin_var_editor_update_post');

    Route::get('/link_editor', [App\Http\Controllers\AdminController::class, 'main_page_link_editor'])->name('admin_main_page_link_editor');
    Route::post('/link_editor', [App\Http\Controllers\AdminController::class, 'main_page_link_editor_post'])->name('admin_main_page_link_editor_post');

    Route::get('/mailing',[App\Http\Controllers\AdminController::class, 'mailing'])->name('admin_mailing');
    Route::post('/mailing',[App\Http\Controllers\AdminController::class, 'mailing_post'])->name('admin_mailing_post');

    Route::get('/systexts', [App\Http\Controllers\SystemTextController::class, 'event_show'])->name('admin_system_text_show');
    Route::get('/systext/edit/{id}', [App\Http\Controllers\SystemTextController::class, 'event_edit'])->name('admin_system_text_edit');
    Route::post('/systext/edit', [App\Http\Controllers\SystemTextController::class, 'event_edit_post'])->name('admin_system_text_edit_post');

    Route::get('/comments',[App\Http\Controllers\AdminController::class, 'user_comments'])->name('admin_comments_show');
    Route::get('/comment/{id}',[App\Http\Controllers\AdminController::class, 'user_comment_full'])->name('admin_comment_edit');
    Route::post('/comment_delete',[App\Http\Controllers\AdminController::class, 'comment_delete'])->name('admin_comment_delete_post');
    Route::post('/comment_verify',[App\Http\Controllers\AdminController::class, 'comment_verify'])->name('admin_comment_verify_post');

    Route::get('/orders',[App\Http\Controllers\AdminController::class, 'excursion_orders'])->name('admin_orders_show');
    Route::get('/order/{id}',[App\Http\Controllers\AdminController::class, 'excursion_order_full'])->name('admin_order_edit');
    Route::post('/order_delete',[App\Http\Controllers\AdminController::class, 'excursion_order_delete'])->name('admin_order_delete_post');
    Route::post('/order_verify',[App\Http\Controllers\AdminController::class, 'excursion_order_verify'])->name('admin_order_verify_post');

    Route::get('/hotels', [App\Http\Controllers\HotelController::class, 'hotel_show'])->name('admin_hotel_show');
    Route::get('/hotel/edit/{id}', [App\Http\Controllers\HotelController::class, 'hotel_edit'])->name('admin_hotel_edit');
    Route::post('/hotel/edit', [App\Http\Controllers\HotelController::class, 'hotel_edit_post'])->name('admin_hotel_edit_post');
    Route::get('/hotel/new', [App\Http\Controllers\HotelController::class, 'hotel_add'])->name('admin_hotel_add');
    Route::post('/hotel/new', [App\Http\Controllers\HotelController::class, 'hotel_add_post'])->name('admin_hotel_add_post');
    Route::post('/hotel/delete', [App\Http\Controllers\HotelController::class, 'hotel_delete_post'])->name('admin_hotel_delete_post');

    Route::get('/events', [App\Http\Controllers\EventController::class, 'event_show'])->name('admin_event_show');
    Route::get('/event/edit/{id}', [App\Http\Controllers\EventController::class, 'event_edit'])->name('admin_event_edit');
    Route::post('/event/edit', [App\Http\Controllers\EventController::class, 'event_edit_post'])->name('admin_event_edit_post');
    Route::get('/event/new', [App\Http\Controllers\EventController::class, 'event_add'])->name('admin_event_add');
    Route::post('/event/new', [App\Http\Controllers\EventController::class, 'event_add_post'])->name('admin_event_add_post');
    Route::post('/event/delete', [App\Http\Controllers\EventController::class, 'event_delete_post'])->name('admin_event_delete_post');

    Route::get('/excursion', [App\Http\Controllers\ExcursionController::class, 'event_show'])->name('admin_excursion_show');
    Route::get('/excursion/edit/{id}', [App\Http\Controllers\ExcursionController::class, 'event_edit'])->name('admin_excursion_edit');
    Route::post('/excursion/edit', [App\Http\Controllers\ExcursionController::class, 'event_edit_post'])->name('admin_excursion_edit_post');
    Route::get('/excursion/new', [App\Http\Controllers\ExcursionController::class, 'event_add'])->name('admin_excursion_add');
    Route::post('/excursion/new', [App\Http\Controllers\ExcursionController::class, 'event_add_post'])->name('admin_excursion_add_post');
    Route::post('/excursion/delete', [App\Http\Controllers\ExcursionController::class, 'event_delete_post'])->name('admin_excursion_delete_post');

    Route::get('/excursion_map', [App\Http\Controllers\ExcursionController::class, 'event_map_show'])->name('admin_excursion_map_show');
    Route::get('/excursion_map/edit/{id}', [App\Http\Controllers\ExcursionController::class, 'event_map_edit'])->name('admin_excursion_map_edit');
    Route::post('/excursion_map/edit', [App\Http\Controllers\ExcursionController::class, 'event_map_edit_post'])->name('admin_excursion_map_edit_post');

    Route::get('/mi', [App\Http\Controllers\MenuItemController::class, 'event_show'])->name('admin_menu_item_show');
    Route::get('/mi/edit/{id}', [App\Http\Controllers\MenuItemController::class, 'event_edit'])->name('admin_menu_item_edit');
    Route::post('/mi/edit', [App\Http\Controllers\MenuItemController::class, 'event_edit_post'])->name('admin_menu_item_edit_post');
    Route::get('/mi/new', [App\Http\Controllers\MenuItemController::class, 'event_add'])->name('admin_menu_item_add');
    Route::post('/mi/new', [App\Http\Controllers\MenuItemController::class, 'event_add_post'])->name('admin_menu_item_add_post');
    Route::post('/mi/delete', [App\Http\Controllers\MenuItemController::class, 'event_delete_post'])->name('admin_menu_item_delete_post');

    Route::get('/mpt', [App\Http\Controllers\MainPageTitleController::class, 'event_show'])->name('admin_mp_title_show');
    Route::get('/mpt/edit/{id}', [App\Http\Controllers\MainPageTitleController::class, 'event_edit'])->name('admin_mp_title_edit');
    Route::post('/mpt/edit', [App\Http\Controllers\MainPageTitleController::class, 'event_edit_post'])->name('admin_mp_title_edit_post');
    Route::get('/mpt/new', [App\Http\Controllers\MainPageTitleController::class, 'event_add'])->name('admin_mp_title_add');
    Route::post('/mpt/new', [App\Http\Controllers\MainPageTitleController::class, 'event_add_post'])->name('admin_mp_title_add_post');
    Route::post('/mpt/delete', [App\Http\Controllers\MainPageTitleController::class, 'event_delete_post'])->name('admin_mp_title_delete_post');

    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'event_show'])->name('admin_type_show');
    Route::get('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'event_edit'])->name('admin_type_edit');
    Route::post('/category/edit', [App\Http\Controllers\CategoryController::class, 'event_edit_post'])->name('admin_type_edit_post');
    Route::get('/category/new', [App\Http\Controllers\CategoryController::class, 'event_add'])->name('admin_type_add');
    Route::post('/category/new', [App\Http\Controllers\CategoryController::class, 'event_add_post'])->name('admin_type_add_post');
    Route::post('/category/delete', [App\Http\Controllers\CategoryController::class, 'event_delete_post'])->name('admin_type_delete_post');

    Route::get('/excursion_filters', [App\Http\Controllers\ExcursionFilterController::class, 'event_show'])->name('admin_excursion_filter_show');
    Route::get('/excursion_filter/edit/{id}', [App\Http\Controllers\ExcursionFilterController::class, 'event_edit'])->name('admin_excursion_filter_edit');
    Route::post('/excursion_filter/edit', [App\Http\Controllers\ExcursionFilterController::class, 'event_edit_post'])->name('admin_excursion_filter_edit_post');
    Route::get('/excursion_filter/new', [App\Http\Controllers\ExcursionFilterController::class, 'event_add'])->name('admin_excursion_filter_add');
    Route::post('/excursion_filter/new', [App\Http\Controllers\ExcursionFilterController::class, 'event_add_post'])->name('admin_excursion_filter_add_post');
    Route::post('/excursion_filter/delete', [App\Http\Controllers\ExcursionFilterController::class, 'event_delete_post'])->name('admin_excursion_filter_delete_post');

    Route::get('/filters', [App\Http\Controllers\FilterController::class, 'event_show'])->name('admin_filter_show');
    Route::get('/filter/edit/{id}', [App\Http\Controllers\FilterController::class, 'event_edit'])->name('admin_filter_edit');
    Route::post('/filter/edit', [App\Http\Controllers\FilterController::class, 'event_edit_post'])->name('admin_filter_edit_post');
    Route::get('/filter/new', [App\Http\Controllers\FilterController::class, 'event_add'])->name('admin_filter_add');
    Route::post('/filter/new', [App\Http\Controllers\FilterController::class, 'event_add_post'])->name('admin_filter_add_post');
    Route::post('/filter/delete', [App\Http\Controllers\FilterController::class, 'event_delete_post'])->name('admin_filter_delete_post');

    Route::get('/texts', [App\Http\Controllers\TextController::class, 'event_show'])->name('admin_text_show');
    Route::get('/text/edit/{id}', [App\Http\Controllers\TextController::class, 'event_edit'])->name('admin_text_edit');
    Route::post('/text/edit', [App\Http\Controllers\TextController::class, 'event_edit_post'])->name('admin_text_edit_post');
    Route::get('/text/new', [App\Http\Controllers\TextController::class, 'event_add'])->name('admin_text_add');
    Route::post('/text/new', [App\Http\Controllers\TextController::class, 'event_add_post'])->name('admin_text_add_post');
    Route::post('/text/delete', [App\Http\Controllers\TextController::class, 'event_delete_post'])->name('admin_text_delete_post');

    Route::post('/loadimage',[App\Http\Controllers\PhotoController::class,'load_image'])->name('admin_loadimage');
    Route::post('/deleteimage',[App\Http\Controllers\PhotoController::class,'delete_image'])->name('admin_deleteimage');
    Route::get('/addtogallery',[App\Http\Controllers\PhotoController::class,'add_to_gallery'])->name('admin_add_to_gallery');
    Route::post('/addtogallery',[App\Http\Controllers\PhotoController::class,'add_to_gallery_post'])->name('admin_add_to_gallery_post');
    Route::get('/photos',[App\Http\Controllers\PhotoController::class,'show_gallery'])->name('admin_show_gallery');
    Route::get('/photo/{id}',[App\Http\Controllers\PhotoController::class,'show_photo'])->name('admin_show_photo');
    Route::post('/photo_edit',[App\Http\Controllers\PhotoController::class,'photo_edit'])->name('admin_photo_edit');
});

Route::get('/en',[App\Http\Controllers\LanguageController::class,'set_english'])->name('set_lang_en');
Route::get('/ua',[App\Http\Controllers\LanguageController::class,'set_ukrainian'])->name('set_lang_ua');

Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('index');
Route::get('/search', [App\Http\Controllers\SiteController::class, 'search'])->name('search');
Route::get('/photogallery', [App\Http\Controllers\SiteController::class, 'photogallery'])->name('photogallery');
Route::get('/excursion/{id}/{slug?}', [App\Http\Controllers\SiteController::class, 'excursion'])->name('excursion');
Route::get('/excursion_list', [App\Http\Controllers\SiteController::class, 'excursion_list'])->name('excursion_list');
Route::get('/node/{id}/{slug?}', [App\Http\Controllers\SiteController::class, 'hotel'])->name('node');
Route::get('/node_list', [App\Http\Controllers\SiteController::class, 'hotel_list'])->name('node_list');
Route::get('/event/{id}/{slug?}', [App\Http\Controllers\SiteController::class, 'event_full'])->name('event');
Route::get('/event_list', [App\Http\Controllers\SiteController::class, 'event_list'])->name('event_list');
Route::get('/publishes', [App\Http\Controllers\SiteController::class, 'publishes'])->name('publishes');
Route::get('/show/{id}/{slug?}',[App\Http\Controllers\SiteController::class, 'show_text'])->name('show_text');
Route::post('/subscribe',[App\Http\Controllers\EmailDBController::class,'subscribe'])->name('subscribe');
Route::get('/unsubscribe/{id}/{mail}',[App\Http\Controllers\EmailDBController::class,'unsubscribe'])->name('unsubscribe');
Route::post('/comment',[App\Http\Controllers\CommentController::class,'comment'])->name('new_comment');
Route::post('/excursion_order',[App\Http\Controllers\ExcursionRequestController::class,'order'])->name('excursion_order');

Auth::routes();

Route::get('/register/new/admin',[App\Http\Controllers\SiteController::class, 'register_new_admin'])->name('register_new_admin');

Route::post('/fav',[App\Http\Controllers\FavoriteController::class,'favorite'])->name('favorite');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout',[App\Http\Controllers\HomeController::class, 'logout_get'])->name('logout_get');

Route::get('/how/{type}',[App\Http\Controllers\SiteController::class, 'how_to_get'])->name('how_to_get');
Route::fallback([App\Http\Controllers\SiteController::class, 'page404']);
