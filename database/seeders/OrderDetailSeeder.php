<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'orderId' => 1,
                'productId' => 1,
                'quantity' => 2,
                'unitPrice' => 27000,],
            [
                'orderId' => 1,
                'productId' => 6,
                'quantity' => 1,
                'unitPrice' => 500000,],
            [
                'orderId' => 1,
                'productId' => 7,
                'quantity' => 1,
                'unitPrice' => 340000,],
            [
                'orderId' => 2,
                'productId' => 5,
                'quantity' => 1,
                'unitPrice' => 420000,],
            [
                'orderId' => 2,
                'productId' => 6,
                'quantity' => 1,
                'unitPrice' => 500000,],
            [
                'orderId' => 2,
                'productId' => 11,
                'quantity' => 1,
                'unitPrice' => 50000,],
            [
                'orderId' => 3,
                'productId' => 4,
                'quantity' => 1,
                'unitPrice' => 340000,],
            [
                'orderId' => 3,
                'productId' => 12,
                'quantity' => 1,
                'unitPrice' => 20000,],
            [
                'orderId' => 4,
                'productId' => 4,
                'quantity' => 3,
                'unitPrice' => 340000,],
            [
                'orderId' => 4,
                'productId' => 13,
                'quantity' => 1,
                'unitPrice' => 15000,],
            [
                'orderId' => 5,
                'productId' => 4,
                'quantity' => 1,
                'unitPrice' => 340000,],
            [
                'orderId' => 5,
                'productId' => 11,
                'quantity' => 3,
                'unitPrice' => 50000,],
            [
                'orderId' => 5,
                'productId' => 41,
                'quantity' => 1,
                'unitPrice' => 20000,],
            [
                'orderId' => 6,
                'productId' => 5,
                'quantity' => 5,
                'unitPrice' => 420000,],
            [
                'orderId' => 6,
                'productId' => 42,
                'quantity' => 2,
                'unitPrice' => 20000,],
            [
                'orderId' => 7,
                'productId' => 8,
                'quantity' => 3,
                'unitPrice' => 320000,],
            [
                'orderId' => 7,
                'productId' => 43,
                'quantity' => 1,
                'unitPrice' => 10000,],
            [
                'orderId' => 8,
                'productId' => 58,
                'quantity' => 1,
                'unitPrice' => 45000,],
            [
                'orderId' => 9,
                'productId' => 59,
                'quantity' => 1,
                'unitPrice' => 70000,],
            [
                'orderId' => 10,
                'productId' => 60,
                'quantity' => 1,
                'unitPrice' => 30000,],
            [
                'orderId' => 11,
                'productId' => 81,
                'quantity' => 1,
                'unitPrice' => 120000,],
            [
                'orderId' => 12,
                'productId' => 82,
                'quantity' => 1,
                'unitPrice' => 160000,],
            [
                'orderId' => 13,
                'productId' => 83,
                'quantity' => 1,
                'unitPrice' => 110000,],
            [
                'orderId' => 14,
                'productId' => 83,
                'quantity' => 1,
                'unitPrice' => 110000,],
            [
                'orderId' => 15,
                'productId' => 87,
                'quantity' => 1,
                'unitPrice' => 35000,],
            [
                'orderId' => 16,
                'productId' => 88,
                'quantity' => 1,
                'unitPrice' => 40000,],
            [
                'orderId' => 17,
                'productId' => 89,
                'quantity' => 1,
                'unitPrice' => 27000,],
            [
                'orderId' => 18,
                'productId' => 101,
                'quantity' => 1,
                'unitPrice' => 30000,],
            [
                'orderId' => 19,
                'productId' => 14,
                'quantity' => 4,
                'unitPrice' => 35000,],
            [
                'orderId' => 20,
                'productId' => 8,
                'quantity' => 4,
                'unitPrice' => 320000,],
            [
                'orderId' => 21,
                'productId' => 10,
                'quantity' => 1,
                'unitPrice' => 310000,],
            [
                'orderId' => 22,
                'productId' => 121,
                'quantity' => 1,
                'unitPrice' => 30000,],
            [
                'orderId' => 23,
                'productId' => 9,
                'quantity' => 1,
                'unitPrice' => 210000,],
            [
                'orderId' => 24,
                'productId' => 18,
                'quantity' => 1,
                'unitPrice' => 35000,],
            [
                'orderId' => 25,
                'productId' => 171,
                'quantity' => 3,
                'unitPrice' => 200000,],
            [
                'orderId' => 26,
                'productId' => 1,
                'quantity' => 1,
                'unitPrice' => 270000,],
            [
                'orderId' => 27,
                'productId' => 147,
                'quantity' => 4,
                'unitPrice' => 70000,],
            [
                'orderId' => 28,
                'productId' => 112,
                'quantity' => 1,
                'unitPrice' => 35000,],
            [
                'orderId' => 29,
                'productId' => 48,
                'quantity' => 1,
                'unitPrice' => 30000,],
            [
                'orderId' => 30,
                'productId' => 46,
                'quantity' => 1,
                'unitPrice' => 3000,],
            [
                'orderId' => 31,
                'productId' => 107,
                'quantity' => 1,
                'unitPrice' => 45000,],
            [
                'orderId' => 32,
                'productId' => 122,
                'quantity' => 2,
                'unitPrice' => 25000,],
            [
                'orderId' => 33,
                'productId' => 61,
                'quantity' => 1,
                'unitPrice' => 35000,],
            [
                'orderId' => 34,
                'productId' => 9,
                'quantity' => 1,
                'unitPrice' => 210000,],
            [
                'orderId' => 35,
                'productId' => 50,
                'quantity' => 1,
                'unitPrice' => 40000,],
            [
                'orderId' => 36,
                'productId' => 126,
                'quantity' => 1,
                'unitPrice' => 50000,],
            [
                'orderId' => 37,
                'productId' => 11,
                'quantity' => 1,
                'unitPrice' => 50000,],
            [
                'orderId' => 38,
                'productId' => 151,
                'quantity' => 1,
                'unitPrice' => 70000,],
            [
                'orderId' => 39,
                'productId' => 67,
                'quantity' => 1,
                'unitPrice' => 50000,],
            [
                'orderId' => 40,
                'productId' => 129,
                'quantity' => 1,
                'unitPrice' => 50000,],
            [
                'orderId' => 41,
                'productId' => 124,
                'quantity' => 1,
                'unitPrice' => 40000,],
            [
                'orderId' => 42,
                'productId' => 9,
                'quantity' => 1,
                'unitPrice' => 210000,],
            [
                'orderId' => 43,
                'productId' => 110,
                'quantity' => 1,
                'unitPrice' => 60000,],
            [
                'orderId' => 43,
                'productId' => 173,
                'quantity' => 1,
                'unitPrice' => 90000,],
            [
                'orderId' => 44,
                'productId' => 10,
                'quantity' => 1,
                'unitPrice' => 310000,],
            [
                'orderId' => 45,
                'productId' => 8,
                'quantity' => 1,
                'unitPrice' => 320000,],
            [
                'orderId' => 46,
                'productId' => 109,
                'quantity' => 1,
                'unitPrice' => 40000,],
            [
                'orderId' => 47,
                'productId' => 103,
                'quantity' => 1,
                'unitPrice' => 40000,],
            [
                'orderId' => 48,
                'productId' => 153,
                'quantity' => 1,
                'unitPrice' => 60000,],
            [
                'orderId' => 49,
                'productId' => 88,
                'quantity' => 1,
                'unitPrice' => 40000,],
            [
                'orderId' => 50,
                'productId' => 69,
                'quantity' => 1,
                'unitPrice' => 120,],
        ]);
    }
}
