<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UI\UserIndexController;

Route::middleware('trackCampaignVisits')->group(function () {


    Route::post("/guest-review", [UserIndexController::class, 'guestReview'])->name('guest.review');
    Route::post("/guest-review-image", [UserIndexController::class, 'guestReviewImage'])->name('guest.review.image');

    Route::post('iletisim-formu-gonder',[UserIndexController::class,'contactForm'])->name('iletisimFormu');
    Route::get('', [UserIndexController::class, 'index'])->name('home');
    Route::get('/sitemap.xml', [UserIndexController::class, 'sitemap'])->name('sitemap');
    Route::get('/llms.txt', [UserIndexController::class, 'llms'])->name('llms');
    Route::get('/robots.txt', function () {
        return Response::file(public_path('robots.txt'), [
            'Content-Type' => 'text/plain',
        ]);
    })->name('robots');

    Route::get('/visited-user-call/{link}/{type}', [UserIndexController::class, 'setVisitedUserCall'])->name('setVisitedUserCall');
    Route::get('/{slug}', [UserIndexController::class, 'slugDecoder'])->name('slugDecoder');


});
