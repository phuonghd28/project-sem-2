<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ListOrderController extends Controller
{

    public function list(Request $request)
    {
        $queryBuilder = Order::query();
        $search = $request->get('search');
        $sort = $request->get('sort');
        $status = $request->get('isCheckout');

        if ($search || strlen($search) > 0) {
            $queryBuilder = $queryBuilder->where('shipName', 'like', '%' . $search . '%');
        }
        if ($sort === 1) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'DESC');
        }
        if ($sort === 2) {
            $queryBuilder = $queryBuilder->orderBy('created_at', 'ASC');
        }
        if ($status) {
            $queryBuilder = $queryBuilder->where('isCheckout', $status);
        }
        $order = $queryBuilder->paginate(5)->appends(['search' => $search, 'status' => $status]);
        return view('admin/orders/table', [
            'orders' => $order,
            'status' => $status,
            'sort' => $sort
        ]);

    }
    public function delete($id)
    {
        $user = Order::find($id);
        $user->delete();
        return redirect()->route('listOrder')->with(['status' => 'Delete order success']);
    }
}
