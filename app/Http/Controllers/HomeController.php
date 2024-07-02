<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Detail;
use App\Models\Image;
use PhpParser\Node\Stmt\TryCatch;

class HomeController extends Controller
{
    public function index()
    {
        $properties = Property::where('property_featured', 1)->limit(8)->get();
        //debug to see the properties
        return view('rentalHomePage', [
            'properties' => $properties,
        ]);
    }

    public function cityViewer($id)
    {
        TODO:
        'get properties within a certain distance from the property with id = $id';

        $initialProperty = Property::findOrFail($id);
        //dd($initialProperty->property_id);
        //where('property_featured,1) and image_location = 'main'

        $properties = Property::where('property_featured', 1)->limit(12)->get();
        /*         foreach ($properties as $property) {

            dd($property->images[0]->image_relation_num, $property->images[0]->image_type, $property->images[0]->image_location, $property->images[0]->image_property_id);
        } */
        //dd($properties->images[0]->image_id);
        return view('cityViewer', [
            'initialProperty' => $initialProperty,
            'properties' => $properties,

        ]);
    }
    /* public function propertyDetails()
    {
        $success =false;
        $message = '';
        $data = [];

        try {
            //code...
            $propertyImage = Image::sel
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
*/
    public function datatable()
    {
        return view('datatable1');
    }

    public function getPosts()
    {
        $success = false;
        $message = '';
        $data = [];

        try {
            $customers = Customer::all();
            //$detail  = Detail::all();

            $success = true;
            $message = 'Data fetched successfully';
            $data = $customers;

            //dd($data);
        } catch (\Throwable $th) {
            $message = $th->getMessage();
            $success = false;
            $data = [];
        }
        //dd($data);
        return response()->json([
            'success' => $success,
            'message' => $message,
            'data' => $data,
        ]);
    }
}
