<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\Admin;
use App\Http\Requests;
use Illuminate\Support\MessageBag;
class AdminLoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:admin');
  }
  public function showLoginForm()
  {
    return view('auth.admin-login');
  }
  public function login(Request $request)
  {

    $rules = [
      'email' =>'required|email',
      'password' => 'required|min:6'
    ];
    $messages = [
      'email.required' => 'Email là trường bắt buộc',
      'email.email' => 'Email không đúng định dạng',
      'password.required' => 'Mật khẩu là trường bắt buộc',
      'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
    ];
    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator)->withInput();
    } else{

      $email = $request->email;
      $password = $request->password;

      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('admin.dashboard'));     
      } else {
        $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
        return redirect()->back()->withInput()->withErrors($errors);

      }
    }
  }

     public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}