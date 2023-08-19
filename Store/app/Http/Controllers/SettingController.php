<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index(){
        return view('settings.setting');
    }
    public function update(SettingUpdateRequest $request , Setting $setting){
        $setting->update($request->validated());
        $imagepath = uniqid().date('d-m-Y').$request->logo->extension();
        $request->logo->move(public_path('/logo') , $imagepath);

        $setting->update(['logo' => 'public/logo'.$imagepath]);
        // Storage::disk('public')->put('logo/'.$imagepath , $logo);
        dd($imagepath);
        return redirect()->route('dashboard.settings.index')->with('success' , 'تم التحديث بنجاح');









        

        // $setting = Setting::first();
        // $setting->title       =  $request->title ;
        // $setting->description =  $request->description ;
        // $setting->save();
        // return redirect()->route('settings.setting')->with
    }
}
