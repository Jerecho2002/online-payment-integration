<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymongoWebhookController;

Route::post('/paymongo/webhook', [PaymongoWebhookController::class, 'handle']);
