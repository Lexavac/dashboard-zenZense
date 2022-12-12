<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class UsrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        $cust = User::select("*")
                        ->where([
                            ["level", "Customer"],
                        ])
                        ->get();

        return view('pages/users-layout-1', compact('cust', 'user'));
    }


    public function updateStatus($user_id, $status_code)
    {
        try {

           $update = User::whereId($user_id)->update([
                'status' => $status_code,
            ]);

        if($update){

                Alert::info('Success Title', 'Success Update Status');
                return redirect()->route('users-layout-1');
            }

            Alert::info('Danger Title', 'Fail Suspend User');
            return redirect()->route('users-layout-1');

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return redirect('users-layout-1');
    }
}
