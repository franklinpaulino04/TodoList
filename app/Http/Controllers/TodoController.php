<?php

namespace App\Http\Controllers;

use App\Models\Todo as TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $data = TodoModel::all();

        return response()->json([
            'result' => 1,
            'data'   => $data,
        ]);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $todoModel          = new TodoModel();
        $todoModel->todo    = $request->todo;
        $response           = $todoModel->save();

        return response()->json([
            'result'        => $response,
            'data'          => $todoModel,
        ]);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $row            = TodoModel::findOrFail($id);
        $row->todo      = $request->todo;
        $row->completed = $request->has('completed');
        $response       = $row->save();

        return response()->json([
            'result'    => $response,
            'data'      => $row,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $row      = TodoModel::findOrFail($id);
        $response = ($row->delete())? true : false;

        return response()->json([
            'result' => $response,
        ]);
    }
}
