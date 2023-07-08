<?php

namespace App\Http\Controllers;

class CommentController extends Controller
{
    public function index()
    {
        return ([
            'comment-1' => 'This is comment 1',
            'comment-2' => 'This is comment 2',
            'comment-3' => 'This is comment 3',
            'comment-4' => 'This is comment 4',
            'comment-5' => 'This is comment 5',
            'comment-6' => 'This is comment 6',
        ]);
    }
}
