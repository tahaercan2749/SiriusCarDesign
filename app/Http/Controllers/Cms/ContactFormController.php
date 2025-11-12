<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Services\LogService;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mails = ContactForm::all();
        return view('cms.contactForms.index', compact('mails'));
    }

    public function readMail(Request $request, $id)
    {
        try {
            $status = "success";
            $message = "Mail Çekildi";
            $mail = ContactForm::withTrashed()->find($id);
            if ($mail) {
                $mail->update(["is_read" => 1]);
            }
            return response()->json(["status" => $status, "message" => $message, "mail" => $mail]);
        } catch (\Exception $exception) {
            $status = "error";
            $message = "Mail Bulunamadı";
            LogService::add("ContactFormController readMail", $status, $message . " => " . $exception->getMessage());
            return response()->json(["status" => $status, "message" => $message]);
        }
    }

    public function unreadMail(Request $request, $id)
    {
        try {
            $status = "success";
            $message = "Mail Çekildi";
            $mail = ContactForm::find($id);
            if ($mail) {
                $mail->update(["is_read" => 0]);
            }
            return response()->json(["status" => $status, "message" => $message]);
        } catch (\Exception $exception) {
            $status = "error";
            $message = "Mail Bulunamadı";
            LogService::add("ContactFormController readMail", $status, $message . " => " . $exception->getMessage());
            return response()->json(["status" => $status, "message" => $message]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $status = "success";
            $message = "Mail Silindi";
            $mail = ContactForm::withTrashed()->findOrFail($id);

            if ($mail->deleted_at != NULL) {
                $mail->restore();
                $message = "Mail Geri Yüklendi";
            } else {
                $mail->delete();
            }

            return response()->json(["status" => $status, "message" => $message]);
        } catch (\Exception $exception) {
            $status = "error";
            $message = "Mail Silinemedi";
            LogService::add("ContactFormController delete", $status, $message . " => " . $exception->getMessage());
            return response()->json(["status" => $status, "message" => $message]);
        }
    }

    public function deleted()
    {
        $mails = ContactForm::onlyTrashed()->get();
        return view('cms.contactForms.deleted', compact('mails'));
    }
}
