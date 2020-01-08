<?php

namespace Bulkly\Http\Controllers;

use Illuminate\Http\Request;
use Bulkly\BufferPosting;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.history');
    }

    public function get()
    {
      $posts = BufferPosting::with('groupInfo')->paginate(50);
      return response()->json($posts);
    }


}
