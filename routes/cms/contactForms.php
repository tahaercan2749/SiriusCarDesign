<?php

use App\Http\Controllers\Cms\ContactFormController;
use Illuminate\Support\Facades\Route;

Route::middleware("permission:iletisim-formlari")->group(function () {
    Route::delete('contact-forms/{id}/delete-mail', [ContactFormController::class, 'destroy'])->name('contact-forms.delete');
    Route::post('contact-forms/{id}/read-mail', [ContactFormController::class, 'readMail'])->name('contact-forms.readMail');
    Route::post('contact-forms/{id}/unread-mail', [ContactFormController::class, 'unreadMail'])->name('contact-forms.unreadMail');
    Route::get('contact-forms/deleted', [ContactFormController::class, 'deleted'])->name('contact-forms.deleted');
    Route::resource('contact-forms', ContactFormController::class)->only(['index']);
});


