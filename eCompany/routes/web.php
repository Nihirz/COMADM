<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=>'auth'],function (){
//Change Password
Route::get('/admin/password/','AdminUserController@changepwd')->name('admin.changepwd');
Route::post('/admin/update/password','AdminUserController@update_pass')->name('update.pass');
//Change Password End

// Admin Logo
Route::get('/admin-logo','AdminLogoController@index')->name('admin.logo');
Route::post('admin/store/logo','AdminLogoController@store')->name('logo.store');
Route::get('/admin/edit/logo/{id}','AdminLogoController@edit_logo')->name('edit.logo');
Route::post('/admin/logo/updated','AdminLogoController@update')->name('update.logo');
// Admin Logo Ends
// Admin About Us
Route::get('/admin-about-us','AdminAboutUsController@index')->name('admin.aboutus');
Route::get('/admin/edit/about/{id}','AdminAboutUsController@edit')->name('edit.about');
Route::post('/admin/update-about-us','AdminAboutUsController@update')->name('update.about');
// Admin About Us End
// Admin Blog
Route::get('/admin-blog','AdminBlogController@index')->name('admin.blog');
Route::get('/admin-new-blog','AdminBlogController@add')->name('admin.addblog');
Route::post('/admin-store-blog','AdminBlogController@store')->name('store.blog');
Route::get('/admin-edit-blog/{id}','AdminBlogController@edit')->name('edit.blog');
Route::post('admin-update-blog','AdminBlogController@update')->name('update.blog');
Route::get('/admin/delete/blog/{id}','AdminBlogController@delete')->name('delete.blog');
// Admin Blog End
// Admin Social
Route::get('/admin-social','AdminSocialController@index')->name('admin.social');
Route::get('/admin-edit-social/{id}','AdminSocialController@edit')->name('edit.social');
Route::post('/admin-update-social','AdminSocialController@update')->name('update.social');
// Admin Social End
// Admin Map
Route::get('/admin-map','AdminMapController@index')->name('admin.map');
Route::get('/admin-edit-map/{id}','AdminMapController@edit')->name('edit.map');
Route::post('/admin-update-map','AdminMapController@update')->name('update.map');
// Admin Map End
// Route Contact
Route::get('/admin-contact','AdminContactController@index')->name('admin.contact');
Route::get('/admin-edit-contact/{id}','AdminContactController@edit')->name('edit.contact');
Route::post('/admin-update-contact','AdminContactController@update')->name('update.contact');
// Route Contact End
// Route Admin Team
Route::get('/admin-team','AdminTeamController@index')->name('admin.team');
Route::get('/admin-add-new/member','AdminTeamController@new')->name('add.member');
Route::post('/new-member','AdminTeamController@store')->name('store.member');
Route::get('/admin-edit-team/{id}','AdminTeamController@edit')->name('edit.member');
Route::post('/admin-update-member','AdminTeamController@update')->name('update.member');
Route::get('/delete-member/{id}','AdminTeamController@delete')->name('delete.member');
// Route Admin Team End
// Route Admin Slider
Route::get('/admin-slider','AdminSilderController@index')->name('admin.slider');
Route::get('/add-add-slider','AdminSilderController@addnew')->name('admin.new.slider');
Route::post('/admin-store-slider','AdminSilderController@store')->name('store.slider');
Route::get('/admin-edit-slider/{id}','AdminSilderController@edit')->name('edit.slider');
Route::post('/update-slider','AdminSilderController@update')->name('update.slider');
Route::get('/admin-delete-slider/{id}','AdminSilderController@delete')->name('delete.slider');
// Route Admin Slider
// Route Admin Skill
Route::get('/admin-skill','AdminSkillController@index')->name('admin.skill');
Route::post('/admin-store-skill','AdminSkillController@store')->name('store.skill');
Route::get('/admin-edit-skill/{id}','AdminSkillController@edit')->name('edit.skill');
Route::get('/admin-delete-skill/{id}','AdminSkillController@delete')->name('delete.skill');
// Route Admin Skill
// Route Admin Testimonials
Route::get('/admin-testimonials','AdminTestimonialsController@index')->name('admin.testimonials');
Route::post('/admin-store-testimonial','AdminTestimonialsController@store')->name('store.testimonial');
Route::post('/admin-update-testimonial','AdminTestimonialsController@update')->name('update.testimonial');
Route::get('/admin-edit-testimonial/{id}','AdminTestimonialsController@edit')->name('edit.tesimonials');
Route::get('/admin-delete/{id}','AdminTestimonialsController@delete')->name('delete.tesimonials');
// Route Admin Testimonials end
// Route Admin Gallery
Route::get('/admin-gallery','AdminGalleyController@index')->name('admin.gallery');
Route::post('/admin-store-image','AdminGalleyController@gstore')->name('store.gallery');
Route::get('/admin-edit-gallery/{id}','AdminGalleyController@edit')->name('edit.gallery');
Route::post('/admin-update-gallery','AdminGalleyController@update')->name('update.gallery');
Route::get('/admin-delete-gallery/{id}','AdminGalleyController@delete')->name('delete.gallery');
// Route Admin Gallery
// Route Admin Faq
Route::get('/admin-faq','AdminFaqController@index')->name('admin.faq');
Route::post('/admin-faq-store','AdminFaqController@store')->name('admin.faqstore');
Route::get('/admin-edit-faq/{id}','AdminFaqController@edit')->name('edit.faq');
Route::post('/admin-faq-update','AdminFaqController@update')->name('update.faq');
Route::get('/admin-delete-faq/{id}','AdminFaqController@delete')->name('delete.faq');
// Route Admin faq
// Route Admin Favicon
Route::get('/admin-favicon','AdminFaviconController@index')->name('admin.favicon');
Route::get('/admin-edit-favicon/{id}','AdminFaviconController@edit')->name('edit.favicon');
Route::post('admin-update-favicon','AdminFaviconController@update')->name('update.favicon');
// Route Admin Favicon
// Route Admin Services
Route::get('/admin-services','AdminServicesController@index')->name('admin.services');
Route::post('/admin-store-services','AdminServicesController@store')->name('store.services');
// Route Admin Services
// Route Admin Mvc
Route::get('/admin-mvc','AdminMvcController@index')->name('admin.mvc');
Route::get('/edit-admin-mvc/{id}','AdminMvcController@edit')->name('edit.mvc');
Route::post('/admin-update-mvc','AdminMvcController@update')->name('update.mvc');
// Route Admin MVC
// Route Admin Clients
Route::get('/admin-clients','AdminClientController@index')->name('admin.clients');
Route::post('/admin-store-client','AdminClientController@store')->name('client.store');
Route::get('/admin-edit-client/{id}','AdminClientController@edit')->name('edit.client');
Route::post('/admin-update-client','AdminClientController@update')->name('update.Client');
Route::get('/admin-delete-delete/{id}','AdminClientController@delete')->name('delete.client');
// Route Admin Clients
// Route Admin Client Query
Route::get('admin-client-queries','ClientQueryController@index')->name('client.query');
// Route Admin Client Query
Route::get('/admins','AdminController@index')->name('admin');
});
Auth::routes();
Route::get('/','IndexController@index')->name('index');
Route::get('/contact-us','ContactController@contact')->name('contact');
Route::post('/request-to-company','ClientQueryController@store')->name('store.query');
// Route Blog
Route::get('/blog','BlogController@index')->name('blog');
Route::get('/single-blog/{id}','BlogController@single')->name('single.blog');
// Route Blog
// route team
Route::get('/team','TeamController@index')->name('team');
// Route Team
// Route Testimonial
Route::get('/c-testimonial','TestimonialController@index')->name('testimonial');
// Route Testimonial


// Route Mail
Route::get('/email','EmailController@create');
Route::post('/email-send','EmailController@sendEmail')->name('send.email');
// Route Mail
// Route Gallery
Route::get('/portfolio','PortfolioController@index')->name('portfolio');
// Route Gallery
// Route About us
Route::get('/about-us','AboutusController@index')->name('aboutus');
// Route About us
// Route Services
Route::get('/our-services','ServicesController@index')->name('services');
// Route Services

// MAIL_FROM_ADDRESS=null
// MAIL_FROM_NAME="${APP_NAME}"//