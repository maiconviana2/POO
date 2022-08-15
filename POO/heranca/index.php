<?php

class Post {
    public $likes = 0;
    public $id = 0;

    public function setId($id) {
            $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setLikes($n){
        $this->likes = $n;
    }

    public function getLikes(){
        return $this->likes;
    }
}
//Use extends para puxar os métodos da classe desejada para sua nova classe.
class Foto extends Post {
    private $url;

    // __construct já cria o objeto com os atributos desejados.
    public function __construct($id){

        // Aqui esta sendo usado o método setId() que tem na classe Post.
        //Mesmo a classe foto não tendo este método, pode ser usado pois tem o Extends ali
        $this->setId($id);
    }
}

$foto = new Foto(20);
$foto->setLikes(22);
echo "Foto id: ".$foto->getId()."Likes: ".$foto->getLikes();