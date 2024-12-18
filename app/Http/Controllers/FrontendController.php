<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Pakage;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index()
    {
        $about = About::latest()->first();
        $pakages = Pakage::latest()->take(3)->get();
        $categories = Category::latest()->take(4)->get();
        $banner_index = Banner::latest()->skip(1)->first();
        return view('frontend.index', compact('pakages', 'categories', 'about', 'banner_index'));
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
    public function order(Request $request, $id)
    {
        $package = Pakage::find($id);

        Mail::to("mshimul591@gmail.com")->send(new WelcomeMail([
            'id' => $package->id,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'package_title' => $package->title,
            'date' => date('Y-m-d H:i:s'),
        ]));
        return back();
    }
}
