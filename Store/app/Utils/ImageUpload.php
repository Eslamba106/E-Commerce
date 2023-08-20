<?php 
namespace App\Utils ;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Str ;
use Illuminate\Support\Facades\Storage ;


class ImageUpload {
public static function imageuploade($request, $height = null , $width = null , $imagename= 'image'){

    $imagepath = Str::uuid().'-'.date('d-m-Y'). '.' . $request->extension();
    [$widthDefault , $heightDefault] = getimagesize($request);
    $height = $height ?? $heightDefault ;
    $width = $width ?? $widthDefault ;

    $request->move(public_path("$imagename") , $imagepath);
    return  $imagename."/".$imagepath ;

} 
}