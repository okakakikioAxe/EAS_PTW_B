<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $id = session()->get('id');
        $user = User::where('id',$id)->get();
        return view ('profilUser', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;
        $email = $request->email;
        $password = $request->password;
        $password_confirmed = $request->password_confirmed;

        $arr = explode(' ',trim($nama));
        $username = $arr[0].rand(1,100);

        function cekUsername($usernamenya, $arr){
            $Username = User::where('username', $usernamenya)->first();
            if ($Username === null) {
                return $usernamenya;
            }
            else{
                $arr = explode(' ',trim($nama));
                $username = $arr[0].rand(1,100);
                cekUsername($username);
            }
        }

        cekUsername($username, $arr);
        

        $user = User::where('email', $email)->first();
        if ($user === null) {
            if($password == $password_confirmed){
                $User = new User;
                $User->nama_user = $nama;
                $User->username = $username;
                $User->email = $email;
                $User->password = bcrypt($password);
                $User->level = 'pembeli';
                $User->save();

                request()->validate([
                    'email' => 'required',
                    'password' => 'required',
                    ]);
            
                    $credentials = $request->only('email', 'password');
            
                    if (Auth::attempt($credentials)) {
            
                        $user = Auth::user();
                        if ($user->level == 'admin') {
                            return redirect()->intended('/admin');
                        } elseif ($user->level == 'pembeli') {
                            return redirect()->intended('/home');
                        }
                        return redirect()->intended('/form/login');
                    }
                    return redirect('/form/login');
            }
        }
        else{
            return back()->withInput();
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = session()->get('id');
        $user = User::where('id',$id)->get();
        return view ('editProfilUser',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nama = $request->nama;
        $email = $request->email;
        $no_telepon = $request->no_telepon;
        $kelamin = $request->kelamin;
        $tanggal_lahir = $request->tanggal_lahir;
        $tanggal_lahir = str_replace('/', '-', $tanggal_lahir);
        $alamat = $request->alamat;
        $pw1 = $request->pw1;
        $pw2 = $request->pw2;
        
        if($pw1 == $pw2){
            $user = User::where('id',$id)->first();  //->update([ 'nama_user' => $nama, 'email' => $email, 'no_telepon' => $no_telepon, 'kelamin' => $kelamin, 'tanggal_lahir' => $tanggal_lahir]);
            $user->nama_user = $nama;
            $user->email = $email;
            $user->no_telepon = $no_telepon;
            $user->kelamin = $kelamin;
            $user->tanggal_lahir = $tanggal_lahir;
            $user->alamat = $alamat;
            $user->password = bcrypt($pw1);
            $user->save();
            return redirect()->route('user.index');
        }
        else{
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    
}
