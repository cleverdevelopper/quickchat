<?php
    use App\Controller\ChatController\Chat;
    use App\Http\Response;


    $objRouter->get('/chat', [
        'middlewares'   => [
            //'requere-admin-logout'
        ],
        function ($request){
            return new Response(200, Chat\HomeController::getHomePage($request));
        }
    ]);

    $objRouter->post('/chat', [
        'middlewares'   => [
            //'requere-admin-logout'
        ],
        function ($request){
            return new Response(200, Chat\HomeController::getHomePage($request));
        }
    ]);
?>