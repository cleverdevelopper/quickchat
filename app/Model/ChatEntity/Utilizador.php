<?php
    namespace App\Model\ChatEntity;
    use App\DatabaseManager\Database;

    class Utilizador{
        public $id_utilizador;
        public $utilizador;                    
        public $nome_utilizador;                                        
        public $palavra_passe;                                        
        public $email;
        public $grupos;
        public $permissoes;
        public $descricao_grupo; 

        public static function getUtilizadores($where = null, $order = null, $limit = null, $fields = "*"){
            return (new Database('utilizadores'))->select($where, $order, $limit, $fields);
        }

        public static function getUtilizadorById($id){
            return self::getUtilizadores('id_utilizador = '.$id)->fetchObject(self::class);
        }

        public static function getUserByUsername($utilizador){
            return (new Database('utilizadores'))->select('utilizador = "'.$utilizador.'"')->fetchObject(self::class);
        }
    }
?>


