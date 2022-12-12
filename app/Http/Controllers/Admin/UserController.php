<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user', compact('users'));
    }

    public function updateStatus($user_id, $status_code)
    {
        try {

           $update = User::whereId($user_id)->update([
                'status' => $status_code,
            ]);

        if($update){

                Alert::info('Success Title', 'Success Suspend User');
                return redirect()->route('users-layout-1');
            }

            Alert::info('Danger Title', 'Fail Suspend User');
            return redirect()->route('users-layout-1');

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
