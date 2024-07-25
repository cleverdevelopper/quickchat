<?php
    namespace App\Controller\ChatController\Chat;
    use App\Model\ChatEntity\Utilizador as UserEntity;
    use App\Utils\ViewManager;
    //use \App\Session\Login\LoginSession as  SessionAdminLogin;
    use App\Controller\Alert;

    class HomeController extends PageController{
        public static function getHomePage($request){

            $content = ViewManager::render('chat/chatPainel/chat', [
               
            ]);

            return parent::getPage('ChatApp - HomePage', $content);
        }

    }
?>