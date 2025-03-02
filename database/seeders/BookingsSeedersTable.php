<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingsSeedersTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'user_id'=>3,
            'event_id'=>1,
            'ticket_quantity'=>2,
            'ticket_price'=>100,
            'status'=>'pending',
        ]);
        Booking::create([
            'user_id'=>4,
            'event_id'=>2,
            'ticket_quantity'=>3,
            'ticket_price'=>1000,
            'status'=>'pending',
        ]);
        Booking::create([
            'user_id'=>4,
            'event_id'=>2,
            'ticket_quantity'=>5,
            'ticket_price'=>56000,
            'status'=>'pending',
        ]);
        Booking::create([
            'user_id'=>5,
            'event_id'=>3,
            'ticket_quantity'=>2,
            'ticket_price'=>4000,
            'status'=>'confirmed',
        ]);
    }
}
