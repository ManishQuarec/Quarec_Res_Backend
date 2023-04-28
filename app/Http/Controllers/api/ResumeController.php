<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Resume;
use App\Http\Resources\api\ResumeResource;
use App\Http\Requests\api\ResumeCreateRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Input;

class ResumeController extends Controller
{


   /**
     * @api {post} /api/addresume Add Resume
     * @apiVersion 1.0.0
     * @apiName  Resume
     * @apiGroup Profile
     * @apiDescription Add Resume for User.
     *
     *
     * @apiBody {String} name User Name
     * @apiBody {String} phone User Phone number
     * @apiBody {String} email User Email ID
     * @apiBody {String} job_role User message 
     * @apiBody {number} year_of_exp User year of experience 
     * @apiBody {number} current_ctc User current ctc 
     * @apiBody {number} exp_ctc User exp ctc 
     * @apiBody {file}   resume User file upload 
     * @apiBody {String} portfolio_url User job portfolio url 
     *
     * @apiSuccessExample {json} Success-Response:
     * HTTP/1.1 201 Created
     *   {
     *      "data": {
     *          "id": 1,
     *          "name": "rfgvrfd",
     *          "email": "vija12@gmail.com",
     *          "phone": "7878787878",
     *          "job_role": "dffdgvrfg",
     *          "year_of_exp": 1,
     *          "current_ctc":1,
     *          "exp_ctc": 3,
     *          "job_sector": "non it",
     *          "resume": "resume/BgpYzkOGNJSBoNJaFAaBiroDrVOwis6TBqr0qL34.pdf",
     *          "created_at": "2023-04-28T09:10:34.000000Z",
     *          "updated_at": "2023-04-28T09:10:34.000000Z"
     *        },
     *      "message": "Details saved Successfully"
     *   }
     *
     * @apiError (500 Internal Server Error) InternalServerError The server encountered an internal error
     */

 public function addResume(ResumeCreateRequest $request)
    {
        $userDetails = $request->only([
            'name',
            'email',
            'phone' ,
            'job_role' ,
            'year_of_exp' ,
            'current_ctc' ,
            'exp_ctc'  ,
            'job_sector' ,
            'portfolio_url'
        ]);
         $userDetails['resume'] = $request->file('resume')->store('resume');

        $email=Resume::where('email',$request->email)->first();

        $message = trans('Details saved Successfully');

      if($email===null){
        $user = Resume::create($userDetails);
        $data = new ResumeResource($user);
        return response()->json(compact('data', 'message'), Response::HTTP_CREATED);
      }
      else{
        $email->update($userDetails);
        $data = new ResumeResource($email);
        return response()->json(compact('data', 'message'), Response::HTTP_CREATED);
      }
    }
  
}
