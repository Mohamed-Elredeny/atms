<?php

namespace App\Http\Controllers\Users;
use Kreait\Firebase\Factory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $database;
    private $newPostKey;

    function __construct() {
        $factory = (new Factory())
            ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
        $database = $factory->createDatabase();
        $newPostKey = $database->getReference('Users')->push()->getKey();
    }

    public function login(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:3',
        ]);

        $exist = 0;
        $users = 0;
        $isadmin = 0;
        $isactive = 0;
        $user_id = '';
        $email = $req->input('email');
        $password = $req->input('password');


        if ($email == Null || $password == Null) {
            echo 'لا يمكنك ترك الحقول فارغة<br>';
        } else {

            function SelectWithNode($tablename, $state)
            {
                $factory = (new Factory())
                    ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
                $database = $factory->createDatabase();
                $result = $database->getReference($tablename . '/' . $state)->getSnapshot()->getValue();
                return $result;
            }

            $usersTable = SelectWithNode('Users', 'accepted');
            foreach ($usersTable as $u) {
                if (@$u['email'] == $email) {
                    if ($u['isAdmin'] == 1) {
                        $isadmin = 1;
                        $_SESSION['isadmin'] = $isadmin;
                    }
                    $user_id = $u['userId'];
                    $_SESSION['userId'] = $user_id;
                    $users++;

                }
            }

            if ($users > 0) {
                if ($usersTable[$user_id]['password'] == $password) {
                    $exist = 1;
                    $isactive = 1;
                    $_SESSION['isactive'] = $isactive;
                    $_SESSION['userId'] = $user_id;
                }
            }

            if ($exist == 1) {
                echo "
                    <script>
                        alert('Login successfully completed');
                   </script>
                   ";
                return redirect('cpanel');
            }
        }

    }

    public function viewEmployeesWithState($type,$state){
        $factory = (new Factory())
            ->withDatabaseUri('https://petrolstation-a32b4.firebaseio.com/');
        $database = $factory->createDatabase();
        $result = $database->getReference('Users'.'/'.$type.'/'.$state)->getSnapshot()->getValue();
        return view('Admin.employees.employeesRequests',compact('result'));
    }

    public function viewAddUsersPage(){
        return view('Admin.employees.create');
    }

    public function addUsers(Request $req){
        $validatedData = $req->validate([
           /* 'email' => 'required|email:rfc,dns',
            'password' => 'required|min:3',*/
        ]);

        $name = $req->input('name');
        $phone = intval($req->input('phone'));
        $email= $req->input('email');
        $password = $req->input('password');
        $address = intval($req->input('address'));
        $role = $req->input('role');
        $image =$req->input('image');
        $department =$req->input('department');
        $salary =2000;
        $userType = $req->input('userType');
        //$userState = intval($req->input('userState'));
        //2 pending
        //1 accepted
        //0 refused
        $userState=2;

        $userData = [
            'name' => $name,
            'email' => $email,
            'password'=>$password,
            'phone' => $phone,
            'image' => $image,
            'department'=>$department,
            'role'=>$role,
            'salary'=>$salary,
            'userId' =>$this->newPostKey,
            'address'=>$address,
            'state'=>$userState
        ];

        $Register= [
            'Users/'.$userType=>$userData,
        ];

        $addedDocRef= $this->database->getReference()->update($Register);
        return redirect()->back();

    }

}
