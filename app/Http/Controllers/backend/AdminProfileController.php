<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Donation;
use App\Models\Foundation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function AdminProfile(){
        $admin=Admin::find(1);
        return view('admin.profile_view',compact('admin'));
    }
    public function AdminProfileEdit(){
        $editData=Admin::find(1);
        return view('admin.profile_edit',compact('editData'));
    }
    public function AdminProfileUpdate(Request $request){
        $data=Admin::find(1);
        $data->name=$request->name;
        $data->email=$request->email;
        if($request->file('profile_photo_path')){
            $file=$request->file('profile_photo_path');
           @unlink(public_path('upload/admin_images/'.$data->profile_photo_path));
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_photo_path']=$filename;
        }
        $data->save();
        $notification=array(
            'message'=>'Admin Updated Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    }
    public function AdminChangePassword(){
        return view('admin.change_password');
    }
    public function AdminUpdateChangePassword(Request $request){

        $validateData=$request->validate([
            'oldpassword'=>'required',
            'password'=>'required|confirmed',
        ]);
        $hashedPassword=Admin::find(1)->password;
        if(Hash::check($request->oldpassword,$hashedPassword)){
            $admin=Admin::find(1);
            $admin->password=Hash::make($request->password);
            $admin->save();
            Auth::logout();
            return redirect()->route('admin.logout');
        }else{
            return redirect()->back();
        }
    }

//    Foundation Control
    public function ControlFoundation(){
        $foundations=Foundation::get();
        return view('admin.foundation.list',compact('foundations'));
    }
    public function ApproveFoundation($id){
        Foundation::findOrFail($id)->update(['approved' => 1]);
        $notification=array(
            'message'=>'Foundation Approved Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('all.foundations')->with($notification);
    }
    public function DonationReport(){
        $donations = Donation::select('foundations.name', DB::raw('SUM(donations.amount) as total_donations'))
            ->join('foundations', 'donations.foundation_id', '=', 'foundations.id')
            ->groupBy('foundations.id')
            ->get();
        return view('backend.foundation.donation_report',compact('donations'));
    }
}
