<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movies', [
            'movies' => $movies
        ]);
    }

    public function create()
    {
        return view('admin.movie-create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'title' => 'required|string',
            'small_thumbnail' => 'required|image|mimes:png,jpg,jpeg',
            'large_thumbnail' => 'required|image|mimes:png,jpg,jpeg',
            'trailer' => 'required|url',
            'movie' => 'required|url',
            'casts' => 'required|string',
            'categories' => 'required|string',
            'release_date' => 'required|string',
            'about' => 'required|string',
            'short_about' => 'required|string',
            'duration' => 'required|string',
            'featured' => 'required'
        ]);

        // Request ke form untuk mengambil data thumbnail
        $small_thumbnail = $request->small_thumbnail;
        $large_thumbnail = $request->large_thumbnail;

        // Menambahkan 10 random string diawal agar gambar tidak memiliki judul yang sama
        $originalSmallThumbnailName = Str::random(10) . $small_thumbnail->getClientOriginalName();
        $originalLargeThumbnailName = Str::random(10) . $large_thumbnail->getClientOriginalName();

        // menyimpan gambar ke storage/public/thumbnail
        $small_thumbnail->storeAs('public/thumbnail', $originalSmallThumbnailName);
        $large_thumbnail->storeAs('public/thumbnail', $originalLargeThumbnailName);

        $data['small_thumbnail'] = $originalSmallThumbnailName;
        $data['large_thumbnail'] = $originalLargeThumbnailName;

        // dd($data);
        Movie::create($data);
        return redirect()->route('admin.movie')->with('success', 'Movie Successfully Created');
    }

    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('admin.movie-edit', [
            'movie' => $movie
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $request->validate([
            'title' => 'required|string',
            'small_thumbnail' => 'image|mimes:png,jpg,jpeg',
            'large_thumbnail' => 'image|mimes:png,jpg,jpeg',
            'trailer' => 'required|url',
            'movie' => 'required|url',
            'casts' => 'required|string',
            'categories' => 'required|string',
            'release_date' => 'required|string',
            'about' => 'required|string',
            'short_about' => 'required|string',
            'duration' => 'required|string',
            'featured' => 'required'
        ]);

        $movie = Movie::find($id);

        if ($request->small_thumbnail) {
            // save new image
            $small_thumbnail = $request->small_thumbnail;
            $originalSmallThumbnailName = Str::random(10) . $small_thumbnail->getClientOriginalName();
            $small_thumbnail->storeAs('public/thumbnail', $originalSmallThumbnailName);
            $data['small_thumbnail'] = $originalSmallThumbnailName;

            // delete old image
            Storage::delete('/public/thumbnail/' . $movie->small_thumbnail);
        }

        if ($request->large_thumbnail) {

            $large_thumbnail = $request->large_thumbnail;
            $originalLargeThumbnailName = Str::random(10) . $large_thumbnail->getClientOriginalName();
            $large_thumbnail->storeAs('public/thumbnail', $originalLargeThumbnailName);
            $data['large_thumbnail'] = $originalLargeThumbnailName;

            Storage::delete('/public/thumbnail/' . $movie->large_thumbnail);
        }

        $movie->update($data);

        return redirect()->route('admin.movie')->with('success', 'Movie Successfully Updated');
    }

    public function destroy($id)
    {
        Movie::find($id)->delete();

        return redirect()->route('admin.movie')->with('success', 'Movie Successfully Deleted');
    }
}