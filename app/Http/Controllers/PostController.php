<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "posts",
            'posts' => Post::orderBy('created_at', 'desc')->paginate(10)
        );
        return view('posts.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:200',
            'description' => 'required|string|max:2000',
            'picture' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('picture')) {
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();

            $basename = uniqid() . '_' . time();
            $smallFilename = $basename . '_small.' . $extension;
            $mediumFilename = $basename . '_medium.' . $extension;
            $largeFilename = $basename . '_large.' . $extension;

            $fileNameToStore = $basename . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/pictures', $fileNameToStore);

            $request->file('picture')->storeAs('public/pictures', $smallFilename);
            $request->file('picture')->storeAs('public/pictures', $mediumFilename);
            $request->file('picture')->storeAs('public/pictures', $largeFilename);

            //small
            $smallThumbnailPath = storage_path('app/public/pictures/' . $smallFilename);
            $this->createThumbnail($smallThumbnailPath, 150, 93);
            
            //medium
            $mediumThumbnailPath = storage_path('app/public/pictures/' . $mediumFilename);
            $this->createThumbnail($mediumThumbnailPath, 300, 185);

            //large
            $largeThumbnailPath = storage_path('app/public/pictures/' . $largeFilename);
            $this->createThumbnail($largeThumbnailPath, 550, 340);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->picture = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'id' => "posts",
            'posts' => Post::find($id)
        );
        return view('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'id' => "posts",
            'posts' => Post::find($id)
        );
        return view('posts.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|string|max:200',
            'description' => 'required|string|max:2000',
            'picture' => 'image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasFile('picture')) {
            $filenameWithExt = $request->file('picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('picture')->getClientOriginalExtension();

            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('picture')->storeAs('public/pictures', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->picture = $fileNameToStore;
        $post->save();

        // Post::where('id', $id)->update([
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description')
        // ]);

        return redirect('/posts')->with('success', 'Postingan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        File::delete('storage/pictures/' . $post->picture);

        return redirect('posts')->with('success', 'Postingan Berhasil Dihapus');
    }

    public function __construct()
    {
        $this->middleware('auth',  ["except" => ["index", "show"]]);
    }
}
