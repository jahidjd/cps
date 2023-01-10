<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;
use App\Models\Slider;
use App\Models\BodySectionOne;
use App\Models\BodySectionTwo;
use App\Models\HomePricing;
use App\Models\Works;
use App\Models\Service;
use App\Models\Pricing;
use App\Models\UserMessage;
use App\Models\SocialMedia;
use App\Models\BodySectionThree;
use App\Models\AboutUs;
use App\Models\ServiceDetails;
use App\Models\PriceList;
use App\Models\FreeTrial;

class FrontController extends Controller
{
    function index(){
        $general = General::first();
        $slider = Slider::where('status','active')->latest()->get();
        $bodyOneT = BodySectionOne::where('status','active')->first();
        $bodyOne = BodySectionOne::where('status','active')->latest()->get();
        $bodyTwoT = BodySectionTwo::where('status','active')->get();
        $bodyTwo = BodySectionTwo::where('status','active')->latest()->get();
        $service = Service::where('status','active')->get();
        $serviceT = Service::where('status','active')->latest()->get();
        $homePricing = HomePricing::where('status','active')->get();
        $homePricingT = HomePricing::where('status','active')->latest()->get();
        $socialMedia = SocialMedia::first();
        $bodySectionThree = BodySectionThree::first();
        $bodySectionThreeT = BodySectionThree::latest()->get();
        $works = Works::where('status','active')->latest()->get();
        return view('front.index',compact('general','slider','bodyOne','bodyOneT','bodyTwoT','bodyTwo','serviceT','service','homePricing','homePricingT','works','socialMedia','bodySectionThree','bodySectionThreeT'));
    }
    function about_us(){
        $general = General::first();
        $socialMedia = SocialMedia::first();
        $about = AboutUs::get();
        return view('front.about_us',compact('general','socialMedia','about'));
    }
    function workPortfolio(){
        $general = General::first();
        $works = Works::where('status','active')->latest()->get();
        $socialMedia = SocialMedia::first();
        return view('front.workPortfolio',compact('general','works','socialMedia'));
    }
    function pricings(){
        $general = General::first();
        $pricing = Pricing::where('status','active')->latest()->get();
        $socialMedia = SocialMedia::first();
        return view('front.pricing',compact('general','pricing','socialMedia'));
    }
    function contact(){
        $general = General::first();
        $socialMedia = SocialMedia::first();
        return view('front.contact',compact('general','socialMedia'));
    }
    function freeTrial(){
        $general = General::first();
        $socialMedia = SocialMedia::first();
        return view('front.freeTrial',compact('general','socialMedia'));
    }
    function service(){
        $general = General::first();
        $serviceT = Service::where('status','active')->latest()->get();
        $socialMedia = SocialMedia::first();
        return view('front.service',compact('general','serviceT','socialMedia'));
    }
    function addContactMessage(Request $request){
        // dd($request);
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ]);
        $data = [
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ];
        // if($request->file('image_one')){
        //     $imageOne = $request->file('image_one');
        //     $path = 'image/contact/userImage/';
        //     $imageName = $request->name.date('YmdHis').'.'.$imageOne->getClientOriginalExtension();
        //     $imageOne->move($path,$imageName);
        //     $data['image_one']= $imageName;
        // }
        // if($request->file('image_two')){
        //     $imageTwo = $request->file('image_two');
        //     $path = 'image/contact/userImage/';
        //     $imageName = $request->name.'-first-'.date('YmdHis').'.'.$imageTwo->getClientOriginalExtension();
        //     $imageTwo->move($path,$imageName);
        //     $data['image_two']= $imageName;
        // }
        // if($request->file('image_three')){
        //     $imageThree = $request->file('image_three');
        //     $path = 'image/contact/userImage/';
        //     $imageName = $request->name.'-second-'.date('YmdHis').'.'.$imageThree->getClientOriginalExtension();
        //     $imageThree->move($path,$imageName);
        //     $data['image_three']= $imageName;
        // }
        $r = UserMessage::create($data);
        if($r){
            return back()->with('success','Your Message Send Successfully');
        }
    }
    function addFreeTrial(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'image_one'=>'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'image_two'=>'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'image_three'=>'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
        $data = [
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ];
        if($request->file('image_one')){
            $imageOne = $request->file('image_one');
            $path = 'image/contact/userImage/';
            $imageName = $request->name.'one'.date('YmdHis').'.'.$imageOne->getClientOriginalExtension();
            $imageOne->move($path,$imageName);
            $data['image_one']= $imageName;
        }
        if($request->file('image_two')){
            $imageTwo = $request->file('image_two');
            $path = 'image/contact/userImage/';
            $imageName = $request->name.'two'.'-first-'.date('YmdHis').'.'.$imageTwo->getClientOriginalExtension();
            $imageTwo->move($path,$imageName);
            $data['image_two']= $imageName;
        }
        if($request->file('image_three')){
            $imageThree = $request->file('image_three');
            $path = 'image/contact/userImage/';
            $imageName = $request->name.'three'.'-second-'.date('YmdHis').'.'.$imageThree->getClientOriginalExtension();
            $imageThree->move($path,$imageName);
            $data['image_three']= $imageName;
        }
        $r = FreeTrial::create($data);
        if($r){
            return back()->with('success','Your Message Send Successfully');
        }
    }

    // service details

    function serviceDetails($id){
        $general = General::first();
        $service = ServiceDetails::where('service_id',$id)->first();
        $socialMedia = SocialMedia::first();
        $bodySectionTwo = BodySectionTwo::latest()->get();
        $works = Works::where('status','active')->latest()->get();
        return view('front.serviceDetailss',compact('general','service','socialMedia','bodySectionTwo','works'));
    }
    function serviceChoose(){
        $general = General::first();
        $price = PriceList::latest()->get();
        $socialMedia = SocialMedia::first();
        return view('front.serviceChoose',compact('general','socialMedia','price'));
    }

    function serviceAdd(Request $request){
        dd($request);
    }

}
