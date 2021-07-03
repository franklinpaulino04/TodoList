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
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $todoModel       = new TodoModel();
        $todoModel->todo = $request->todo;
        $todoModel->save();

        return response()->json([
            'result'        => 1,
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
        $row->completed = $request->completed;
        $row->save();

        return response()->json([
            'result'    => 1,
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
        $row = TodoModel::findOrFail($id);
        $row->delete();

        return response()->json([
            'result' => 1,
        ]);
    }
}
