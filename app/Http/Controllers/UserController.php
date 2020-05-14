<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function list()
    {
        try {
            $repo = new RepositoryUser(new User());
            $data = $repo->all();
            if($data->count() === 0){
                throw new \Exception('NOT FOUND DATA');
            }
            $dataResponse = [
                'code' => 0,
                'message' => 'List of Users',
                'data' => $data
            ];
            return response()->json($dataResponse, Response::HTTP_OK);
        }catch (\Exception $exception) {
            $dataResponse = [
                'code' => '001',
                'message' => 'Not Found List of Users',
                'data' => []
            ];
            return response()->json($dataResponse, Response::HTTP_NOT_FOUND);
        }

    }


}
