<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

use function Termwind\render;

class PropertyController extends Controller
{
    //create a function that returns the cityViewer view

    public function propertyDetails(Request $request, $id)
    {
        //dd($id);
        try {
            $property = Property::findOrFail($id);


            //$image = $property->images();
            //dd($image);
            //return a view with the property details
            $propertyDetailsHtml = view('propertyDetails', [
                'property' => $property,

            ])->render();
            //return a json response
            return response()->json([
                'success' => true,
                'message' => 'Property details retrieved successfully.',
                'data' => ['property' => $propertyDetailsHtml],
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Property details could not be retrieved successfully.',
                'data' => ["error" => $th->getMessage()],
            ]);
        }
    }

    public function test()
    {
        //$properties = Property::where('property_featured', 1)->limit(8)->get();
        $properties = Property::where('property_featured', 1)->limit(12)->get();
        return view('cityviewer', [
            'properties' => $properties,
        ]);
    }
}
