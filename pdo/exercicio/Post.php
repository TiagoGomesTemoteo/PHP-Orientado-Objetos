<?php

declare(strict_types=1);

class Post {

    private PDO $conexao;

    public function __construct(){
        try{
            $this->conexao = new PDO('mysql:host=localhost:3306;dbname=exemplo', 'root', '1234');
        }catch (Exception $e){
            echo $e->getMessage();
            die();
        }
    }

    public function list () : array{
        $sql = 'select * from posts';

        $posts = [];

        foreach ($this->conexao->query($sql) as $key => $value){
            array_push($posts, $value);
        }
        return $posts;
    }

    public function  insert(string $titulo, string $descricao) : int {
        $sql = 'insert into posts(titulo,descricao,dataHora)values(?,?,now())';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1,$titulo);
        $prepare->bindParam(2,$descricao);

        $prepare->execute();

        return $prepare->rowCount();
    }

    public function  update(string $titulo, string $descricao, int $id) : int {
        $sql = 'update posts set titulo = ?, descricao = ?, dataHora = now() where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1,$titulo);
        $prepare->bindParam(2,$descricao);
        $prepare->bindParam(3,$id);

        $prepare->execute();

        return $prepare->rowCount();
    }

    public function  delete (int $id){
        $sql = 'delete from posts where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1,$id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}