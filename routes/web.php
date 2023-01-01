<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::controller(FrontController::class)->group(function(){
    Route::get('/','index')->name('indexf');
    Route::get('/about-us','about_us')->name('about_us');
    Route::get('/our-work-portfolio','workPortfolio')->name('workPortfolio');
    Route::get('/our-pricing','pricings')->name('pricings');
    Route::get('/contact-us','contact')->name('contact');
    Route::post('/addContactMessage','addContactMessage')->name('addContactMessage');
    Route::get('/free-trial','freeTrial')->name('freeTrial');
    Route::get('/service','service')->name('service');
    Route::get('/service-details/{id}','serviceDetails')->name('serviceDetails');
    Route::get('/choose-your-preferred-service','serviceChoose')->name('serviceChoose');
});
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin','index')->name('index');
    Route::get('/admin/dashboard','dashboard')->name('dashboard');
    Route::get('/admin/general','general')->name('general');
    Route::put('/admin/updateGeneral/{id}','updateGeneral')->name('updateGeneral');
    Route::get('/admin/slider','slider')->name('slider');
    Route::post('/admin/addSlider','addSlider')->name('addSlider');
    Route::get('/admin/editSlider/{id}','editSlider')->name('editSlider');
    Route::put('/admin/updateSlider/{id}','updateSlider')->name('updateSlider');
    Route::delete('/admin/deleteSlider/{id}','deleteSlider')->name('deleteSlider');
    Route::get('/admin/body-section-one','body_section_ones')->name('body_section_ones');
    Route::post('/admin/addBodySectionOne','addBodySectionOne')->name('addBodySectionOne');
    Route::get('/admin/editSectionOne/{id}','editSectionOne')->name('editSectionOne');
    Route::put('/admin/updateBodySectionOne/{id}','updateBodySectionOne')->name('updateBodySectionOne');
    Route::delete('/admin/deleteSectionOne/{id}','deleteSectionOne')->name('deleteSectionOne');
    Route::get('/admin/body-section-two','body_section_two')->name('body_section_two');
    Route::post('/admin/addBodySectionTwo','addBodySectionTwo')->name('addBodySectionTwo');
    Route::get('/admin/editSectionTwo/{id}','editSectionTwo')->name('editSectionTwo');
    Route::put('/admin/updateBodySectionTwo/{id}','updateBodySectionTwo')->name('updateBodySectionTwo');
    Route::delete('/admin/deleteSectionTne/{id}','deleteSectionTne')->name('deleteSectionTne');
    Route::get('/admin/service','service')->name('services');
    Route::post('/admin/addService','addService')->name('addService');
    Route::get('/admin/editService/{id}','editService')->name('editService');
    Route::put('/admin/updateService/{id}','updateService')->name('updateService');
    Route::delete('/admin/deleteService/{id}','deleteService')->name('deleteService');
    Route::get('/admin/home-pricing','homePricing')->name('homePricing');
    Route::post('/admin/addHomePricing','addHomePricing')->name('addHomePricing');
    Route::get('/admin/editHomePricing/{id}','editHomePricing')->name('editHomePricing');
    Route::put('/admin/updateHomePricing/{id}','updateHomePricing')->name('updateHomePricing');
    Route::delete('/admin/deleteHomePricing/{id}','deleteHomePricing')->name('deleteHomePricing');
    Route::get('/admin/works','works')->name('works');
    Route::post('/admin/addWorks','addWorks')->name('addWorks');
    Route::get('/admin/editWorks/{id}','editWorks')->name('editWorks');
    Route::put('/admin/updateWorks/{id}','updateWorks')->name('updateWorks');
    Route::delete('/admin/deleteWorks/{id}','deleteWorks')->name('deleteWorks');
    Route::get('/admin/pricing','pricing')->name('pricing');
    Route::post('/admin/addpricing','addpricing')->name('addpricing');
    Route::get('/admin/editPricing/{id}','editPricing')->name('editPricing');
    Route::put('/admin/updatePricing/{id}','updatePricing')->name('updatePricing');
    Route::delete('/admin/deletePricing/{id}','deletePricing')->name('deletePricing');
    Route::get('/admin/user-message','userMessage')->name('userMessage');
    Route::delete('/admin/deleteContactMessage/{id}','deleteContactMessage')->name('deleteContactMessage');
    Route::get('/admin/social-media','socialMediaLinks')->name('socialMediaLinks');
    Route::post('/admin/updateSocialMedia','updateSocialMedia')->name('updateSocialMedia');
    Route::get('/admin/body-section-three','bodySectionThree')->name('bodySectionThree');
    Route::post('/admin/addBodySectionThree','addBodySectionThree')->name('addBodySectionThree');
    Route::get('/admin/editSectionThree/{id}','editSectionThree')->name('editSectionThree');
    Route::put('/admin/updateBodySectionThree/{id}','updateBodySectionThree')->name('updateBodySectionThree');
    Route::delete('/admin/deleteSectionThree/{id}','deleteSectionThree')->name('deleteSectionThree');
    Route::get('/admin/about-us-section','aboutUsSection')->name('aboutUsSection');
    Route::post('/admin/addAboutText','addAboutText')->name('addAboutText');
    Route::get('/admin/editAboutSection/{id}','editAboutSection')->name('editAboutSection');
    Route::put('/admin/UpdateAboutText/{id}','UpdateAboutText')->name('UpdateAboutText');
    Route::delete('/admin/deleteAboutSection/{id}','deleteAboutSection')->name('deleteAboutSection');
    Route::get('/admin/service-details','serviceDetailsForm')->name('serviceDetailsForm');
    Route::post('/admin/addServiceDetails','addServiceDetails')->name('addServiceDetails');
    Route::get('/admin/editServiceDetails/{id}','editServiceDetails')->name('editServiceDetails');
    Route::put('/admin/updateServiceDetails/{id}','updateServiceDetails')->name('updateServiceDetails');
    Route::get('/admin/pricingList','pricingList')->name('pricingList');
    Route::post('/admin/addPriceList','addPriceList')->name('addPriceList');
    Route::get('/admin/editPriceList/{id}','editPriceList')->name('editPriceList');
    Route::put('/admin/updatePriceList/{id}','updatePriceList')->name('updatePriceList');
    Route::delete('/admin/deletePriceList/{id}','deletePriceList')->name('deletePriceList');
});

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
