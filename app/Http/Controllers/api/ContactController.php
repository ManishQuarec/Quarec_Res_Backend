<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Contact;
use App\Http\Resources\api\ContactResource;
use App\Http\Requests\api\ContactCreateRequest;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{

  /**
     * @api {post} /api/addcontact Add Contact
     * @apiVersion 1.0.0
     * @apiName  Contact
     * @apiGroup Profile
     * @apiDescription Add Conntact for User.
     *
     *
     * @apiBody {String} name User Name
     * @apiBody {String} subject User Subject
     * @apiBody {String} email User Email ID
     * @apiBody {String} message User message 
     *
     * @apiSuccessExample {json} Success-Response:
     * HTTP/1.1 201 Created
     *   {
     *      "data": {
     *          "id": 1,
     *          "name": "Vijay",
     *          "email": "vijaypratap002@gmail.com",
     *          "subject": "hello vijay",
     *          "message": "hello Vijay, how are you",
     *          "created_at": "2023-04-13T10:54:49.000000Z",
     *          "updated_at": "2023-04-13T11:17:20.000000Z"
     *     },
     *     "message": "Details saved Successfully"
     *   }
     *
     * @apiError (500 Internal Server Error) InternalServerError The server encountered an internal error
     */
    
 public function addcontact(ContactCreateRequest $request)
    {
        // $input=$request->all();
        // $validation=Validator::make($input,[
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'message' => 'required',
        // ]);
        $userDetails = $request->only([
            'name',
            'email', 
            'subject' ,
            'message',
        ]);
       
        $message = trans('Details saved Successfully');

        $user = Contact::create($userDetails);
        $data = new ContactResource($user);
        return response()->json(compact('data', 'message'), Response::HTTP_CREATED);
        // return response()->json(['message'=>"contact save successfully"],Response::HTTP_CREATED);

    }
  
}
