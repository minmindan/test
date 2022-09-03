<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account_infos;
use Illuminate\Support\Str;
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
            'account'=>Str::lower('$request->account'),
            'name'=>$request->name,
            'gender'=>$request->gender,
            'birthday'=>$request->birthday,
            'mail'=>$request->mail,
            'note'=>$request->note,
        ]);
        $data->save();
        return redirect('/list');
    }

    public function list()
    {
        $datas = Account_infos::get();
        // $datas->find('birthday')->format('Y-m-d H:i:s')::remove('-','月');
        // dd($datas->all());
        return view('list',compact('datas'));
    }

    public function delete($id)
    {
        $deldata = Account_infos::find($id);
        $deldata->delete();
        return view('list');
    }

    public function __invoke(Request $request)
    {
        //

    }
}
