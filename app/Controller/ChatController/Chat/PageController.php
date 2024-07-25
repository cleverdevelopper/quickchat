<?php
    namespace App\Controller\ChatController\Chat;
    use App\Utils\ViewManager;

    class PageController{
        public static function getPage($title, $content){
            return ViewManager::render('chat/chatPainel/page', [
                'title'          => $title,
                'content'        => $content
            ]);
        }
    }
?>