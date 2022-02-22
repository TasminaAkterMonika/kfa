<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cit;
use DB;
use App\Models\Upcoming;
use App\Models\Ourclients;
use App\Models\Ourgallary;
use App\Models\aboutus;
use App\Models\ourteam;
use App\Models\faq;
use App\Models\business;
use App\Models\ourservice;
use App\Models\blogdetails;
use App\Models\testimonial;
use App\Models\projectdetails;
use App\Models\shopdetails;
use App\Models\Core\Users;
use App\Models\ourachivement;
use App\Models\Websitesettings;
use App\Models\Vacancyannouncement;
use App\Notifications\arifPasswordResetNotification;
use Hash;
use Helper;


use Illuminate\Support\Str;
class VmslController extends Controller{
	

	
	
	public function reCaptcha( $request)	{
		if(!is_null($request['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . config('sximo.cnf_recaptchaprivatekey') . '&response='.$request['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);
 
           return $data;
        }else{
           return false;
        }		
	}
	
	
public function savecareer(Request $request ){
    
    $file = $request->file('cv');
    $this->validate($request, [
        'firstname' => 'required',
        'lastname'=>'required',
        'email'=>'required | email',
        'phone'=>'required',
        'job_post'=>'required',
        'cv'=>'required | mimes:doc,docx,pdf'
    ]);
    
    $allowedfileExtension=['pdf','doc','docx'];
    $extension = $file->getClientOriginalExtension();
    $check = in_array($extension,$allowedfileExtension);
    
    if($check){
        $data = array_map('strip_tags', $request->input());
        unset($data['job_title']);
        unset($data['_token']);
        
        if($request->hasFile('cv')){
            $newName = round(microtime(true)+rand(11,99)).'.'.$extension;
            $data ['cv'] = $newName;
            
            $destinationPath = 'uploads/cv';
            $uploaded = $file->move($destinationPath,$newName);
            if($uploaded){
                $response = DB::table('con_career')->insert($data);
                $emailVars = [];
                $emailVars['firstname'] = $request->input('firstname');
                $emailVars['job_title'] = $request->input('job_title');
                $emailVars['company'] = $this->config['cnf_appname'];
                $recipient = $request->input('email');
                $message = view('emails.career_request',array('data'=> $emailVars));
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: '.$this->config['cnf_appname'].' < career@shasthoshurokkha.org >' . "\r\n";
                mail($recipient, 'Thank You For Your Application', $message, $headers);
            }
        }
    }
    
    if($response){
        return redirect()->back()->with('success', 'Successfully submitted your request. Please check your email for further procedure.');   
    }

}
	
	
	public function contact_data(Request $request){
	    
	    if(config('sximo.cnf_recaptcha') =='true') {
			$return = $this->reCaptcha($request->all());
			
			if($return){
				if($return['success'] !='true'){
				     return back()->with('message', 'Invalid reCpatcha');
					return response()->json(['status' => $return['success'], 'message' =>'Invalid reCpatcha']);	
				}
				
			}else{
			     return back()->with('message', 'Invalid reCpatcha');
			}
		}
	    
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];

        if ($this->validate($request, $rules)) {
            $data['first_name']    = $request->first_name;
            $data['last_name']    = $request->last_name;
            $data['email']   = $request->email;
            $data['phone']   =  $request->phone;
            $data['message'] = $request->message;
            $data['status'] = 1;
           DB::table('contact')->insert($data);
        }
        return back()->with('message', 'Successfully message sent.');
	}
	
	public function contact_email(Request $request){
        $request->validate([
            'name'    => 'required',
            'email' => 'required | email',
            'message' => 'required'
        ]);
        $from  = 'vmslfinl@server33.web-hosting.com';
        $to = $request->email;
        $email = $request->email;
        $subject = 'Customer Support';
        $message = $request->message;
        $name = $request->name;
        $body = "From: $name\n E-Mail: $from\n Message:\n $message";
        mail ($to, $subject, $body, $from);   
        echo " <div class='row formSentMsg'>
        		<div class='col-md-12 mt-2'>
                        <p style='margin-top:10px; font-style:italic; color:green;'>Message send Successfully..!</p>
                </div>
                </div>
                <script type='text/javascript'>
                   $('.formSentMsg').delay(5000).fadeOut(300);
                </script>
            ";
        
	}
	
