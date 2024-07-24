<?php
    use App\Controller\ChatController\Login;
    use App\Http\Response;


    $objRouter->get('/', [
        'middlewares'   => [
            //'requere-admin-logout'
        ],
        function ($request){
            return new Response(200, Login\LoginController::getLoginPage($request));
        }
    ]);

    $objRouter->post('/', [
        'middlewares'   => [
            //'requere-admin-logout'
        ],
        function ($request){
            return new Response(200, Login\LoginController::setLoginPage($request));
        }
    ]);


    //===========================================
    // Rota responsavel pela destruicao 
    // da sessao 
    //===========================================
    $objRouter->get('/logout', [
        'middlewares'   => [
            //'requere-admin-login'
        ],
        function ($request){
            return new Response(200, Login\LoginController::setLogout($request));
        }
    ]);

?>