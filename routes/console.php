<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->info(Inspiring::quote());
})->purpose('Display an inspiring quote')->everySecond();
