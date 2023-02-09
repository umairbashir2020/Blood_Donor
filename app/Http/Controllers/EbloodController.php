<?php

namespace App\Http\Controllers;

use App\Mail\feedBackMail;
use App\Models\City;
use App\Models\Blood;
use App\Models\Contact;
use App\Models\Feedback;
use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;
use App\Mail\contactUsMail;

class EbloodController extends Controller
{
    public function about_Us(){
        return view('layoutEblood.pages.about-us');
    }
    public function contactUs(){
        return view('layoutEblood.pages.contactUs');
    }
    public function contactUsPost(Request $request){
        // $contact=new Contact();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_Number' => $request->phone_number,
            'address' => $request->address,
            'message' => $request->message,
        ];

        // dd($contact);
        $user = Contact::create($data);
        

        if($user)
        {
            $email = $user->email;
            Mail::to($email)->send(new contactUsMail($data));
            return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you soon.']);
        }


        // return back();
    }
    public function whyBecomeDonor(){
        return view('layoutEblood.pages.whyBecomeDonor');
    }
    public function becomeADonor(){
        $location = City::get();
        $bloods=Blood::get();
        return view('layoutEblood.pages.becomeADonor',compact('location','bloods'));
    }

    public function donorRegister(Request $request){
        // dd($request);
        $donorRegistered = new Donor();
        // dd($donorRegistered);
        $donorRegistered->donor_name=$request->donor_name;
        $donorRegistered->image=$request->img;
        $donorRegistered->age=$request->age;
        $donorRegistered->phone=$request->phone;
        $donorRegistered->city_id=$request->city;
        $donorRegistered->gender=$request->gender;
        $donorRegistered->blood_group_id=$request->blood_groups;
        // dd($donorRegistered);
        $donorRegistered->save();
        // if($donorRegistered->save()){
        //     $message = ['status' => 'success', 'message' => 'Data saved successfully!'];
        //     // return view('admin.donors.create',compact('donors','message','getBlood','getCities'));
        //     return view('layoutEblood.pages.becomeADonor');
        // }
        return back();
    }

    public function feedBack(){
        return view('eblood');
    }
    public function feedBack_store(Request $request){
        $feedback=new FeedBack();
        $feedback->name=$request->name;
        $feedback->email=$request->email;
        $feedback->phone_number=$request->phone_number;
        $feedback->message=$request->message;
        // $data=array(
        //     'name'=>$request->name,
        //     'message' =>$request->message

        // );
        // Mail::to($request->email)->send(new feedBackMail($data))->with('success','Thankx for feedBack');
        // dd($feedback);
        $feedback->save();
        return redirect()->back()
        ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
        // return back();

    }

    public function details(){
        $peginateShow=Donor::paginate(3);
        $allblood=Blood::get();
        $selectCities=City::get();
        $donorCount=Blood::get();
        $records=Donor::with('city','donor')->get();
        // dd($records);
        return view('eblood',compact('records','donorCount','allblood','selectCities','peginateShow'));

    }
    // footer
    public function newDonor(){
        $newDonor=Donor::get();
        return view('layoutEblood.footer',compact('newDonor'));
    }

    // search-filter
            public function searchedDonorList(Request $request) {
                $searchList=$request->group;
                $users = Donor::where('blood_group_id', 'like', '%'.$searchList.'%')->with('donor')->get();
                                // ->orWhere('blood_groups', 'like', '%'.$searchList.'%');
                return view('layoutEblood.pages.searchedDonorList',compact('users'));
        }

        // foreach ($users as $user) {
        //     echo $user->name;
        // }

}
