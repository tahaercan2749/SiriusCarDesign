<?php


use App\Http\Controllers\UI\UserIndexController;
use App\Http\Controllers\Cms\IndexController;
use Illuminate\Support\Facades\Route;

//Panel Yonetim İşlemleri
Route::prefix('cms')->name("cms.")->middleware('loginPageAuthControl')->group(function () {

//    Giriş Gerektirmeyen Auth İşlemleri
    require __DIR__ . '/noAuth.php';

//    Giriş Gerektiren İşlemler
    Route::middleware('auth')->group(function () {

        require __DIR__ . '/auth.php';

        Route::get('', [IndexController::class, 'index'])->name('dashboard');
        Route::post('/slug-maker', [IndexController::class, 'slugMaker'])->name('slug.maker');
        Route::post('/visited-users', [IndexController::class, 'getVisitedUsers'])->name('visitedUsers');
        Route::post('/visited-users-calls', [IndexController::class, 'getVisitedUsersCalls'])->name('visitedUsersCalls');


        require __DIR__ . '/cms/user.php';
        require __DIR__ . '/cms/permissions.php';
        require __DIR__ . '/cms/rolePermission.php';
        require __DIR__ . '/cms/roles.php';
        require __DIR__ . '/cms/roleUser.php';
        require __DIR__ . '/cms/languages.php';
        require __DIR__ . '/cms/blades.php';
        require __DIR__ . '/cms/categories.php';
        require __DIR__ . '/cms/pages.php';
        require __DIR__ . '/cms/seos.php';
        require __DIR__ . '/cms/contacts.php';
        require __DIR__ . '/cms/socialMedia.php';
        require __DIR__ . '/cms/slider.php';
        require __DIR__ . '/cms/galleries.php';
        require __DIR__ . '/cms/popup.php';
        require __DIR__ . '/cms/references.php';
        require __DIR__ . '/cms/certificates.php';
        require __DIR__ . '/cms/brands.php';
        require __DIR__ . '/cms/pressKit.php';
        require __DIR__ . '/cms/sideMenuElements.php';
        require __DIR__ . '/cms/adsCampaigns.php';
        require __DIR__ . '/cms/mediaUploads.php';
        require __DIR__ . '/cms/contactForms.php';
        require __DIR__ . '/cms/faq.php';
        require __DIR__ . '/cms/homePageManagement.php';
        require __DIR__ . '/cms/ourValues.php';

        Route::prefix('settings')->name("settings.")->group(function () {
            require __DIR__ . '/cms/siteSettings.php';
        });
    });
});


Route::get("/not-found", function () {
    return view("user.not-found");
})->name("404");

require __DIR__ . '/ui.php';





