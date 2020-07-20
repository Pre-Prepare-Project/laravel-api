<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Resources\UserCollection;
use App\Http\Resources\Users as UserResource;

class UserController extends Controller {

public $successStatus = 200;

//      Register api { api/register }
    public function register(Request $request)
    {
//         dd($request->all());
        $validator = Validator::make($request->all(), [
                        'first_name' => 'required',
                        'email' => 'required|email',
                        'password' => 'required',
                        'c_password' => 'required|same:password',
                    ]);
        if($validator->fails()){
            return response()->json(
            ['error'=>$validator->errors()], 401
            );
        }
        $input=$request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('authentication')-> accessToken;
        $success['first_name'] =  $user->first_name;
        return response()->json($success, $this-> successStatus);
    }

    // login Api {api/login}
    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password'=>request('password'), 'is_active' => 1])){
            $user = Auth::user();
            $results['token'] =  $user->createToken('authentication')-> accessToken;
            $results['user']=$user;
            return response()->json($results, $this-> successStatus);
        }else{
            return response()->json(['detail'=>'Incorrect Email and password.'], 401);
         }
    }

    // user Details Api {api/details}

    public function details(){
//         return new UserCollection(auth()->user());
        $user=auth()->user();
        return new UserCollection($user);
//         return auth()->user();
//         return response()->json($user, $this->successStatus);
    }
    // userList {api/users}

    public function userList(Request $request){
        $perPage = $request->input('per_page');
        $users =User::paginate($perPage);
        return new UserCollection($users);
//        return UserResource::collection($users);


//         $users->makeHidden(['created_at','updated_at','email_verified_at']);
//         return new UserCollection($users);
//         $users=User::paginate(1); //pagination
//         $users->setCollection($users->getCollection()->makeHidden(['created_at','updated_at']));
//         return response()->json($users, $this->successStatus);
    }

    // User Instance
    public function userInstance($id){
            $result = User::find($id);
            $abs = new UserResource($result);
            return response()->json($abs,300);

//         return new UserCollection(User::where('id',$id)->get());
//         $user = User::where('id',$id)->get();
//         return new UserResource($user);
//         $result=User::find($id);
//         if ($result === null) {
//            $result['detail']="Not found.";
//             return response()->json($result, $this->successStatus);
//         }
//         return response()->json($result, $this->successStatus);

    }

    // logout Api {api/logout}

    public function logout(){
        if (Auth::check()) {
            $user = Auth::user()->token();
            $user->revoke();
            $results['detail']="Successfully logout";
             return response()->json($results, $this-> successStatus);
        }
    }

    // forgotPassword api {api/forgotPassword request sent}
    public function forgotPassword(Request $request){
         $validator = Validator::make($request->all(), ['email' => 'required|email']);

        if($validator->fails()){
            return response()->json(
            ['error'=>$validator->errors()], 401
            );
        }
        $input=$request->all();
        $user=User::where('email', $input['email'])->first();
        if($user && $user->is_active){
            $results['token'] =  $user->createToken('authentication')-> accessToken;
            $results['user']=$user;
             return response()->json($results);
        }else{
        echo 'authentication';
        }

       echo $input['email'];

    }
    // changePassword api {api/changePassword}
    public function changePassword(Request $request) {
//         dd($request->all());
        $validator = Validator::make($request->all(), [
                                    'new_password' => 'required',
                                    'c_password' => 'required|same:new_password',]);
        if($validator->fails()){
                return response()->json(
                ['error'=>$validator->errors()], 401
                );
        }
        $input = $request->all();
        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($input['new_password']);
        $user->update();

        $success['token'] =  $user->createToken('authentication')-> accessToken;
        $success['user']=$user;
        return response()->json($success, $this-> successStatus);

    }




}
