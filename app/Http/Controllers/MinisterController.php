<?php

namespace App\Http\Controllers;

use App\Http\Requests\MinisterStoreRequest;
use App\Http\Requests\MinisterUpdateRequest;
use App\Models\Minister;
use Illuminate\Http\Request;

class MinisterController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ministers = Minister::all();

        return view('minister.index', compact('ministers'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('minister.create');
    }

    /**
     * @param \App\Http\Requests\MinisterStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MinisterStoreRequest $request)
    {
        $minister = Minister::create($request->validated());

        $request->session()->flash('minister.id', $minister->id);

        return redirect()->route('minister.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Minister $minister
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Minister $minister)
    {
        return view('minister.show', compact('minister'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Minister $minister
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Minister $minister)
    {
        return view('minister.edit', compact('minister'));
    }

    /**
     * @param \App\Http\Requests\MinisterUpdateRequest $request
     * @param \App\Models\Minister $minister
     * @return \Illuminate\Http\Response
     */
    public function update(MinisterUpdateRequest $request, Minister $minister)
    {
        $minister->update($request->validated());

        $request->session()->flash('minister.id', $minister->id);

        return redirect()->route('minister.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Minister $minister
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Minister $minister)
    {
        $minister->delete();

        return redirect()->route('minister.index');
    }
}
