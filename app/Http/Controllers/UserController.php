<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::paginate(15);

        return view('users.index', compact('users'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('users.create');
    }

    /**
     * @param \App\Http\Requests\UserStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $user = User::create($request->validated());

        $request->session()->flash('user.id', $user->id);

        return redirect()->route('users.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        dd($user);
        return view('users.show', compact('user'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * @param \App\Http\Requests\UserUpdateRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());

        $request->session()->flash('user.id', $user->id);

        return redirect()->route('users.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, User $user)
    {

        $user->delete();

        return redirect()->route('users.index');
    }
}
