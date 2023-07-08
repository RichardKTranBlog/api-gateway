<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class ContentController extends Controller
{
    public function index()
    {
        $url = config('services.endpoints.content_service.get_all');
        try {
            $res = Http::timeout(5)->get($url);
            $data = json_decode($res->body(), true);
        } catch (Exception $e) {
            return [
                'error' => $e->getMessage(),
            ];
        }

        return $data;
    }
}
