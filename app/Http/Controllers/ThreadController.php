<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index()
    {
        // $threads = Thread::orderBy('fixed', 'desc')
        $threads = Thread::orderBy('updated_at', 'desc')
            ->paginate();
        return response()->json($threads);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thread = new Thread;
        $thread->title = $request->input('title');
        $thread->body = $request->input('body');
        $thread->user_id = \Auth::user()->id;
        $thread->save();
        // broadcast(new NewThread($thread));
        return response()->json(['created' => 'success', 'data'=>$thread]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        // $this->authorize('update', $thread);
        $thread->title = $request->input('title');
        $thread->body = $request->input('body');
        $thread->update();
        return redirect('/threads/' . $thread->id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        //
    }
    public function pin(Thread $thread)
    {
        $this->authorize('isAdmin', $thread);
        $thread->fixed = true;
        $thread->save();
        return redirect('/');
    }
    public function close(Thread $thread)
    {
        $this->authorize('isAdmin', $thread);
        $thread->closed = true;
        $thread->save();
        return redirect('/');
    }
}
