<?php
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;

$user = User::find(3);
if (!$user) {
    echo "User not found\n";
    exit(0);
}

echo "id: " . $user->id . PHP_EOL;
echo "email: " . $user->email . PHP_EOL;
echo "email_verification_code: " . var_export($user->email_verification_code, true) . PHP_EOL;
echo "email_verification_expires_at: " . var_export($user->email_verification_expires_at, true) . PHP_EOL;
