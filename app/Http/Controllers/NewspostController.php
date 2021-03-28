<?php

namespace App\Http\Controllers;

use App\Http\Resources\Newspost as NewspostResource;
use App\Newspost;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class NewspostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function index(\Illuminate\Http\Request $request)
    {
        $np = Newspost::where('lang', \App::getLocale())->orderBy('created_at', SORT_DESC)->get();
        if ($request->pjax()) {
            return NewspostResource::collection($np)->toResponse();
        }
        return view('newspost.index')
        ->with('nps', $np);
    }

    public function create(Request $request)
    {
        return view('newspost.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(\Illuminate\Http\Request $request)
    {
            $data = [
                'title' => $request->post('title'),
                'teaser' => $request->post('teaser'),
                'content' => $request->post('content'),
                'lang' => $request->post('lang')
            ];
            $np = new Newspost($data);
            $np->save();
        Mail::send(['text' => 'We just posted a new article'], $data, function ($message) {
            $message->from('us@example.com', 'Laravel');
            $message->to('foo@example.com');
            $message->subject('New post available');
        });
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $np = NewspostResource::findOrFail($id);
        return $np;
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
        $np = Newspost::find($id);
        $np->title = $request->get('title');
        $np->content = $request->get('content');
        $np->teaser = $request->get('teaser');
        $np->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $np = Newspost::find($id);
        $np->destroy();
    }
}
