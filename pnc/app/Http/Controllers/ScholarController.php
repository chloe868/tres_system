<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholars;

class ScholarController extends Controller
{
 //CRUD@start
 public function __construct()
 {
     $this->middleware('auth');
 }

 
 public function welcome(){
     return view('welcome');
 }

 public function home()
 {
     $scholar = Scholars::all();
     return view('dashboard',compact('scholar'));
 }

 public function add_view()
 {
     return view('add');
 }

 public function store(Request $request)
 {

      $request->validate([
         'first_name' => 'required',
         'middle_name'=> 'required',
         'last_name'=> 'required',
         'batch'=> 'required',
         'phone_number' => 'required',
         'email' => 'required'
     ]);

     $scholar = [];
     $data = $request->all();
     $scholar['first_name'] = $data['first_name'];
     $scholar['middle_name'] = $data['middle_name'];
     $scholar['last_name'] = $data['last_name'];
     $scholar['batch'] = $data['batch'];
     $scholar['phone_number'] = $data['phone_number'];
     $scholar['email'] = $data['email'];


     $save = Scholars::create($scholar);
     $save->save();

     return redirect()->route('home');
 }

 public function edit($id)
 {
     $scholar = Scholars::find($id);
     //return view('edit',['scholar'=>$scholar]);
     return view('edit',compact('scholar'));
 }

 public function update(Request $request, $id)
 {
    $request->validate([
        'first_name' => 'required',
        'middle_name'=> 'required',
        'last_name'=> 'required',
        'batch'=> 'required',
        'phone_number' => 'required',
        'email' => 'required'
    ]);
    $data = $request->all();
     $scholar = Scholars::find($id);
     $scholar->first_name = $data['fisrt_name'];
     $scholar->midddle_name = $data['midddle_name'];
     $scholar->last_name = $data['last_name'];
     $scholar->batch = $data['batch'];
     $scholar->phone_number = $data['phone_number'];
     $scholar->email = $data['email'];

     $scholar->save();
     return redirect()->route('home');
 }

 public function delete($id){
 
     $scholar = Scholars::find($id);
     $scholar->delete();
      return redirect('/dashboard');
     
     }
 }
//CRUD@end

