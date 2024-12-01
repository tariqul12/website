<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Pakage;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $pakages = Pakage::latest()->take(3)->get();
        return view('frontend.index',compact('pakages'));
    }

    public function about()
    {
        $about = About::latest()->first();
        return view('frontend.about',compact('about'));
    }
    public function service()
    {
        $services = Service::latest()->get();
        return view('frontend.service',compact('services'));
    }
    public function package()
    {
       $pakages = Pakage::latest()->get();
        return view('frontend.package',compact('pakages'));
    }
    public function contact()
    {
        $contact = Contact::latest()->first();
        return view('frontend.contact',compact('contact'));
    }
}
