<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Response;

class PropertyImageController extends Controller
{

    public function displayImage($id)
    {
        $image = Image::findOrFail($id);
        $MainImage = $image->where('image_property_id', $image->image_property_id)->where('image_type', 'main')->first();
        //dd($MainImage->image_of_property);
        return Response::make($MainImage->image_of_property, 200, [
            'Content-Type' => 'image/jfif',
            'Content-Disposition' => 'inline; filename=image.jfif',
        ]);
    }
}
