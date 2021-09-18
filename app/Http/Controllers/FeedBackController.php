<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedBackRequest;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function store(FeedBackRequest $request) {
        $fback = new FeedBack();
        $fback->fill($request->validated());
        $fback->save();
        return redirect()->route('contact')->with('success', 'Your message has been sent. Thank you!');
    }
    public function list()
    {
        $data = FeedBack::all();
        return view('admin.feedback.table', ['fback' => $data]);
    }
    public function detail($id) {
        $detail = FeedBack::find($id);
        return view('admin.feedback.detail', ['details'=>$detail]);
    }
    public function delete($id)
    {
        $delete = FeedBack::find($id);
        $delete->delete();
        return redirect()->route('listFeedBack')
            ->with('success', 'Xoá phản hồi thành công.');
    }
}
