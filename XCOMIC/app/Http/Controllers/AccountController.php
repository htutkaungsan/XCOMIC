<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $validator = validator(request()->all(), [
            'deviceUID' => 'required',
            'coffee' => 'required',
            'downloads' => 'required',
            'points' => 'required',
        ]);

        if($validator->fails()) return "false";

        $account = new Account;
        $account->deviceUID = request()->deviceUID;
        $account->coffee = request()->coffee;
        $account->downloads = request()->downloads;
        $account->points = request()->points;
        $account->save();

        return "true";
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Account::where('deviceUID', $id)->get();
        if($user->count() > 0) return $user[0];
        return "false";
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

        $validator = validator(request()->all(), [
            'coffee' => 'required',
            'downloads' => 'required',
            'points' => 'required',
        ]);

        if($validator->fails()) return "false";

        $index = Account::where('deviceUID',$id)->get()[0]->id;
        $update_user = Account::find($index);
        $update_user->coffee = request()->coffee;
        $update_user->downloads = request()->downloads;
        $update_user->points = request()->points;
        $update_user->save();

        return "true";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
