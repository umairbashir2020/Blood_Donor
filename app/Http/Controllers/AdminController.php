<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Admin;
use App\Models\Blood;
use App\Models\Page;
use App\Models\Donor;
use Validator;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller

{
  use AuthenticatesUsers;





  public function store(Request $request) {
    $request->validate([
      'city' => 'required',
    ]);
    $save= new City();
    $save->city = $request->city;
    $save->save();
    $cities = City::get();
    return view('admin.cities.list_cities',compact('cities'));
  }
  public function delete($id){
    $cities= City::find($id);
    $cities->delete();
    return back()->with('danger', 'City  is successfully deleted');
  }
  public function Admin_register (){
    return view('admin.register.admin_register_index');
  }
  public function Admin_index (){

    return view('admin.login.admin_login_index');


  }

  public function admin_login(Request $request)
  {
    return view('admin.login.admin_login_index');

 }
 public function login_store(Request $request){
  $input = $request->all();

    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required',
    ]);




 }



  public function dashboard_index(Request $request){
    $all_donors= Donor::get();
    $all_bloods= Blood::get();
    return view('admin.dashboard.index',compact('all_donors','all_bloods'));
  }
  public function Donor_create(Request $request){
    // relation
    $bloodGroup = Blood::get();
    $donor_cities= City::get();
    return view('admin.donors.create',compact('bloodGroup' ,'donor_cities'));
  }
  public function Donor_store(Request $request){
    $request->validate([
    'donor_name' => 'required',
    'blood_group_id' => 'required',
    'gender' => 'required',
    'email' =>  'required',
    'password' => 'required',
    'age' => 'required',
    'phone' => 'required',
    'city_id' => 'required',
    'image' => 'required',
    ]);
    $fileName='';
    if($request->hasFile('image'))
      {
      $fileName = time() . rand() . '.' . $request->image->extension();
      $request->image->move(public_path('img'), $fileName);
      $fileName='/img/'.$fileName;
    }
    $save_donor = new Donor();
    $save_donor->donor_name=$request->donor_name;
    $save_donor->gender=$request->gender;
    $save_donor->blood_group_id=$request->blood_group_id;
    $save_donor->email=$request->email;
    $save_donor->password= Hash::make('yourpassword');
    $save_donor->age=$request->age;
    $save_donor->phone=$request->phone;
    $save_donor->city_id=$request->city_id;
    $save_donor->image = $fileName;
    $save_donor->save();
    return back()->with('success', 'Donor is successfully added');

  }

  public function Donor_list(){
    // relation

    $donors= Donor::with('city','donor')->get();
    return view('admin.donors.list',compact('donors') );
  }

  public function donor_detils($id){
    $donor = Donor::with('city','donor')->find($id);
    // dd($donor);
    // dd($donors);
    return view('admin.donors.details',compact('donor') );
  }

  public function donor_delete($id){
    $donor_delete = Donor::find($id);
    if($donor_delete)
    {
      if($donor_delete->image !='')
      {
        $image_path=public_path($donor_delete->image );
        if (file_exists($image_path))
        {
          unlink($image_path);
        }
      }
      $donor_delete->delete();
      return back()->with('danger', 'Data is successfully deleted');
    }
    else{
      return back()->with('danger', 'Data not found ');
    }
  }

  public function Donor_edit($id)
  {
    $all_bloods = Blood::get();
    $all_cities=City::get();
    // dd($all_cities);
    $blood_donors = Donor::find($id);
    return view('admin.donors.edit',compact('blood_donors','all_bloods','all_cities'));
  }
  public function donor_update(Request $request,$id)
  {
    $image = $request->file('image');
    // if (isset($request->image)) {

    //   if($request->hasFile('image')) {
    //     $fileName = time() . rand() . '.' . $request->image->extension();
    //     $request->image->move(public_path('img'), $fileName);
    //     $fileName='/img/'.$fileName;
    //   }
      $blood_donors  = new Donor();
      $blood_donors ->exists = true;
      $blood_donors ->id = $id;
      $blood_donors ->donor_name =$request->donor_name;
      $blood_donors ->gender =$request->gender;
      $blood_donors ->blood_group_id =$request->blood_group;
      $blood_donors->email =$request->email;
      $blood_donors ->age =$request->age;
      $blood_donors ->phone =$request->phone;
      $blood_donors ->city_id =$request->city;
      if ($request->file('image')) {
        // unlink($blood_donors->image);
        $image = time() . '-ws' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('img'), $image);
        $image_url = 'img/' . $image;
        $blood_donors->image = $image_url;
    }



    //   $blood_donors->image = $fileName;
    // }
  //  else{
  //     $donor_update = new Donor();
  //     $donor_update->exists = true;
  //     $blood_donors ->id = $id;
  //     $blood_donors ->donor_name =$request->donor_name;
  //     $blood_donors ->gender =$request->gender;
  //     // $blood_donors ->blood_group_id =$request->blood_group_id;
  //     $blood_donors->email =$request->email;
  //     $blood_donors ->age =$request->age;
  //     $blood_donors ->phone =$request->phone;
  //     // $blood_donors ->city_id =$request->city_id;
  //   };

   $blood_donors ->save();
