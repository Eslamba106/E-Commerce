<?php

namespace App\Http\Controllers;

use App\Http\Requests\Dashboard\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Utils\ImageUpload ;

class SettingController extends Controller
{
    public function index(){
        return view('settings.setting');
    }
    public function update(SettingUpdateRequest $request , Setting $setting ){
        
        $setting->update($request->validated());  
        if($request->has('logo')){
            $logo = ImageUpload::imageuploade($request->logo , 100 , 200 , 'logo');
            $setting->update(['logo' => $logo]);
        }
        if($request->has('favicon')){
            $favicon = ImageUpload::imageuploade($request->favicon , 100 , 200 ,'favicon');
            $setting->update(['favicon' => $favicon]);
        }


return redirect()->route('dashboard.settings.index')->with('success' , 'تم التحديث بنجاح');









        

        // $setting = Setting::first();
        // $setting->title       =  $request->title ;
        // $setting->description =  $request->description ;
        // $setting->save();
        // return redirect()->route('settings.setting')->with
    }
}
