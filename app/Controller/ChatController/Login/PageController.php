<?php
    namespace App\Controller\ChatController\Login;
    use App\Utils\ViewManager;

    class PageController{
        public static function getPage($title, $content){
            return ViewManager::render('chat/login/page', [
                'title'          => $title,
                'content'        => $content
            ]);
        }
    }
?>