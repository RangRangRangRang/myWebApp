<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
// USER STORY 5: Controller
class VideoController extends Controller
{
    // USER STORY 11: CRUD
    public function index()
    {
        $videos = Video::orderBy('order')->get();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        Video::create($request->all());
        return redirect()->route('videos.index');
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
{
    $request->validate([
        'title' => 'required',
        'author' => 'nullable',
        'note' => 'nullable',
        'youtube_link' => 'nullable|url',
    ]);

    $video->update($request->only(['title','author','note','youtube_link','order']));

    return redirect()->route('videos.index')->with('success','Cập nhật thành công');
}

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index');
    }
}
