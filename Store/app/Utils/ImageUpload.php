<?php 
namespace App\Utils ;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Str ;
use Illuminate\Support\Facades\Storage ;



class ImageUpload {
public static function imageuploade($request,$imagename= 'image' ,$height = null , $width = null ){

    $imagepath =uniqid().'-'.date('d-m-Y'). '.' . $request->extension();
    [$widthDefault , $heightDefault] = getimagesize($request);
    $height = $height ?? $heightDefault ;
    $width = $width ?? $widthDefault ;

    $request->move(public_path("images/$imagename") , $imagepath);
    return  'images/'.$imagename."/".$imagepath ;

} 
}