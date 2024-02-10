<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Slider;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $sliders = Slider::active()->latest()->get();
        $services = Service::active()->latest()->limit(8)->get();
        $blogs = Blog::active()->latest()->limit(3)->get();

        return view('front.index', compact('sliders', 'services', 'blogs'));
    }

    /**
     * Show the application about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('front.about');
    }

    /**
     * Show the application services page.
     *
     * @return \Illuminate\View\View
     */
    public function services()
    {
        $services = Service::active()->latest()->limit(8)->get();

        return view('front.services', compact('services'));
    }

    /**
     * Show the application blogs page.
     *
     * @return \Illuminate\View\View
     */
    public function blogs()
    {
        $blogs = Blog::active()->latest()->get();

        return view('front.blogs', compact('blogs'));
    }

    /**
     * Show the application blog details page.
     *
     * @return \Illuminate\View\View
     */
    public function blogDetails($slug)
    {
        $blogs = Blog::active()->latest()->get();
        $blog = Blog::where('slug', $slug)->active()->first();

        return view('front.blog_details', compact('blogs', 'blog'));
    }

    /**
     * Show the application contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('front.contact');
    }
}
