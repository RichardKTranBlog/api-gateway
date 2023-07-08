<?php

$contentService = env('CONTENT_SERVICE_URL', 'http://content-service-application');
$commentService = env('COMMENT_SERVICE_URL', 'http://comment-service-application');

return [
    'endpoints' => [
        'content_service' => [
            'get_all' => $contentService . '/contents',
        ],
        'comment_service' => [
            'get_all' => $commentService . '/comments',
        ],
    ]
];
