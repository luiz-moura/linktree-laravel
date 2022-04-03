<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function index()
    {
        $links = Auth::user()->links()->get();

        return view('links.index', [
            'links' => $links
        ]);
    }

    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'link' => 'required|url',
        ]);

        $link = Auth::user()->links()->create($request->only(['name', 'link']));

        if ($link) {
            return to_route('links.index');
        }

        return back();
    }

    public function edit(Link $link)
    {
        abort_if($link->user_id !== Auth::user()->id, 400);

        return view('links.edit', compact('link'));
    }

    public function update(Request $request, Link $link)
    {
        abort_if($link->user_id !== Auth::user()->id, 403);

        $request->validate([
            'name' => 'required|max:255',
            'link' => 'required|url',
        ]);

        $link->update($request->only(['name', 'link']));

        return to_route('links.index');
    }

    public function destroy(Request $request, Link $link)
    {
        abort_if($link->user_id == Auth::user()->id, 403);

        $link->delete();

        to_route('links');
    }
}
