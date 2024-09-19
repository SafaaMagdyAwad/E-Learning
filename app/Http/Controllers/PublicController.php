<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $services=Service::query()->where('isPublished',1)->take(4)->get();
        $categories=Category::query()->take(4)->get();
        $cources=Course::query()->with(['category','instructor'])->where('isPublished',1)->where('isPopular',1)->take(3)->get();
        $testimonials=Testimonial::query()->where('isPublished',1)->take(5)->get();
        return view('index',compact('services','categories','cources','testimonials'));
    }
    public function about(){
        $services=Service::query()->where('isPublished',1)->get();
        $instructors=Instructor::query()->where('isPublished',1)->where('isActive',1)->take(4)->get();
        return view('about',compact('services','instructors'));
    }
    public function contact(){
        return view('contact');
    }
    public function courses(){
        $cources=Course::query()->where('isPublished',1)->with(['category','instructor'])->where('isPopular',1)->get();
        $categories=Category::query()->take(4)->get();
        $testimonials=Testimonial::query()->where('isPublished',1)->take(5)->get();
        return view('courses',compact('cources','categories','testimonials'));
    }
    public function team(){
        $instructors=Instructor::query()->where('isPublished',1)->get();
        return view('team',compact('instructors'));
    }
    public function testimonial(){
        $testimonials=Testimonial::query()->where('isPublished',1)->get();
        return view('testimonial',compact('testimonials'));
    }
    public function contact_post(Request $request){
        $data=$request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'subject'=>'required|string',
            'message'=>'required|string',
        ]);
        Contact::create($data);
        return redirect()->route('index');
    }
}
