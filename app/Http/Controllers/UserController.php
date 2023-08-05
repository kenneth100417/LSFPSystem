<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
       return view('index');
    }

    public function register(){
        return view('register');
    }

    public function update(Request $request){
        $user = auth()->user();
        $user->firstname = request('firstname');
        $user->middlename = request('middlename');
        $user->lastname = request('lastname');
        $user->birthdate = request('birthdate');
        $user->address = request('address');

        // profile pic
        $requestData = $request->all();
        $filename = time().$request->file('profile_pic')->getClientOriginalName();
        $path = $request->file('profile_pic')->storeAs('images', $filename, 'public'); 
        
        $user->photo = '/storage/'.$path;

        $user->save();
        
        return back()->with('success', 'Your profile has been Updated!');
    }

    public function verify(){
        return view('otp_verification');
    }
    
    public function user_dashboard(){
        return view('pages.user_dashboard');
    }
    public function user_orders(){
        return view('pages.user-order-pages.pending_orders');
    }
    public function user_toreceive(){
        return view('pages.user-order-pages.toreceive_orders');
    }
    public function user_completed(){
        return view('pages.user-order-pages.completed_orders');
    }
    public function user_cancelled(){
        return view('pages.user-order-pages.cancelled_orders');
    }

    public function user_profile(){
        return view('pages.user_profile');
    }

    // admin pages
    public function admin_dashboard(){
        return view('pages.admin_dashboard');
    }
    public function admin_product_info(){
        return view('pages.admin-product-info-pages.admin_product_info_inventory');
    }
    public function admin_orders(){
        return view('pages.admin-orders-pages.admin_orders_orderrequests');
    }
    public function admin_manage_account(){
        return view('pages.admin_manage_account');
    }
    public function admin_users(){
        return view('pages.admin_users');
    }
    public function admin_add_sales(){
        return view('pages.admin_add_sales');
    }


    // admin product info pages
    public function admin_product_info_inventory(){
        return view('pages.admin-product-info-pages.admin_product_info_inventory');
    }

    public function admin_product_info_list(){
        $products = Product::where('status','1')->get();
        $categories = Category::all();
        return view('pages.admin-product-info-pages.admin_product_info_list', compact('products','categories'));
    }

    public function admin_product_info_reviews(){
        return view('pages.admin-product-info-pages.admin_product_info_reviews');
    }

    public function admin_product_info_archived(){
        return view('pages.admin-product-info-pages.admin_product_info_archived');
    }

    
    //  admin orders pages
    public function admin_orders_orderrequests(){
        return view('pages.admin-orders-pages.admin_orders_orderrequests');
    }
    public function admin_orders_inprocess(){
        return view('pages.admin-orders-pages.admin_orders_inprocess');
    }
    public function admin_orders_completed(){
        return view('pages.admin-orders-pages.admin_orders_completed');
    }
    public function admin_orders_cancelled(){
        return view('pages.admin-orders-pages.admin_orders_cancelled');
    }



    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function otp_verify(){
        return view('otp_verification');
    }

    public function resendOtp(){
        $verificationCode = $this->generateOtp();
        $message = "Welcome to Louella's Sweet Food Products ".auth()->user()->firstname."!"." Your OTP Code is - ".$verificationCode->otp.". Please note that this code is valid only for 10 minutes.";
        // $this->sendSMS(auth()->user()->mobile_number, $message); // Send OTP SMS
        return redirect()->route('otp.verify')->with('success',  $message);
    }

    public function add_user(Request $request){
        $validated = $request->validate([
            "firstname" => ['required'],
            "lastname" => ['required'],
            "birthdate" => ['required'],
            "address" => ['required'],
            "mobile_number" => ['required'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password"=> 'required|confirmed|min:6',
            "access" => ['required'],
            "photo" => ['required']
        ]);

        $validated['password'] = Hash::make($validated['password']); //pwede bycrypt instead hash:make
        
       

        $user = User::create($validated);

        auth()->login($user);

        $verificationCode = $this->generateOtp();
        $message = "Welcome to Louella's Sweet Food Products ".auth()->user()->firstname."!"." Your OTP Code is - ".$verificationCode->otp.". Please note that this code is valid only for 10 minutes.";
        // $this->sendSMS(auth()->user()->mobile_number, $message); // Send OTP SMS
        return redirect()->route('otp.verify')->with('success',  $message); 
    }

    public function login(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password"=> 'required'
        ]);

        if(auth()->attempt($validated)){
            

            if(auth()->user()->access == "0"){
                $request->session()->regenerate();

                $name = auth()->user()->firstname;

                $verificationCode = $this->generateOtp();
                $message = "Welcome back ".auth()->user()->firstname."!"." Your OTP Code is - ".$verificationCode->otp." Please note that this code is valid only for 10 minutes.";
                // $this->sendSMS(auth()->user()->mobile_number, $message); //Send OTP SMS
                return redirect()->route('otp.verify')->with('success',  $message); 
            }else{
                $request->session()->regenerate();

                $name = auth()->user()->firstname;
                return redirect('admin_dashboard')->with('message', 'Welcome back, Admin!');
            }
        
        }

        return back()->withErrors(['email' => 'Email and Password does not match.'])->onlyInput('email');
    }


    // Generate OTP
    public function generateOtp()
    {

        # User Does not Have Any Existing OTP
        $verificationCode = VerificationCode::where('mobile_number', auth()->user()->mobile_number)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }

        // Create a New OTP
        return VerificationCode::create([
            'mobile_number' => auth()->user()->mobile_number,
            'otp' => rand(123456, 999999),
            'expire_at' => Carbon::now()->addMinutes(10)
        ]);
    }

    public function verifyOtp(Request $request)
    {
        #Validation
        $request->validate([
            'otp' => 'required'
        ]);

        #Validation Logic
        $verificationCode   = VerificationCode::where('mobile_number', auth()->user()->mobile_number)->where('otp', $request->otp)->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            return redirect()->back()->with('error', 'Your OTP is not correct');
        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
            return redirect()->route('otp.login')->with('error', 'Your OTP has been expired');
        }


        if(auth()->user()->access == "0"){
            $name = auth()->user()->firstname;
            return redirect('/user_dashboard')->with('message', 'Thanks for choosing us , '.$name.'! ');
        }else{
            return redirect('/admin_dashboard')->with('message', 'Welcome Admin!');
        }

        $verificationCode->update([
            'expire_at' => Carbon::now()
        ]);

    }


    public function sendSMS($mobile_number, $message){
        $ch = curl_init();
        $parameters = array(
            'apikey' => '1ee8625dd653bdf085653d29c9b69b20', //Your API KEY acd2a93b808ee8f8e725ceba1f84ff3b - old
            'number' => $mobile_number,
            'message' => $message,
            'sendername' => "SEMAPHORE"
        );
        curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
        curl_setopt( $ch, CURLOPT_POST, 1 );

        //Send the parameters set above with the request
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

        // Receive response from server
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $output = curl_exec( $ch );
        curl_close ($ch);

        //Show the server response
        echo $output;
    }

}
