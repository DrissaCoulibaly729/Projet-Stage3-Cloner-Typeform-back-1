<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function getAllResponses()
    {
        $responses = Response::all();
        return response()->json($responses);
    }

    public function getResponseById($id)
    {
        $response = Response::findOrFail($id);
        return response()->json($response);
    }

    public function createResponse(Request $request)
    {
        $response = Response::create($request->all());
        return response()->json($response, 201);
    }

    public function updateResponse(Request $request, $id)
    {
        $response = Response::findOrFail($id);
        $response->update($request->all());
        return response()->json($response, 200);
    }

    public function deleteResponse($id)
    {
        Response::destroy($id);
        return response()->json(null, 204);
    }
}


