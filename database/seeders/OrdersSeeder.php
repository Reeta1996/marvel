<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment_status = ['paid', 'cod', 'refund', 'payment failed'] ;
          $payment_mode = ['Master Card', 'VISA', 'Paypal'];
          $status = ['shipped', 'processing', 'returned', 'deliver','cancelled'];

        DB::table('orders')->insert([
            'order_name' =>rand(1000,10000),
            'customer_name' => Str::random(4),
           'date' => date("y-m-d"),
            'amount' => rand(100,10000),
            'payment_status' => $payment_status[rand(0,3)],
            'payment_mode' => $payment_mode[rand(0,2)],
            'status' => $status[rand(0,4)],
      ]);

  }
}
