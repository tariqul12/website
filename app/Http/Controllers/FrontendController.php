<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Pakage;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $about = About::latest()->first();
        $pakages = Pakage::latest()->take(3)->get();
        $categories = Category::latest()->take(4)->get();
        // $banner = Banner::latest()->first();
        return view('frontend.index', compact('pakages', 'categories', 'about'));
    }

    public function about()
    {
        $about = About::latest()->first();
        $categories = Category::latest()->take(4)->get();
        $clients = Client::latest()->get();
        return view('frontend.about', compact('about', 'categories', 'clients'));
    }
    public function service()
    {
        $services = Service::latest()->get();
        return view('frontend.service', compact('services'));
    }
    public function package()
    {
        $pakages = Pakage::latest()->get();
        return view('frontend.package', compact('pakages'));
    }
    public function contact()
    {
        $contact = Contact::latest()->first();
        return view('frontend.contact', compact('contact'));
    }
}
