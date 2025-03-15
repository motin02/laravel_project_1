<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
   //get all users
    public function getUsers(){
        $users = User::all();
        return response()->json($users);
    }

    //get single users
    public function getUser( Request $request, $id){
        $users = User::findOrFail($id);
        return response()->json($users);
    }
    //create user
    public function createUser(Request $request){




      $request()->validate( [
        'role' => 'required',
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6',
      ]);

      $user= User::create( $request->all() );
      return response()->json(['message'=>'User created successfully','data'=>$user]);
    }

     //update user
    public function updateUser(Request $request, $id){
        $request()->validate([
          'role' => 'required',
          'name' => 'required',
          'email' => 'required|email|unique:users,email,'.$id,

        ]);

        $user= User::findOrFail($id);
        $user->update( $request->all() );
        return response()->json(['message'=>'User updated successfully','data'=>$user]);

      }
      //delete user
    public function deleteUser( $id){
        User::destroy($id);
        return response()->json(['message'=>'User deleted successfully', 'data'=>'']);
      }
}
