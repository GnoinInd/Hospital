<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Doctor;
use App\Models\Leave;
use App\Models\Patient;
use App\Models\Gallery;
use DB;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    


    public function index()
    {
        return view('index');
    }



    public function register()
    {
        if(Auth::user())
        {
            return redirect()->route('patient.list');
        }
       return view('register'); 
    }


    public function storeRegister(request $request)
    {
        $register = new User;
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = $request->password;
        $register->save();
        return redirect()->back()->with('success','User Registration done successfully')->withInput();
        
    }


    public function login()
    {
        if(Auth::user())
        {
          return redirect()->route('patient.list');
        }
        return view('login');
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email','password');
       
        if(Auth::attempt($credentials))
        {
           return redirect()->route('patient.list');
        }
        else
        {
           return redirect()->back()->with('error','email or password is incorrect.');
        }


    }


    public function list(Request $request)
    {
     if (!Auth::check()) 
     {
         return redirect()->route('login');
     }
     return view('list');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
       
    }


    public function doctorRegister()
    {
        return view('doctorRegister');
    }



    public function doctorLogin()
    {
        return view('doctorLogin');
    }

    public function doctorRegisterStore(Request $request)
    {
        $doctor = new Doctor;
        $doctor->name = $request->name;
        $doctor->specialist = $request->specialist;
        $doctor->email = $request->email;
        $doctor->mobile_no = $request->mobile;
        $doctor->password = Hash::make($request->password);
        $doctor->save();
        return redirect()->back()->with('success','Doctor registration successfully');
    }


    public function patientForm()
    {
        $doctor = Doctor::all();
        return view('patientForm')->with('doctor',$doctor);
    }



    public function formSubmit(Request $request)
    {
     $patient = new Patient;
     $patient->name = $request->name;
     $patient->mobile_no = $request->phone;
     $patient->email = $request->email;
     $patient->refered_by = $request->ref;
     $patient->gender = $request->gender;
     $patient->desc = $request->desc;
     $patient->shift = $request->shift;
     $patient->date = $request->date;
     $patient->save();
     return redirect()->back()->with('success','Form submitted successfully');
    }


    public function doctorLoginCheck(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('doctor')->attempt($credentials)) {
           
            $authenticatedDoc = Auth::guard('doctor')->user();
            $doctorId = $authenticatedDoc->id;
            return redirect()->route('doctor.unavailable', ['id' => $doctorId]);
        } else {
            return redirect()
                ->back()
                ->with('error', 'Email or password is incorrect')
                ->withInput($request->only('email'));
        }

    }


    public function doctorForm($id)
    {
      $doctor = Doctor::find($id);
      $id = $doctor->id ?? null;
      $name = $doctor->name ?? null;
      return view('doctor-availability',['id' =>$id,'name' => $name]);
      
    }



    public function docLogout(request $request)
    {
        Auth::guard('doctor')->logout();
       
        return redirect()->route('doctor.login');
    }


    public function doctorapply(Request $request)
    {
        try
        {
            DB::beginTransaction();
            $apply = new Leave;
            $apply->name = $request->name;
            $apply->doctor_id = $request->id;
            $apply->date = $request->date;
            $apply->shift = $request->shift;
            $apply->save();
            DB::commit();
            return redirect()->back()->with('success','data submitted successfully')->withInput();   
        }
        catch(\Exception $e)
        {
            DB::rollback();
            \Log::error('database error:' .$e->getMessage());
            return redirect()->back()->with('error','an error occur while submitting data');
           
        }
       
       
     }



     public function showImage()
     {
        if (!Auth::check())
        {
            return redirect()->route('login');
        }
        $images = Gallery::all();
         return view('gallery',compact('images'));
     }


     public function uploadImages(Request $request)
     {
         $request->validate([
             'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:3050',
         ]);
     
         if ($request->hasFile('images')) {
             foreach ($request->file('images') as $image) {
                 $imageName = time().'.'.$image->getClientOriginalExtension();
                 $image->move(public_path('images'), $imageName);
     
                 $newImage = new Gallery;
                 $newImage->image_name = $imageName;
                 $newImage->path = 'images/'.$imageName;
                 $newImage->save();
             }
     
             return redirect()->route('images')->with('success', 'Images inserted successfully');
         }
     
         return back()->with('error', 'Error in image uploading');
     }
     


    //  public function deleteImage($id)
    //  {
    //      $image = Gallery::find($id);
     
    //      if ($image) {
    //          $imagePath = 'public/' . $image->image_path;
    //          Storage::delete($imagePath);
    //          $image->delete();
     
    //          return redirect()->route('images')->with('success', 'Image deleted successfully');
    //      } else {
    //          return redirect()->route('images')->with('error', 'Image not found');
    //      }
    //  }




    // public function deleteSelectedImages(request $request)
    // {
    //     $selectedImages = $request->input('selected_images',[]);
    //     if(count($selectedImages) > 0)
    //     {
    //         foreach($selectedImages as $imageId)
    //         {
    //             $image = Gallery::find($imageId);
    //             if ($image) {
    //                 Storage::delete('public/images/' . $image->name); 
    //                 $image->delete();
    //             }
    //         }

    //         return redirect()->back()->with('success','Image deleted successfully');
    //     }
    // }
     




    public function deleteSelectedImages(Request $request)
    {
        $selectedImages = $request->input('selected_images', []);
    
        if (count($selectedImages) > 0) {
            foreach ($selectedImages as $imageId) {
                $image = Gallery::find($imageId);
    
                if ($image) {
                    $filePath = public_path('images/' . $image->image_name);
    
                    if (File::exists($filePath)) {
                        File::delete($filePath);
                    }
    
                    $image->delete();
                }
            }
    
            return redirect()->back()->with('success', 'Images deleted successfully');
        }
    
        return redirect()->back()->with('error', 'No images selected for deletion');
    }
    


     

    




}
