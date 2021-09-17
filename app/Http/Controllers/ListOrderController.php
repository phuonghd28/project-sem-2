<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ListOrderController extends Controller
{

    public function list(Request $request)
    {
        $queryBuilder = Order::query();
        $search = $request->get('search');
        $sort = $request->get('sort');
        $status = $request->get('status');
        $date = $request->get('date');

        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('shipName', 'like', '%' . $search . '%')
            ->orWhere('totalPrice', 'like', '%'.$search.'%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        if ($status) {
            $queryBuilder = $queryBuilder->where('status', $status);
        }
        if($date == 1){
            $queryBuilder = $queryBuilder->whereDate('created_at',date_format(Carbon::now(),'Y/m/d'));
        }
        if($date == 2){
            $queryBuilder = $queryBuilder->whereMonth('created_at', Carbon::now()->month);
        }
        if($date == 3){
            $queryBuilder = $queryBuilder->whereYear('created_at', Carbon::now()->year);
        }
        $order = $queryBuilder->orderBy('created_at', 'DESC')->paginate(5)->appends(['search' => $search, 'status' => $status, 'date' => $date]);
        return view('admin/orders/table', [
            'orders' => $order,
            'status' => $status,
            'sort' => $sort,
            'date' => $date
        ]);

    }
    public function delete($id)
    {
        $user = Order::find($id);
        $user->delete();
        return redirect()->route('listOrder')->with(['status' => 'Delete order success']);
    }
    public function update_status(Request $request){
        foreach (json_decode($request->array_id) as $item){
            $order = Order::find($item);
            $order->status = $request->desire;
            $order->save();
        }
        return back();
    }
}
