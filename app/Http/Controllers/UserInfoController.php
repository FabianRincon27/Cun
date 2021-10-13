<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;
use Illuminate\Support\Facades\DB;

class UserInfoController extends Controller
{
    public function getHome(Request $request){
        $texto = trim($request->get('search'));
        $user = DB::table('users')
            ->select('id','name','email','position', 'salary')
            ->where('email', 'LIKE', '%'.$texto.'%')
            ->orderBy('id','asc')
            ->paginate(10);
        return view('areas.userinfo', compact('user','texto'));
    }

    public function getRegister(){
        return view('areas.registeruser');
    }

    public function postRegister(Request $request){
        $user = new UserInfo;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->position = $request->input('position');
        $user->salary = $request->input('salary');
        $s = [
            'html' => $request->input('html'),
            'css' => $request->input('css'),
            'javascript' => $request->input('javascript')
        ];

        $s = json_encode($s);
        $user->skills = $s;
        if($user->save()):
            return redirect('/users');
        endif;
    }

    public function getDelete($id){
        $user = UserInfo::findOrFail($id);
        $user->delete();
        return redirect('/users');
    }
}
