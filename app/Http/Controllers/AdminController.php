<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\General;
use App\Models\Slider;
use App\Models\BodySectionOne;
use App\Models\BodySectionTwo;
use App\Models\Service;
use App\Models\HomePricing;
use App\Models\Works;
use App\Models\Pricing;
use App\Models\UserMessage;
use App\Models\SocialMedia;
use App\Models\BodySectionThree;
use App\Models\AboutUs;
use App\Models\ServiceDetails;
use App\Models\PriceList;
use App\Models\Seo;
use App\ImageModel;
use Image;
use App\Models\FreeTrial;
use App\Models\AddService;
use App\Models\ServiceImage;

class AdminController extends Controller
{
    function __construct(){
        $this->middleware('auth')->except('index');
    }
    function index(){
        return view('admin.index');
    }
    function dashboard(){
        $data = Auth::user();
        return view('admin.dashboard',compact('data'));
    }
    function general(){
        $data = Auth::user();
        $general = General::first();
        
        return view('admin.general',compact('data','general'));
    }
    function updateGeneral(Request $request, $id){
        $general = General::find($id);
        $data = [
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'contact_text'=>$request->contact_text,
            'footer_text'=>$request->footer_text,
            'service_text'=>$request->service_text,
            'portfolio_text'=>$request->portfolio_text,
            'copyright_text'=>$request->copyright_text,
            'pricing_text'=>$request->pricing_text,
            'map'=>$request->map,
            'bennar_text_small'=>$request->bennar_text_small,
            'bennar_text'=>$request->bennar_text,
            'free_trl_text'=>$request->free_trl_text,
            'home_button_text'=>$request->home_button_text,
        ];
        if($request->file('logo')){
            $logo = Image::make($request->file('logo'));
            $imageName ='PSC-'.time().'-'.$request->file('logo')->getClientOriginalName();
        $destinationPath = public_path('aminAsset/image/logo/');
        $logo->resize(130,76.99);
        $logo->save($destinationPath.$imageName);
        $data['logo']=$imageName;
        }
        if($request->file('card_image')){
            $card_image = Image::make($request->file('card_image'));
            $imageName ='PSC-'.time().'-'.$request->file('card_image')->getClientOriginalName();
        $destinationPath = public_path('aminAsset/image/card_image/');
        $card_image->resize(140,125.53);
        $card_image->save($destinationPath.$imageName);
        $data['card_image']=$imageName;
        }
       $d = $general->update($data);
       if($d){
         return back()->with('success','Update Successfully');
       }
    }
    function slider(){
        $data = Auth::user();
        $general = General::first();
        $slider = Slider::latest()->get();
        return view('admin.slider',compact('data','general','slider'));
    }
    function addSlider(Request $request){
        $request->validate([
            'photo'=>'required',
            'status'=>'required',
        ]);
        $image = Image::make($request->file('photo'));
            $imageName ='slider-'.time().'-'.$request->file('photo')->getClientOriginalName();
        $destinationPath = public_path('aminAsset/image/slider/');
        $image->resize(1900,800);
        $image->save($destinationPath.$imageName);
        $data['photo']=$imageName;
        $data['slider']=$request->status;
        $data['title']=$request->title;
        $d = Slider::create($data);
        if($d){
            return back()->with('success','slider added successfully!');
        }

    }
    function editSlider($id){
        $slider = Slider::find($id);
        $data = Auth::user();
        $general = General::first();
        return view('admin.editSlider',compact('data','general','slider'));

    }
    function updateSlider(Request $request,$id){
        $slider = Slider::find($id);
        if($request->file('photo')){
            $image = Image::make($request->file('photo'));
            $imageName ='slider-'.time().'-'.$request->file('photo')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/slider/');
            $image->resize(1900,800);
            $image->save($destinationPath.$imageName);
            $data['photo']=$imageName;
        }
        $data['status']=$request->status;
        $data['title']=$request->title;
        $d = $slider->update($data);
        if($d){
            return redirect()->route('slider')->with('success','slider updated successfully!');
        }
    }
    function deleteSlider(Request $request,$id){
        $slider = Slider::find($id);
        $slider->delete();
        return back()->with('success','slider deleted successfully');
    }

