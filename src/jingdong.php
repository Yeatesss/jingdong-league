<?php

return [
    'TOOL_PARAM'=>[
        'union_id'=>env('TOOL_UNION_ID',''),
    ],
    "OAUTH_PUBLIC_PARAM"=>[
        'access_token'=>env('OAUTH_PUBLIC_PARAM_ACCESS_TOKEN',''),
        'app_key'=>env('OAUTH_PUBLIC_PARAM_APP_KEY',''),
        'app_secret'=>env('OAUTH_PUBLIC_PARAM_APP_SECRET',''),
        'format'=>'json',
        'v'=>'2.0',
    ]
];