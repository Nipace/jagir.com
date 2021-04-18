<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Company;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;



class RegisterController extends Controller
{
    
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        $role=Role::find(3);
       
        $user = new User;
        $user->name = $data['name'];
        $user->email =$data['email'];
        $user->password = Hash::make($data['password']);
        $user->assignRole($role);
        $user->save();
        return $user;;
    }

    protected function companyRegister(){
        return view('auth.companyregister');
    }
    public function companySave(Request $request)
    {
        $role=Role::find(2);

        $user = new User;
        $user->name = $request->company_name;
        $user->email = $request->email;
        $user->is_admin = "1";
        $user->password = Hash::make($request->password);
        $user->assignRole($role);
        $user->save();
        if(\Auth::attempt(['email' => $request->email, 'password' => $request->password,])){
            $company = new Company;
            $company->user_id = \Auth::user()->id;
            $company->company_name = $request->company_name;
            $company->save();
            return redirect('/home');
        } 
    }
}
