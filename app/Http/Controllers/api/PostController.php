<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Post;
use App\Models\User;
use App\Http\Resources\api\PostResource;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * @api {get} /api/getpost  Get Blog
     * @apiVersion 1.0.0
     * @apiName Blog
     * @apiGroup Quarec Resources
     * @apiDescription Get list of all active Blog.
     *
     *
     * @apiSuccessExample {json} Success-Response:
     * HTTP/1.1 200 OK
     * {
     *   "data": [
     *     {
     *       "id": 1,
     *       "title": "The most Popular Business Of the Year",
     *       "description": "<p>csc sd c</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:36px\"><strong><span style=\"background-color:#2ecc71\">dewsfce</span></strong></span></p>",
     *       "profile_image": "/uploads/posts/1681384727.png",
     *       "created_at": "2023-04-13T11:18:47.000000Z",
     *    },
     *     {
     *       "id": 2,
     *       "title": "The most Popular Business Of the Year",
     *       "description": "<p>csc sd c</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:36px\"><strong><span style=\"background-color:#2ecc71\">dewsfce</span></strong></span></p>",
     *       "profile_image": "/uploads/posts/1681384727.png",
     *       "created_at": "2023-04-13T11:18:47.000000Z",
     *    },
     *    {
     *       "id": 3,
     *       "title": "The most Popular Business Of the Year",
     *       "description": "<p>csc sd c</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:36px\"><strong><span style=\"background-color:#2ecc71\">dewsfce</span></strong></span></p>",
     *       "profile_image": "/uploads/posts/1681384727.png",
     *       "created_at": "2023-04-13T11:18:47.000000Z",
     *    },
     *  ]..
     *  }
     *
     * @apiSuccessExample {json} Success-Response:
     * HTTP/1.1 200 OK
     * {
     *      "data":[]
     * }
     *
     * @apiError (500 Internal Server Error) InternalServerError The server encountered an internal error
     */

 public function getCategoryPost()
    {
        $category= Post::all();
        $data = PostResource::collection($category);
         return response()->json(compact('data'), Response::HTTP_OK);

    }

}
