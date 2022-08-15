<?php
class Post {

    public int $likes = 1;
    public array $comments =[];
    public string $author;

    #Em POO as funções são chamadas de métodos.
    public function aumentarLike(){
        while ($this->likes < 10){
            echo $this->likes.'<br>';
            $this->likes ++;
        }
       
    }

    #Método construtor é executado sempre que um objeto é criado e roda antes do objeto ser criado.
    #É útil quando um objeto precisa ser criado com alguns atributos por padrão.
    public function __construct($qtdLikes = 0){
        $this->likes = $qtdLikes;
    }
}


#criando classes, objetos e métodos
$post1 = new Post(25);
$post1->aumentarLike();

$post2 = new Post();
$post2->likes =2;

echo "Post 1: ".$post1->likes;