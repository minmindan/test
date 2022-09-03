<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account_infos;
class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        // dd($request->all());。
        $data = Account_infos::create([
            'account'=>$request->account,
            'name'=>$request->name,
            'gender'=>$request->gender,
            'birthday'=>$request->birthday,
            'mail'=>$request->mail,
            'note'=>$request->note,
        ]);
        $data->save();
        return redirect('/list');
    }

    public function list ()
    {
        $datas = Account_infos::get();
        return view('list',compact('datas'));
    }


    public function __invoke(Request $request)
    {
        //

    }
}