    // body section one
    function body_section_ones(){
        $data = Auth::user();
        $d = BodySectionOne::get();
        return view('admin.body_section_ones',compact('data','d'));
    }
    function addBodySectionOne(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $d = BodySectionOne::create($request->all());
        if($d){
            return back()->with('success','Added Successfully!');
        }
    }
    function editSectionOne($id){
        $data = Auth::user();
        $d = BodySectionOne::find($id);
        return view('admin.editSectionOne',compact('data','d'));
    }
    function updateBodySectionOne(Request $request, $id){
        $d = BodySectionOne::find($id);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
        $r = $d->update($data);
        if($r){
          return redirect()->route('body_section_ones')->with('success','Update Successfully');
        }
    }
    function deleteSectionOne($id){
        $d = BodySectionOne::find($id);
         $r = $d->delete();
        if($r){
            return back()->with('success','Deleted Successfully');
          }
    }
    function body_section_two(){
        $data = Auth::user();
        $d = BodySectionTwo::get();
        return view('admin.body_section_two',compact('data','d'));
    }
    function addBodySectionTwo(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = Image::make($request->file('image'));
            $imageName ='PSC-'.time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/bodySectionTwo/');
            $image->resize(76.79,76.79);
            $image->save($destinationPath.$imageName);
            $data['image']=$imageName;
        }
        $r = BodySectionTwo::create($data);
        if($r){
            return back()->with('success','Added Successfully');
        }

    }
    function editSectionTwo($id){
        $r = BodySectionTwo::find($id);
        $data = Auth::user();
        return view('admin.editSectionTwo',compact('data','r'));
    }
    function updateBodySectionTwo(Request $request, $id){
        $r = BodySectionTwo::find($id);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = Image::make($request->file('image'));
            $imageName ='PSC-'.time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/bodySectionTwo/');
            $image->resize(76.79,76.79);
            $image->save($destinationPath.$imageName);
            $data['image']=$imageName;
        }
       $t =  $r->update($data);
       if($t){
        return redirect()->route('body_section_two')->with('success','Updated Successfully');
      }
    }
    function deleteSectionTne($id){
        $r = BodySectionTwo::find($id);
        $t =  $r->delete();
        if($t){
         return redirect()->route('body_section_two')->with('success','Deleted Successfully');
       }
    }

    // service
    function service(){
        $data = Auth::user();
        $v = Service::get();
        $d = Service::latest()->get();
        return view('admin.service',compact('data','d','v'));
    }
    function addService(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = Image::make($request->file('image'));
            $imageName ='PSC-Service-'.time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/service/');
            $image->resize(680,340);
            $image->save($destinationPath.$imageName);
            $data['image']=$imageName;
        }
        $r = Service::create($data);
        if($r){
            return back()->with('success','Added Successfully');
        }
    }
    function editService($id){
        $r = Service::find($id);
        $data = Auth::user();
        return view('admin.editService',compact('data','r'));
    }
    function updateService(Request $request, $id){
        $r = Service::find($id);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = Image::make($request->file('image'));
            $imageName ='PSC-Service-'.time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/service/');
            $image->resize(680,340);
            $image->save($destinationPath.$imageName);
            $data['image']=$imageName;
        }
        $t = $r->update($data);
        if($t){
            return redirect()->route('services')->with('success','Updated Successfully');
        }
    }
    function deleteService($id){
        $r = Service::find($id);
        $t =  $r->delete();
        if($t){
         return back()->with('success','Deleted Successfully');
       }
    }
    function homePricing(){
        $data = Auth::user();
        $d = HomePricing::get();
        return view('admin.homePricing',compact('data','d'));
    }
    function addHomePricing(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = Image::make($request->file('image'));
            $imageName ='PSC-Service-'.time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/pricing/homePricingImage/');
            $image->resize(150,150);
            $image->save($destinationPath.$imageName);
            $data['image']=$imageName;
        }
        $r = HomePricing::create($data);
        if($r){
            return back()->with('success','Added Successfully');
        }
    }
    function editHomePricing($id){
        $r = HomePricing::find($id);
        $data = Auth::user();
        return view('admin.editHomePricing',compact('data','r'));
    }
    function updateHomePricing(Request $request,$id){
        $r = HomePricing::find($id);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = Image::make($request->file('image'));
            $imageName ='PSC-Service-'.time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/pricing/homePricingImage/');
            $image->resize(150,150);
            $image->save($destinationPath.$imageName);
            $data['image']=$imageName;
        }
         $t = $r->update($data);
         if($t){
            return redirect()->route('homePricing')->with('success','Updated Successfully');
        }
    }
    function deleteHomePricing($id){
        $r = HomePricing::find($id);
        $t =  $r->delete();
        if($t){
         return back()->with('success','Deleted Successfully');
        }
    }
    function works(){
        $data = Auth::user();
        $d = Works::get();
        return view('admin.works',compact('data','d'));
    }
    function addWorks(Request $request){
        $request->validate([
            'title'=>'required',
            'image'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = Image::make($request->file('image'));
            $imageName ='PSC-works-'.time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/works/');
            $image->resize(451.99,292.6);
            $image->save($destinationPath.$imageName);
            $data['image']=$imageName;
        }
        $r = Works::create($data);
        if($r){
            return back()->with('success','Added Successfully');
        }
    }
    function editWorks($id){
        $data = Auth::user();
        $v = Works::find($id);
        return view('admin.editWorks',compact('data','v'));

    }
    function updateWorks(Request $request, $id){
        $d = Works::find($id);
        $data = [
            'title'=>$request->title,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = Image::make($request->file('image'));
            $imageName ='PSC-works-'.time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/works/');
            $image->resize(451.99,292.6);
            $image->save($destinationPath.$imageName);
            $data['image']=$imageName;
        }
        $r = $d->update($data);
        if($r){
            return redirect()->route('works')->with('success','Updated Successfully');
        }
    }
    function deleteWorks($id){
        $r = Works::find($id);
        $t =  $r->delete();
        if($t){
         return back()->with('success','Deleted Successfully');
        }
    }
    function pricing(){
        $data = Auth::user();
       
        $l = Pricing::latest()->get();
        return view('admin.pricing',compact('data','l'));
    }
    function addpricing(Request $request){
        $request->validate([
            'title'=>'required',
            'button_text'=>'required',
            'image'=>'required',
        ]);
        $data = [
            'title'=>$request->title,
            'image'=>$request->image,
            'description'=>$request->description,
            'button_text'=>$request->button_text,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = Image::make($request->file('image'));
            $imageName ='PSC-works-'.time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/pricing/');
            $image->resize(352,175.99);
            $image->save($destinationPath.$imageName);
            $data['image']=$imageName;
        }
        $r = Pricing::create($data);
        if($r){
            return back()->with('success','Added Successfully');
        }
    }
    function editPricing($id){
        $data = Auth::user();
        $v = Pricing::find($id);
        return view('admin.editPricing',compact('data','v'));
    }
    function updatePricing(Request $request,$id){
        $v = Pricing::find($id);
        $data = [
            'title'=>$request->title,
            'image'=>$request->image,
            'description'=>$request->description,
            'button_text'=>$request->button_text,
            'status'=>$request->status,
        ];
        if($request->file('image')){
            $image = Image::make($request->file('image'));
            $imageName ='PSC-works-'.time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/pricing/');
            $image->resize(352,175.99);
            $image->save($destinationPath.$imageName);
            $data['image']=$imageName;
        }
         $r = $v->update($data);
        if($r){
            return redirect()->route('pricing')->with('success','Updated Successfully');
        }
    }
    function deletePricing($id){
        $r = Pricing::find($id);
        $t =  $r->delete();
        if($t){
         return back()->with('success','Deleted Successfully');
        }
    }
    function userMessage(){
        $data = Auth::user();
        $d = UserMessage::latest()->get();
        return view('admin.userMessage',compact('data','d'));
    }

    
    function deleteContactMessage($id){
        $v = UserMessage::find($id);
       $r = $v->delete();
        if($r){
            return back()->with('success','Successfully Deleted');
        }
    }
    function socialMediaLinks(){
        $data = Auth::user();
        $d = SocialMedia::first();
        return view('admin.socialMediaLinks',compact('data','d'));
    }
    function updateSocialMedia(Request $request){
        $d = SocialMedia::find($request->id);
        $data = [
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'pinterest'=>$request->pinterest,
        ];
        $r = $d->update($data);
        if($r){
            return back()->with('success','Updated Successfully');
        }
    }
    function bodySectionThree(){
        $data = Auth::user();
        $d = BodySectionThree::get();
        $l = BodySectionThree::latest()->get();
        return view('admin.bodySectionThree',compact('data','d','l'));
    }
    function addBodySectionThree(Request $request){
        $request->validate([
            'title'=>'required',
            
        ]);
        $d = BodySectionThree::create($request->all());
        if($d){
            return back()->with('success','Added Successfully!');
        }
    }
    function editSectionThree($id){
        $data = Auth::user();
        $d = BodySectionThree::find($id);
        return view('admin.editSectionThree',compact('data','d'));
    }
    function updateBodySectionThree(Request $request,$id){
        $d = BodySectionThree::find($id);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
        $r = $d->update($data);
        if($r){
          return redirect()->route('bodySectionThree')->with('success','Update Successfully');
        }
    }
    function deleteSectionThree($id){
        $d = BodySectionThree::find($id);
        $t = $d->delete();
        if($t){
            return back()->with('success','Deleted Successfully');
        }
    }
    function aboutUsSection(){
        $data = Auth::user();
        
        $l = AboutUs::latest()->get();
        return view('admin.aboutUsSection',compact('data','l'));
    }
    function addAboutText(Request $request){
        $d = AboutUs::create($request->all());
        if($d){
            return back()->with('success','Added Successfully!');
        }
    }
    function editAboutSection($id){
        $d = AboutUs::find($id);
        $data = Auth::user();
        return view('admin.editAboutSection',compact('data','d'));
    }
    function UpdateAboutText(Request $request,$id){
        $d = AboutUs::find($id);
        $data = [
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ];
        $r = $d->update($data);
        if($r){
            return redirect()->route('aboutUsSection')->with('success','Updated Successfully!');
        }
    }
    function deleteAboutSection($id){
        $d = AboutUs::find($id);
        $r = $d->delete();
        if($r){
            return back()->with('success','deleted successfully');
        }
    }
    // service details

    function serviceDetailsForm(){
        $data = Auth::user();
        $service = Service::get();
        $l = ServiceDetails::latest()->get();
        return view('admin.serviceDetailsForm',compact('data','l','service'));
    }
    function addServiceDetails(Request $request){
        $request->validate([
            'service_id'=>'required',
            'service_details'=>'required',
        ]);
        $l = ServiceDetails::create($request->all());
        if($l){
            return back()->with('success','Service Added Successfully');
        }
    }
    function editServiceDetails($id){
        $data = Auth::user();
        
        $l = ServiceDetails::where('service_id',$id)->first();
        if(empty($l)){
            $service = Service::find($id);
            return view('admin.editViewServiceDetails',compact('data','service'));
        }else{
            $service_id= Service::find($id);
            return view('admin.editServiceDetails',compact('data','service_id','l'));
        }
            
        
       
    }

    function updateServiceDetails(Request $request, $id){
        $l = ServiceDetails::find($id);
        $data = [
            'service_id'=>$request->service_id,
            'service_details'=>$request->service_details,
            'details_quote_one'=>$request->details_quote_one,
            'details_quote_two'=>$request->details_quote_two,
            'service_values'=>$request->service_values,
            'about_the_service'=>$request->about_the_service,
            'advantage_of_the_service'=>$request->advantage_of_the_service,
            'more_details'=>$request->more_details,
        ];
        $r = $l->update($data);
        if($r){
            return back()->with('success','Updated Successfully');
        }
    }
    function pricingList(){
        $data = Auth::user();
        $service = Service::get();
        $price = PriceList::latest()->get();
        return view('admin.pricingList',compact('data','service','price'));
    }
    function addPriceList(Request $request){
        $d = PriceList::create($request->all());
        if($d){
            return back()->with('success', 'Price Added Successfully!');
        }
    }
    function editPriceList($id){
        $data = Auth::user();
        $service = Service::get();
        $price = PriceList::find($id);
        return view('admin.editPriceList',compact('data','service','price'));
    }
    function updatePriceList(Request $request,$id){
        $price = PriceList::find($id);
        $data = [
            'title'=>$request->title,
            'service_id'=>$request->service_id,
            'simple'=>$request->simple,
            'complex'=>$request->complex,
            'advance'=>$request->advance,
            'super_complex'=>$request->super_complex,
        ];
        $r =  $price->update($data);
        if($r){
            return redirect()->route('pricingList')->with('success','Updated Successfully!');
        }
    }
    function deletePriceList($id){
        $price = PriceList::find($id);
        $r = $price->delete();
        if($r){
            return back()->with('success','Deleted Successfully!');
        }
    }
    function freeTrailList(){
        $data = Auth::user();
        $d = FreeTrial::latest()->get();
        return view('admin.freeTrailList',compact('data','d'));
    }
    function metaTable(){
        $data = Auth::user();
        $d = Seo::first();
        return view('admin.metaTable',compact('data','d'));
    }
    function addMeta(Request $request){
        $request->validate([
            'meta_description'=>'required',
            'meta_keyword'=>'required',
        ]);
        $d = Seo::create($request->all());
        if($d){
            return back()->with('success','Meta Added Successfully');
        }
    }
    function editMeta($id){
        $d = Seo::find($id);
        $data = Auth::user();
        return view('admin.editMeta',compact('data','d'));
    }
    function updateMeta(Request $request){
        // dd($request);
        $id = $request->id;
        $d = Seo::where('id',$id);
        $data = [
            'meta_description'=>$request->meta_description,
            'meta_keyword'=>$request->meta_keyword,
        ];
        $r = $d->update($data);
        if($r){
            return back()->with('success','Meta Updated Successfully');
        }
    }
    function deleteMeta($id){
        $d = Seo::find($id);
        $r = $d->delete();
        if($r){
            return back()->with('success','Meta Deleted Successfully');
        }
    }

    function order(){
        $data = Auth::user();
        $d = AddService::latest()->get();
      
        
        return view('admin.order',compact('data','d'));
    }
    function orderDetails($id){
        $data = Auth::user();
        $d = AddService::find($id);
        
        $r = \json_decode($d->pricing_id);
        $an = \json_decode($d->service_name);
        $ars = explode(',',$an);
        $ar = explode(',',$r);
        
    //    dd($ar);
            $price = [];
            foreach($ar as $a){
                $ss = PriceList::where('id',$a)->first();
                array_push($price,$ss);
            }
          
        
    //    dd($price);
        return view('admin.orderDetails',compact('data','d','price','ars'));
        
    }
    function serviceImage(){
        $data = Auth::user();
        $d = AddService::latest()->get();
        $service = Service::get();
        $serviceImage = ServiceImage::latest()->get();
        return view('admin.serviceImage',compact('data','d','service','serviceImage'));
    }
    function addServiceImage(Request $request){
        $request->validate([
            'title'=>'required',
            'service_id'=>'required',
            'package'=>'required',
            'type'=>'required',
             
        ]);
        $data = [
            'title'=>$request->title,
            'service_id'=>$request->service_id,
            'package'=>$request->package,
            'type'=>$request->type,
        ];
        if($request->file('slider_image')){
            $image = Image::make($request->file('slider_image'));
            $imageName ='PSC-slider-'.time().'-'.$request->file('slider_image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/pricing/packageImage/');
            $image->resize(1106.19,564.66);
            $image->save($destinationPath.$imageName);
            $data['slider_image']=$imageName;
        }
        if($request->file('thumb_image')){
            $image = Image::make($request->file('slider_image'));
            $imageName ='PSC-thumb-'.time().'-'.$request->file('slider_image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/pricing/packageImage/');
            $image->resize(50,50);
            $image->save($destinationPath.$imageName);
            $data['thumb_image']=$imageName;
        }
        $r = ServiceImage::create($data);
        if($r){
            return back()->with('success','Package Image Added Successfully');
        }
    }
    function editServiceImage($id){
        $data = Auth::user();
        $d = AddService::latest()->get();
        $service = Service::get();
        $serviceImage = ServiceImage::find($id);
        return view('admin.editServiceImage',compact('data','d','service','serviceImage'));
    }
    function updateServiceImage(Request $request, $id){
        $serviceImage = ServiceImage::find($id);
        $data = [
            'title'=>$request->title,
            'service_id'=>$request->service_id,
            'package'=>$request->package,
            'type'=>$request->type,
        ];
        if($request->file('slider_image')){
            $image = Image::make($request->file('slider_image'));
            $imageName ='PSC-slider-'.time().'-'.$request->file('slider_image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/pricing/packageImage/');
            $image->resize(1106.19,564.66);
            $image->save($destinationPath.$imageName);
            $data['slider_image']=$imageName;
        }
        if($request->file('thumb_image')){
            $image = Image::make($request->file('slider_image'));
            $imageName ='PSC-thumb-'.time().'-'.$request->file('slider_image')->getClientOriginalName();
            $destinationPath = public_path('aminAsset/image/pricing/packageImage/');
            $image->resize(50,50);
            $image->save($destinationPath.$imageName);
            $data['thumb_image']=$imageName;
        }
        $r = $serviceImage->update($data);
        if($r){
            return redirect()->route('serviceImage')->with('success','Package Image Added Successfully');
        }
    }
    function deleteServiceImage($id){
        $serviceImage = ServiceImage::find($id);
        $r = $serviceImage->delete();
        if($r){
            return back()->with('success','Package Image Deleted Successfully');
        }
    }

}