	public function volunteer_account(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:3048',
            'email' => 'required|email',
            'profession' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'degree' => 'required',
            'experience' => 'required',
            'training' => 'required',
            'work_day' => 'required'
        ]);
        
      $data = new Ourvolunteers();
	    $image = $request->file('image');
	    if ($image) {
        	$image_name = date("Ymd".time());
        	$ext = strtolower($image->getClientOriginalExtension());
        	$image_full_name = $image_name.'.'.$ext;
        	$upload_path = public_path('/theme/img/team/');
        	//$image->move($upload_path, $image_full_name);
        	$data->image = $image_full_name;
	    }
        $data->name         = $request->name;
        $data->profession    = $request->profession;
        $data->short_description = $request->short_description;
        $data->description  = $request->description;
        $data->hobby        = $request->hobby;
        $data->degree       = $request->degree;
        $data->experience   = $request->experience;
        $data->training     = $request->training;
        $data->work_day     = $request->work_day;
        $data->facebook     = $request->facebook;
        $data->twitter      = $request->twitter;
        $data->linkedin     = $request->linkedin;
        $data->googleplus   = $request->googleplus;
        
        //$data->save();  
        
        $usedata             = new Users();
        $usedata->username   = $request->name;
        $usedata->email      = $request->email;
        $usedata->password   = Hash::make($request->password);
        $usedata->group_id   = 3;
        $usedata->created_at = now();
        $token = $usedata->remember_token = Str::random(32);
        $usedata->save();
        
        //$usedata->notify(new arifPasswordResetNotification($token));
        
        return back()->with('message', 'Success..! You are joined.');
        
	}
    public function verefy($token){
        echo $token;
    }
    
    
    
    public function about(){
        $data['title'] = 'About Us';
		$data['about'] = aboutus::where('status', 1)->orderBy('id', 'DESC')->FIRST();
        $data['teams'] = ourteam::where('status', 1)->orderBy('id', 'DESC')->get();
        $data['achivements'] = ourachivement::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.about', $data);
    }
    public function meet_our_team(){
        $data['title'] = 'Meet Our Team';
		$data['teams'] = ourteam::where('status', 1)->orderBy('id', 'DESC')->get();
       
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.ourteam', $data);
    }

    public function faq_s(){
        $data['title'] = 'FAQs';
		$data['faqs'] = faq::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.faq', $data);
    }

    public function testimonial_s(){
        $data['title'] = 'Testimonial';
		$data['testimonials'] = testimonial::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.testimonial', $data);
    }

    public function service(){
        $data['title'] = 'Services';
		$data['services'] = ourservice::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.ourservice', $data);
    }
    
    
    public function singleService($id){
        $service = ourservice::find($id);
        $data['title'] = $service->service_name;
        $data['service'] = $service;
		$data['services'] = ourservice::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.service-details', $data);
    }
    
    public function blog_details(){
        $data['title'] = 'Blog Details';
		$data['blogs'] = blogdetails::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
        return view('layouts.default.template.blogdetails', $data);
    }

    public function single_blog($id){
        $blog = blogdetails::find($id);
        $data['title'] = $blog->title;
        $data['blog'] = $blog;
		$data['blogs'] = blogdetails::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.singleblog', $data);
    }

    public function project_details(){
        $data['title'] = 'Project Details';
		$data['projects'] = projectdetails::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.projectdetails', $data);
    }

    public function single_project($id){
        $project = projectdetails::find($id);
        $data['title'] = $project->title;
        $data['project'] = $project;
		$data['projects'] = projectdetails::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.singleproject', $data);
    }

    public function shop_details(){
        $data['title'] = 'Shop Details';
		$data['shops'] = shopdetails::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.shopdetails', $data);
    }

    public function single_shop($id){
        $shop = shopdetails::find($id);
        $data['title'] = $shop->title;
        $data['shop'] = $shop;
		$data['shops'] = shopdetails::where('status', 1)->orderBy('id', 'DESC')->get();
		$data['setting'] = Websitesettings::where('id', 1)->first();
		return view('layouts.default.template.singleshop', $data);
    }

	public function career(){
	    $data['title'] = 'Career';
	    $data['setting'] = Websitesettings::where('id', 1)->first();
	    $data['circular'] = Vacancyannouncement::orderBy('id', 'DESC')->get();
	    return view('layouts.default.template.career', $data);
	}
	
	public function circular($id=null){
	    $data['title'] = 'Career';
	    $data['setting'] = Websitesettings::where('id', 1)->first();
	    $data['career'] = Vacancyannouncement::where('id', $id)->first();
	    if($data['career']){
	        return view('layouts.default.template.career_view', $data);
	    }else{
	        return view('errors.404');
	    }
	}


}?>