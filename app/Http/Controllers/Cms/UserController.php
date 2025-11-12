<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\LogService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('cms.user.index', compact('users'));
    }

    public function destroy($id)
    {
        try {
            $status = "success";
            $message = "Kullanıcı Silindi";
            $user = User::findOrFail($id);
            $user->delete();
            LogService::add("UserController Destroy", $status, $message);
            return redirect()->route('cms.users.index')->with(["status" => $status, "message" => $message]);
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Kullanıcı Silinemedi";
            LogService::add("UserController Destroy", $status, $message . " => " . $exception->getMessage());
            return redirect()->route('cms.users.index')->with(["status" => $status, "message" => $message]);
        }
    }

}
