<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class VideoController extends Controller
{
    private $video;
    public function __construct(Video $video)
    {
        $this->video = $video;
    }
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $video = Video::latest()->get();
        return view('admin.pages.video.index', compact('video', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|file|mimes:mp4,mov,avi,wmv,webm|max:204800', // Adjust max size as needed (in kilobytes)
        ]);

        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('upload/video/'), $fileName);
        // dd($request->all());
        $this->video->title = $request->title;
        $this->video->file = $fileName;
        $this->video->id_imovel = $request->id;
        $this->video->save();

        return back()->with('msg', 'You have successfully upload file.')->with('file', $fileName);
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Video::destroy($id);
        return redirect()->back()->with('msg', 'Deletado com sucesso!');
    }
}
