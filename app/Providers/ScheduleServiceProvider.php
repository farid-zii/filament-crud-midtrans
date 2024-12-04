<?php

namespace App\Providers;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\ServiceProvider;

class ScheduleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Schedule $schedule): void
    {
        $schedule->call(function () {
            $orders = \App\Models\Order::where('status', 'pending')->get();
            foreach ($orders as $order) {
                \App\Jobs\SendPaymentReminder::dispatch($order);
            }
        })->daily();
    }
}
