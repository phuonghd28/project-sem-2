<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function store(Request $request) {
        $fback = new FeedBack();
        $fback->name = $request->name;
        $fback->email = $request->email;
        $fback->subject = $request->subject;
        $fback->message = $request->message;
        $fback->save();
        return redirect()->route('contact')->with('success', 'Your message has been sent. Thank you!');
    }
    public function list()
    {
        $data = FeedBack::all();
        return view('admin.feedback.table', ['fback' => $data]);
    }
    public function delete($id)
    {
        $delete = FeedBack::find($id);
        $delete->delete();
        return redirect()->route('listFeedBack')
            ->with('success', 'Xoá phản hồi thành công.');
    }
}