//    return redirect()->route('create',compact('blood_donors'));
   return back()->with('success', 'Data is successfully updated');

  }

  public function create_blood_group(){
    return view('admin.blood_group.create_blood');
  }
  public function  store_blood_group(Request $request){
    $request->validate([
      'blood_group' => 'required',
    ]);
    $save= new Blood();
    $save->blood_group = $request->blood_group;
    $save->save();
    return back()->with('success', 'blood  is successfully added');
    // return view('admin.blood_group.create_blood');
  }

  public function list_blood(){
    $blood_groups = Blood::get();
    return view('admin.blood_group.list_blood' ,compact('blood_groups'));
  }

  public function delete_blood_group($id){
    $blood_groups= Blood::find($id);
    $blood_groups->delete();
    return back()->with('danger', 'Blood group  is successfully deleted');
  }
  public function edit_blood(Request $request, $id){
    $blood_groups = Blood::find($id);
    return view('admin.blood_group.create_blood',compact('blood_groups'));
  }
  public function blood_update(Request $request,$id){
    $blood_groups = new Blood();
    $blood_groups->exists = true;
    $blood_groups->id = $id;
    $blood_groups->blood_group =$request->blood_group;
    $blood_groups->save();
    return back()->with('success', 'City  is successfully Updated');
  }

  public function list_cities(){
    $cities=  City::get();
    return view('admin.cities.list_cities' ,compact('cities'));
  }
  public function create_cities(){
    return view('admin.cities.create_cities');
  }
  public function edit_cities($id){
    $cities = City::find($id);
    return view('admin.cities.create_cities',compact('cities'));
  }
  public function cities_update(Request $request,$id)
  {
    $cities = new City();
    $cities->exists = true;
    $cities->id = $id;
    $cities->city =$request->city;
    $cities->save();
    return back()->with('success', 'City  is successfully Updated');
  }
  // pages
  public function list_pages(){

    $pages=  Page::get();
    return view('admin.pages.list_pages', compact('pages'));
  }
  public function create_pages(){
    return view('admin.pages.create_pages');
  }

  public function edit_pages($id){
    $pages = Page::find($id);
    // dd($pages);
    return view('admin.pages.create_pages' ,compact('pages'));
  }
  public function update_pages(Request $request,$id){
    $pages = new Page();
    $pages->exists = true;
    $pages->id = $id;
    $pages->page_url =$request->page_url;
    $pages->title =$request->title;
    $pages->content =$request->content;
    $pages->save();
    return back()->with('success', 'City  is successfully Updated');

  }
  public function page_store(Request $request){
    $request->validate([
      // 'page_url' => 'required|alpha_dash|regex:/(^[a-zA-Z]+[a-zA-Z0-9\\-]*$)/u',
      'page_url' => 'required',
      'title' => 'required',
      'content' => 'required',
      'status' => 'required',
    ]);
    $save= new Page();
    $save->page_url = $request->page_url;
    $save->title = $request->title;
    $save->content = $request->content;
    $save->status = $request->status;
    $save->save();
    return view('admin.pages.create_pages');
  }
  public function delete_pages($id){
    $pages= Page::find($id);
    $pages->delete();
    return back()->with('danger', 'page  is successfully deleted');
  }
  public function logout()
  {
    auth()->guard('admin')->logout();
    Session::flush();
    Sessioin::put('success','You are logout successfully');
    return redirect(route('adminLogin'));
  }
}
