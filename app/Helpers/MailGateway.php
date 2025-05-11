<?php

namespace App\Helpers;

use App\Models\MailGateway;
use Illuminate\Support\Facades\Cache;

class mail_gateways
{
    public static function get($key, $default = null)
    {
        return Cache::remember("setting_{$key}", 3600, function () use ($key) {
            return optional(MailGateway::where('key', $key)->first())->value;
        }) ?? $default;
    }
}
