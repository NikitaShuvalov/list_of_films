<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Ramsey\Uuid\Rfc4122\Validator;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['error' => 'Фильм не найден'], 404);
        }

        return response()->json($movie);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(["error" => $validator->errors()], 400);
        }

        $movie = Movie::create([
            "title" => $request->input("title")
        ]);

        return response()->json($movie, 201);
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(["error" => "Фильм не найден"], 404);
        }

        $validator = Validator::make($request->all(), [
            "title" => "required|string|max:255"
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $movie->title = $request->input('title');
        $movie->director = $request->input('director');
        $movie->save();

        return response()->json($movie);
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(["error" => "Фильм не найден"], 404);
        }

        $movie->delete();

        return response()->json(["message" => "Фильм удален"], 200);
    }
}
