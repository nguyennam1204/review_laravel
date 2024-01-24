<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginadmin()
    {
        return view('loginadmin');
    }
    public function registeradmin()
    {
        return view('loginadmin');
    }
    public function index()
    {
        $movies = movie::all();
        return view('movie/index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|max:255',
            'star' => 'required|alpha_num',
            'long' => 'required|alpha_num',
            'year' => 'required|alpha_num',
        ]);
        Movie::create($validatedData);
        return redirect('/movies')->with('success', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movie::findOrFail($id);
        return view('movie.edit', compact('movies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|max:255',
            'star' => 'required|alpha_num',
            'long' => 'required|alpha_num',
            'year' => 'required|alpha_num',
        ]);
        Movie::where('id', $id)->update($validatedData);
        return redirect('/movies')->with('update', 'Cập Nhật Thành Công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movies = Movie::findOrFail($id);
        // Nếu người dùng xác nhận xóa:
        $movies->delete();
        return redirect('/movies')->with('xoa', 'Xóa thành công!');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
