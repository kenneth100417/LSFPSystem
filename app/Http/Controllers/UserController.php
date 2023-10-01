<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\User;
use App\Models\Rating;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\VerificationCode;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    public function index(){
       return view('index');
    }

    public function register(){
        return view('register');
    }

    public function forgotPassword(){
        return view('forgot_pass');
    }
    public function resendRecoveryCode($user_id){
        $user = User::where('id', $user_id)->first();
        $verificationCode = $this->generateOtp($user->id);
        $message = "Your recovery code is - ".$verificationCode->otp." Please note that this code is valid only for 10 minutes.";
        //$this->sendSMS(auth()->user()->mobile_number, $message); // Send Recovery SMS
        return redirect('/recovery-verification/'.$user->id)->with('success',  $message);
    }

    public function forgotPasswordVerify(Request $request){

        $validated = $request->validate([
            'email' => ['email', 'required'],
            'mobile_number' => ['numeric', 'min:11', 'required']
        ]);


        if($validated){
            $user = User::where('email', $validated['email'])->where('access', '0')->first();
            if($user){
                if($validated['mobile_number'] === $user->mobile_number){
                    //send verification code to user's mobile number.
                    $verificationCode = $this->generateOtp($user->id);
                    $message = "Your recovery code is - ".$verificationCode->otp." Please note that this code is valid only for 10 minutes.";
                    //$this->sendSMS(auth()->user()->mobile_number, $message); // Send Recovery SMS 
                return redirect('/recovery-verification/'.$user->id)->with('success',  $message);
                }else{
                    return redirect()->back()->withErrors(['error' => 'No User Found. Try another Email or Mobile Number.']);
                }
            }else{
                return redirect()->back()->withErrors(['error' => 'No User Found. Try another Email or Mobile Number.']);
            }
            

        }
    }

    public function recoveryVerification(){
        return view('recovery_verification');
    }
    public function createNewPassword(){
        return view('recovery_change_pass');
    }
    public function setNewPassword(Request $request, $user_id){
        $validated = $request->validate([
            "password"=> 'required|confirmed|min:6'
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::where('id', $user_id)->first();

        if($validated){
            if($user){
                $user->update([
                    "password" => $validated['password']
                ]);

                return redirect()->back()->with('success', "Congratulations! Your account has been recovered.");
            }
        }else{
            return redirect()->back()->with('error', "An error occured. Please try again later.");
        }

    }

    public function verifyRecovery(Request $request, $user_id){
        $request->validate([
            'otp' => 'required'
        ]);

        $user = User::where('id',$user_id)->first();
        #Validation Logic
        $verificationCode   = VerificationCode::where('mobile_number', $user->mobile_number)->where('otp', $request->otp)->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            return redirect()->back()->with('error', 'Incorrect Recovery Code.');
        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
            return redirect('/recovery-verification/'.$user->id)->with('error', 'Your Recovery Code has been expired');
        }else{
            return redirect('/create-new-password/'.$user->id);
        }
        
        $verificationCode->update([
            'expire_at' => Carbon::now()
        ]);
    }

    public function update(Request $request){
    
        $validated = $request->validate([
            "firstname" => ['required'],
            "lastname" => ['required'],
            "birthdate" => ['required'],
            "address" => ['required']
        ]);

        if($request->hasFile('profile_pic')){
            $filename = time().$request->file('profile_pic')->getClientOriginalName();
            $path = $request->file('profile_pic')->storeAs('images', $filename, 'public'); 
            $photo = '/storage/'.$path;
        }else{
            $photo = auth()->user()->photo;
        }

        $user = User::findOrFail(Auth()->user()->id);
        if($user){
            $user->update([
                "firstname" => $validated['firstname'],
                "middlename" => request('middlename'),
                "lastname" => $validated['lastname'],
                "birthdate" => $validated['birthdate'],
                "address" => $validated['address'],
                "photo" => $photo
            ]);
        }
        
        return back()->with('success', 'Your profile has been Updated!');
    }

    public function adminUpdate(Request $request){
    
        $validated = $request->validate([
            "firstname" => ['required'],
            "lastname" => ['required'],
            "birthdate" => ['required'],
            "address" => ['required']
        ]);

        if($request->hasFile('profile_pic')){
            $filename = time().$request->file('profile_pic')->getClientOriginalName();
            $path = $request->file('profile_pic')->storeAs('images', $filename, 'public'); 
            $photo = '/storage/'.$path;
        }else{
            $photo = auth()->user()->photo;
        }

        $user = User::findOrFail(Auth()->user()->id);
        if($user){
            $user->update([
                "firstname" => $validated['firstname'],
                "middlename" => request('middlename'),
                "lastname" => $validated['lastname'],
                "birthdate" => $validated['birthdate'],
                "address" => $validated['address'],
                "photo" => $photo
            ]);
        }
        
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

    public function user_products(){
        return view('pages.user_products');
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
    public function admin_generate_report(){
        return view('pages.admin_generate_report');
    }

    //open pdf
    public function openPDF(){
        $pdf = Pdf::loadView('admin.reports.reports');
        return $pdf->stream();
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

    public function resendOtp($user_id){
        $user = User::where('id', $user_id)->first();
        $verificationCode = $this->generateOtp($user->id);
        $message = "Welcome to Louella's Sweet Food Products ".$user->firstname."!"." Your OTP is - ".$verificationCode->otp.". Please note that this code is valid only for 10 minutes.";
        $this->sendSMS(auth()->user()->mobile_number, $message); // Send OTP SMS 
        //return redirect('/otp/verify/'.$user->id)->with('success',  $message);
    }

    public function add_user(Request $request){
        $validated = $request->validate([
            "firstname" => ['required'],
            "lastname" => ['required'],
            "birthdate" => ['required'],
            "address" => ['required'],
            "mobile_number" => ['required','min:11','numeric',Rule::unique('users', 'mobile_number')],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password"=> 'required|confirmed|min:6',
            "access" => ['required'],
            "photo" => ['required']
        ]);

        $validated['password'] = Hash::make($validated['password']); //pwede bycrypt instead hash:make
        
       

        $user = User::create($validated);
       
        $verificationCode = $this->generateOtp($user->id);
        $message = "Welcome to Louella's Sweet Food Products ".$user->firstname."!"." Your OTP is - ".$verificationCode->otp.". Please note that this code is valid only for 10 minutes.";
        //$this->sendSMS(auth()->user()->mobile_number, $message); // Send OTP SMS 
        return redirect('/otp/verify/'.$user->id)->with('success',  $message);

    }

    public function login(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password"=> 'required'
        ]);

        $user = User::where('email',$validated['email'])->first();
        
        if($validated){
            if($user){
                if($user->status == 0){
                    return back()->withErrors(['error' => "You are not allowed to Log in. For further information, please contact Louella's Sweet Food Products Administrator."]);
                }
                if(Hash::check($validated['password'], $user->password)){
                    if($user->access == "0"){
                        
                        $verificationCode = $this->generateOtp($user->id);
                        $message = "Welcome back ".$user->firstname."!"." Your OTP is - ".$verificationCode->otp." Please note that this code is valid only for 10 minutes.";
                        //$this->sendSMS($user->mobile_number, $message); //otp 
                        return redirect('/otp/verify/'.$user->id)->with('success',  $message);
                    }else{
                        auth()->login($user);
                        return redirect('admin_dashboard')->with('message', 'Welcome back, Admin!');
                    }
                }return back()->withErrors(['error' => 'Email and Password does not match.']);
            }return back()->withErrors(['error' => 'Email and Password does not match.']);
        }
        return back()->withErrors(['error' => 'An error occured.']);
    }


    // Generate OTP
    public function generateOtp($user_id)
    {
        $user = User::where('id',$user_id)->first();
        # User Does not Have Any Existing OTP
        $verificationCode = VerificationCode::where('mobile_number', $user->mobile_number)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }

        // Create a New OTP
        return VerificationCode::create([
            'mobile_number' => $user->mobile_number,
            'otp' => rand(123456, 999999),
            'expire_at' => Carbon::now()->addMinutes(10)
        ]);
    }

    public function verifyOtp(Request $request, $user_id)
    {
        #Validation
        $request->validate([
            'otp' => 'required'
        ]);
        $user = User::where('id',$user_id)->first();
        #Validation Logic
        $verificationCode   = VerificationCode::where('mobile_number', $user->mobile_number)->where('otp', $request->otp)->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            return redirect()->back()->with('error', 'Incorrect OTP.');
        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
            return redirect('/otp/verify/'.$user->id)->with('error', 'Your OTP has been expired');
        }

        if($user->access == "0"){
            $name = $user->firstname;
            auth()->login($user);
            return redirect('/user_dashboard')->with('message', 'Thanks for choosing us, '.$name.'! ');
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
        // echo $output;
    }


    public function changePass(Request $request){
        $validated = $request->validate([
            'current_password' => 'required|min:6',
            'password' => 'required|confirmed|min:6',
            'email' => ['required', 'email'],
        ]);

        $user = User::where('email', $validated['email'])->where('id', auth()->user()->id)->first();
        
        $currentPasswordStatus = Hash::check($validated['current_password'], $user->password);

        if($currentPasswordStatus){
           dd('true');
           $user->update([
                'password' => Hash::make($validated['password']),
            ]);

            return redirect()->back()->with('changePassSuccess','Your password has been updated.');

        }else{
            //dd('false');
            return redirect()->back()->with('changePassError','Current Password does not match with Old Password');
        }

        // 
        
    }

    public function adminChangePass(Request $request){

        $validated = $request->validate([
            'current_password' => 'required|min:6',
            'password' => 'required|confirmed|min:6',
            'email' => ['required', 'email'],
        ]);

        
        $user = User::where('email', $validated['email'])->where('id', auth()->user()->id)->first();
        
        $currentPasswordStatus = Hash::check($validated['current_password'], $user->password);

        if($currentPasswordStatus){
           
           $user->update([
                'password' => Hash::make($validated['password']),
            ]);

            return redirect()->back()->with('changePassSuccess','Your password has been updated.');

        }else{
            return redirect()->back()->with('changePassError','Current Password does not match with Old Password');
        }

        // 
        
    }

    //addAdmin
    public function addAdmin(Request $request){
        $validated = $request->validate([
            "firstname" => ['required'],
            "middlename" => ['required'],
            "lastname" => ['required'],
            "birthdate" => ['required'],
            "address" => ['required'],
            "mobile_number" => ['required','min:11','numeric',Rule::unique('users', 'mobile_number')],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password"=> 'required|confirmed|min:6',
        ]);

        if($request->hasFile('profile_pic')){
            $filename = time().$request->file('profile_pic')->getClientOriginalName();
            $path = $request->file('profile_pic')->storeAs('images', $filename, 'public'); 
            $photo = '/storage/'.$path;
        }else{
            $photo = "/img/Profile_pic/profile_temp.png";
        }

        $validated['password'] = Hash::make($validated['password']); //pwede bycrypt instead hash:make

        if($validated){
           User::create([
                "firstname" => $validated['firstname'],
                "middlename" => $validated['middlename'],
                "lastname" => $validated['lastname'],
                "birthdate" => $validated['birthdate'],
                "address" => $validated['address'],
                "mobile_number" => $validated['mobile_number'],
                "email" => $validated['email'],
                "password" => $validated['password'],
                "access" => '1',
                "photo" => $photo
            ]);
                return redirect()->back()->with('addAdminSuccess','Admin Added!');
        }else{
            return redirect()->back()->with('addAdminError','Failed to add admin account.');
        }
    }
    



    // /////////////////////////// Product View  /////////////////////////

    public function productView($category_slug, $product_slug){

        $category = Category::where('slug',$category_slug)->first();
        if($category){

            $product = $category->products()->where('slug',$product_slug)->where('status', '1')->first();
            $ratings = Rating::where('product_id', $product->id)->get();
            $ratings_sum = Rating::where('product_id', $product->id)->sum('star_rating');
            $reviews = Rating::where('product_id', $product->id)->where('user_id','!=', Auth::user()->id)->get();
            $ratingcount = $ratings->count();
            if($ratings->count() == 0){
                $ratingval = 0;
            }else{
                $ratingval = $ratings_sum/$ratingcount;
            }

            if($product){
                return view('user.product.view',compact('category','product','ratingval','ratingcount','reviews'));
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
        
    }

    //view product reviews

    public function viewProductReviews($category_slug, $product_slug){
        $category = Category::where('slug',$category_slug)->first();
        if($category){

            $product = $category->products()->where('slug',$product_slug)->where('status', '1')->first();
            $ratings = Rating::where('product_id', $product->id)->get();
            $ratings_sum = Rating::where('product_id', $product->id)->sum('star_rating');
            $reviews = Rating::where('product_id', $product->id)->where('user_id','!=', Auth::user()->id)->get();
            $ratingcount = $ratings->count();
            if($ratings->count() == 0){
                $ratingval = 0;
            }else{
                $ratingval = $ratings_sum/$ratingcount;
            }

            if($product){
                return view('pages.admin-product-info-pages.product_reviews',compact('category','product','ratingval','ratingcount','reviews'));
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }

    //cart
    public function cart(){
        
        return view('pages.user_cart');
    }

    //notifications
    public function notifications(){
        
        return view('pages.user_notifs');
    }

    //buy now
    public function buyNow($product_id){
        $product = Product::where('id',$product_id)->where('status', '1')->first();
        if(Auth::check()){
            
            if(Cart::where('user_id', auth()->user()->id)->where('product_id', $product_id)->exists()){
                $this->dispatchBrowserEvent('exists');
            }else{
                if(Product::where('id',$product_id)->where('status', '1')->exists()){
                    $inStock = $product->quantity - $product->quantity_sold;
                    if($inStock > 0 ){

                        Cart::where('user_id',auth()->user()->id)->delete();
                    
                        Cart::create([
                            'user_id' => auth()->user()->id,
                            'product_id' => $product_id,
                            'quantity' => 1
                        ]);
                        
                        return redirect('/cart');
                            
                        
                    }else{
                        return redirect()->back()->with('outOfStock','Out of Stock');
                    }
                }else{
                    return redirect()->back()->with('notFound','Not Found.');
                }
                
            }
        }
    }

   

}
