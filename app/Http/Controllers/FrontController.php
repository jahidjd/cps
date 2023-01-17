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
use App\Models\Seo;
use App\Models\AddService;
use App\Models\ServiceImage;
use App\Models\CustomerReview;
use App\Models\ClientCompany;

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
        $seo = Seo::first();
        $s = ServiceDetails::get();
        $customer = CustomerReview::where('status','active')->latest()->get();
        $cLogo = ClientCompany::where('status','active')->latest()->get();
        return view('front.index',compact('cLogo','customer','s','seo','general','slider','bodyOne','bodyOneT','bodyTwoT','bodyTwo','serviceT','service','homePricing','homePricingT','works','socialMedia','bodySectionThree','bodySectionThreeT'));
    }
    function about_us(){
        $general = General::first();
        $socialMedia = SocialMedia::first();
        $about = AboutUs::get();
        $seo = Seo::first();
        $s = ServiceDetails::get();
        return view('front.about_us',compact('general','socialMedia','about','seo','s'));
    }
    function workPortfolio(){
        $general = General::first();
        $works = Works::where('status','active')->latest()->get();
        $socialMedia = SocialMedia::first();
        $seo = Seo::first();
        $s = ServiceDetails::get();
        $price = PriceList::get();
        return view('front.workPortfolio',compact('general','works','socialMedia','seo','s','price'));
    }
    function pricings(){
        $general = General::first();
        $pricing = Pricing::where('status','active')->latest()->get();
        $socialMedia = SocialMedia::first();
        $seo = Seo::first();
        $s = ServiceDetails::get();
        return view('front.pricing',compact('general','pricing','socialMedia','seo','s'));
    }
    function contact(){
        $general = General::first();
        $socialMedia = SocialMedia::first();
        $seo = Seo::first();
        $s = ServiceDetails::get();
        return view('front.contact',compact('general','socialMedia','seo','s'));
    }
    function freeTrial(){
        $general = General::first();
        $socialMedia = SocialMedia::first();
        $seo = Seo::first();
        $s = ServiceDetails::get();
        return view('front.freeTrial',compact('general','socialMedia','seo','s'));
    }
    function service(){
        $general = General::first();
        $serviceT = Service::where('status','active')->latest()->get();
        $socialMedia = SocialMedia::first();
        $seo = Seo::first();
        $s = ServiceDetails::get();
        return view('front.service',compact('general','serviceT','socialMedia','seo','s'));
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
        // $file = $request->file('image_one')->getimagesize();
        // $data = $file;
        // dd($data);
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'image_one'=>'image|mimes:png,jpg,svg|max:5048',
            'image_two'=>'image|mimes:png,jpg,svg|max:5048',
            'image_three'=>'image|mimes:png,jpg,svg|max:5048',
        ]);
        $data = [
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ];
        if($request->file('image_one')){
            $imageOne = $request->file('image_one');
            $imageSize = $request->file('image_one')->getimagesize();
            // if($imageSize < )
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
        $seo = Seo::first();
        $s = ServiceDetails::get();
        $price = PriceList::get();
        return view('front.serviceDetailss',compact('s','general','service','socialMedia','bodySectionTwo','works','seo','price'));
    }
    function serviceChoose($id){
            $service_id = $id;
            $general = General::first();
            $price = PriceList::latest()->get();
            $socialMedia = SocialMedia::first();
            $seo = Seo::first();
            $s = ServiceDetails::get();
            $image = ServiceImage::latest()->get();
            return view('front.serviceChoose',compact('s','general','socialMedia','price','seo','image','service_id'));
        
        
    }

    function serviceAdd(Request $request){
        //  dd($request);
       $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'address'=>'required',
       ]);
        $pricing_id = $request->product_ids;
        $service_name = $request->product_names;
        
        $name = $request->first_name.' '. $request->last_name;
      
        $id = json_encode($pricing_id);
        $ser_name = json_encode($service_name);
        $data = [
            'pricing_id'=>$id,
            'name'=>$name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'sub_total'=>$request->sub_total,
            'grand_total'=>$request->grand_total,
            'comments'=>$request->additional_comment,
            'service_name'=>$ser_name,
        ];
        $d = AddService::create($data);
        if($d){
            return response()->json([
                'status'=>'success',
            ]);
        }else{
            return response()->json([
                'status'=>'false',
            ]); 
        }
    }

}
