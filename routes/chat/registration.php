<?php
    use App\Controller\ChatController\Registration;
    use App\Http\Response;


    $objRouter->get('/registration', [
        'middlewares'   => [
            //'requere-admin-logout'
        ],
        function ($request){
            return new Response(200, Registration\RegistrationController::getRegistrationPage($request));
        }
    ]);

    $objRouter->post('/registration', [
        'middlewares'   => [
            //'requere-admin-logout'
        ],
        function ($request){
            return new Response(200, Registration\RegistrationController::setNewUtilizador($request));
        }
    ]);
?>