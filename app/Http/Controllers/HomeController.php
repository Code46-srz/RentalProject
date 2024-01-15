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
        $properties = Property::where('property_featured', 1)->limit(12)->get();

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
