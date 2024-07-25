<?php
    namespace App\Controller\ChatController\Registration;
    use App\Model\ChatEntity\Utilizador as UserEntity;
    use App\Utils\ViewManager;
    //use \App\Session\Login\LoginSession as  SessionAdminLogin;
    use App\Controller\Alert;

    class RegistrationController extends PageController{
        public static function getRegistrationPage($request){

            $content = ViewManager::render('chat/registration/registration', [
               
            ]);

            return parent::getPage('ChatApp - Registration', $content);
        }
        
        public static function setNewUtilizador($request){
            $postVars = $request->getPostVars();

            $objUtilizador = new UserEntity;

            $objUtilizador->nome_completo  = $postVars['text_name'];
            $objUtilizador->telefone       = $postVars['text_mobile'];
            $objUtilizador->email          = $postVars['text_email'];
            $objUtilizador->utilizador     = $postVars['text_utilizador'];
            $objUtilizador->senha          = md5($postVars['text_password']);
            $objUtilizador->aniversario    = $postVars['text_date'];
            $objUtilizador->genero         = $postVars['select'];
            $objUtilizador->created_at     = date('Y-m-d H:i:s');
            $objUtilizador->updated_at     = date('Y-m-d H:i:s');

            $objUtilizador->cadastrar();

            $request->getRouter()->redirect('/?status=created');
                  
        }

    }
?>