<?php

namespace App\Controllers;

class ErrorController
{

    /**
     * 404 not found
     * 
     * @return void
     */

    public static function notFound($message = 'Resource not found.')
    {
        http_response_code(404);
        loadView('error',[
            'message' => $message,
            'status' => 404,
        ]);
    }

    /**
     * 403 forbidden
     * 
     * @return void
     */

    public static function unauthorized($message = 'You are not authorized to view this page.')
    {
        http_response_code(403);
        loadView('error',[
            'message' => $message,
            'status' => 403,
        ]);
    }
}
?>