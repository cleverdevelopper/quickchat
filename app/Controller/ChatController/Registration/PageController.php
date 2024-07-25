<?php
    namespace App\Controller\ChatController\Registration;
    use App\Utils\ViewManager;

    class PageController{
        public static function getPage($title, $content){
            return ViewManager::render('chat/registration/page', [
                'title'          => $title,
                'content'        => $content
            ]);
        }
    }
?>