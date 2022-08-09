<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search =  $request->input('term');
        if ($search != "") {
            $users = User::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
                ->paginate(2);
            $users->appends(['term' => $search]);
            return view('admin.users.index', compact('users'))->with('count', (request()->input('page', 1) - 1) * 5);
        } else {
            $users = user::latest()->paginate(5);
            return view('admin.users.index', compact('users'))->with('count', (request()->input('page', 1) - 1) * 5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        user::create($request->all());

        return redirect()->route('user.index')
            ->with('success', 'user created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('user.index')
            ->with('success', 'user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();

        return redirect()->route('user.index')
            ->with('success', 'user deleted successfully');
    }
}
