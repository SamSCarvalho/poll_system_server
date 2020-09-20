<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionController extends Controller
{
    public function vote(Request $request, $id) {
        DB::transaction(function () use ($id) {
            $option = Option::findOrFail($id);
            $option->update(['votes' => $option->votes + 1]);

            $option->save();
        });
    }
}
