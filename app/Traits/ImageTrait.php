<?php

namespace App\Traits;

use App\Models\User;

use Illuminate\Support\Str;

use Image;

Trait  ImageTrait
{
    function saveImage($request){
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = base_path() . '/public/uploads';
            $path = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save($destinationPath . '/' . $path);

        }
        else{
            $path = '';

        }
        return $path;
    }




}
