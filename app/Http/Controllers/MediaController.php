<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MediaController extends Controller
{
    public function destroy(Request $request)
    {
        try {
            $model = 'App\\Models\\' . $request->model;

            $medias= $model::find($request->model_id)->getMedia()->find($request->media_id)->delete();
            return back();
        } catch (\Throwable $th) {
           return back();
        }

    }
}
