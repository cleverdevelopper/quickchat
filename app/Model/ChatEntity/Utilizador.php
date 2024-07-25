<?php
    namespace App\Model\ChatEntity;
    use App\DatabaseManager\Database;

    class Utilizador{
        public $codigo_utilizador;
        public $nome_completo;
        public $otp;
        public $telefone;
        public $imagem;
        public $utilizador;
        public $senha;
        public $genero;
        public $email;
        public $aniversario;
        public $public_key;
        public $user_token;
        public $user_connection_id;
        public $created_at;
        public $updated_at;
        public $deleted_at;

        public  function cadastrar(){
            $this->codigo_utilizador = (new Database('utilizadores'))->insert([
                'nome_completo'             =>  $this->nome_completo,
                'otp'                       =>  $this->otp,
                'telefone'                  =>  $this->telefone,
                'imagem'                    =>  $this->imagem,
                'utilizador'                =>  $this->utilizador,
                'senha'                     =>  $this->senha,
                'email'                     =>  $this->email,
                'aniversario'               =>  $this->aniversario,
                'genero'                    =>  $this->genero,
                'created_at'                =>  $this->created_at,
                'updated_at'                =>  $this->updated_at,
                'deleted_at'                =>  $this->deleted_at
            ]);
            return true;
        }


        public static function getUtilizadores($where = null, $order = null, $limit = null, $fields = "*"){
            return (new Database('utilizadores'))->select($where, $order, $limit, $fields);
        }

        public static function getUtilizadorById($id){
            return self::getUtilizadores('codigo_utilizador = '.$id)->fetchObject(self::class);
        }

        public static function getUserByUsername($utilizador){
            return (new Database('utilizadores'))->select('utilizador = "'.$utilizador.'"')->fetchObject(self::class);
        }
    }
?>


