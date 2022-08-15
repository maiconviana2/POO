<?php
class Post {

    public int $likes = 1;
    public array $comments =[];
    private string $author;

    #Em POO as funções são chamadas de métodos.
    public function aumentarLike(){
            $this->likes + 1;
    }

     public function __construct($qtdLikes = 0){
         $this->likes = $qtdLikes;
     }

    public function setAuthor($author){
        $this->author = ucfirst($author);
    }
    public function getAuthor(){
        return $this->author ?? 'Visitante';
    }
    #sempre fazer um método set e um get para a função.
}

$post1 = new Post();
$post1->setAuthor('Nome do autor');

$post2 = new Post();
$post2->likes =2;

echo "Post 1: ".$post1->getAuthor();