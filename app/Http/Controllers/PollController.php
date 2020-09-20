<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PollController extends Controller
{
    public function index()
    {
        return Poll::all();
    }

    public function show($id)
    {
        return Poll::with('options')->find($id);
    }

    public function store(Request $request)
    {
        DB::transaction(function () use ($request) {
            $poll = Poll::create([
                'title' => $request->title,
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
            ]);
            $options = $request->options;
            $poll->options()->createMany($options);

            $poll->save();
        });
    }

    public function update(Request $request, $id)
    {
        DB::transaction(function () use ($request, $id) {
            $poll = Poll::findOrFail($id);
            $poll->update([
                'title' => $request->title,
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
            ]);

            $poll->save();
        });
    }

    public function delete(Request $request, $id)
    {
        $poll = Poll::findOrFail($id);
        $poll->delete();

        return 204;
    }
}
