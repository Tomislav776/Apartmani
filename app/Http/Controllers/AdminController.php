<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Mail\ApproveAd;
use App\User;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('Admin');
    }


    public function index()
    {
        return view('admin.home');
    }

    public function getAddEditRemoveColumn()
    {
        return view('admin.home');
    }

    public function getModeratorData()
    {
        $apartments = Apartment::select(['id', 'name', 'user_id', 'county_id', 'description', 'premium', 'created_at', 'updated_at', 'slug']) -> where('validation', '=', '0');

        return Datatables::of($apartments)
            ->addColumn('action', function ($apartments) {
                return '<a href="admin/'.$apartments->slug.'" class="btn btn-xs btn-primary"> Provjeri </a>';
            })

            ->make(true);
    }

    public function showApartment($slug = null){
        $apartment = Apartment::where('slug', '=', $slug)->first();
        return view('admin.apartment', ['apartment' => $apartment ]);
    }

    public function getApartmentResponse(Request $request, $slug){

        $apartment = Apartment::where('slug', '=', $slug)->first();

        if ($request->button == "Dozvoli"){
            $apartment->validation = '1';
            $apartment->save();

            Mail::to($apartment->user->email)->send(new ApproveAd($apartment->user, "Vaš oglas je prošao validaciju."));
        } else {
            $apartment->validation = '-1';
            $apartment->save();
            Mail::to($apartment->user->email)->send(new ApproveAd($apartment->user, $request->message));
        }

        return redirect('/admin')->with('success', 'Oglas je validiran!');

    }


    public function test(){
        $apartments = Apartment::select(['id', 'name', 'user_id', 'county_id', 'description', 'premium', 'created_at', 'updated_at', 'slug']);
        $tt = $apartments->belongsTo('Apartment', 'foreign_key');
        dd($tt);
    }

}
