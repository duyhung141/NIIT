<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller implements ICrud
{
    //
    public function show(){
        $datas=User::all();
        return view('admin.users.show',compact('datas'));
    }

    public function add(){
        return view('admin.users.add');
    }
    public function doAdd(Request $request){
        $data=$request->all();
        unset($data['_token']);
        $data['password']=Hash::make($data['pasword']);
        try {
            User::create($data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());        
        }
        return redirect()->back()->with('success','Thêm mới thành công');
    }
    public function edit($id){
        $data=User::find($id);
        return view('admin.users.edit',compact('data'));
    }
    public function doEdit($id,Request $request){
        $data=$request->all();
        unset($data['_token']);
        $data['password']=Hash::make($data['password']);
        try {
            User::where('id',$id)->update($data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());        
        }
        return redirect()->back()->with('success','Sửa thành công');
    }
    public function delete($id){
        $data=User::where('id',$id)->delete();
        return redirect()->back();
    }
}
