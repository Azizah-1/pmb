<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;

$jobs = DB::table('jobs')->count();
$failed = DB::table('failed_jobs')->count();
echo "jobs: $jobs\n";
echo "failed_jobs: $failed\n";
$lastFailed = DB::table('failed_jobs')->orderBy('id','desc')->first();
if ($lastFailed) {
    echo "\nLast failed job:\n";
    echo "id: {$lastFailed->id}\n";
    echo "connection: {$lastFailed->connection}\n";
    echo "queue: {$lastFailed->queue}\n";
    echo "failed_at: {$lastFailed->failed_at}\n";
    echo "exception: {$lastFailed->exception}\n";
}
