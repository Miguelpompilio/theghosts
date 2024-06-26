<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$rr2 = "http://localhost/pirate/";

$game[1] = array(
    "id" => 1,
    "nome" => "sinon",
    "foto" => "{$rr2}img/jogosinon/jogo.sinon.jpg",
    "foto1" => "",
    "foto2" => "",
    "descricao"=> "desculpe mas não tem descrição",
    "jogar"=> "",
);

$game[2] = array(
    "id" => 2,
    "nome" => "nome",
    "foto" => "{$rr2}img/jogomiguel/jogomiguel.p1.jpg",
    "foto1" => "",
    "foto2" => "",
    "descricao"=> "desculpe mas não tem descrição",
    "jogar"=> "",
);

$game[3] = array(
    "id" => 3,
    "nome" => "nome",
    "foto" => "{$rr2}img/jogojamil/jamil.jogo.jpg",
    "foto1" => "",
    "foto2" => "",
    "descricao"=> "desculpe mas não tem descrição",
    "jogar"=> "",
);


$game[4] = array(
    "id" => 4,
    "nome" => "nome",
    "foto" => "{$rr2}img/jogofiori/jogo.fiori.pt2.jpg",
    "foto1" => "",
    "foto2" => "",
    "descricao"=> "desculpe mas não tem descrição",
    "jogar"=> "",
);

$game[5] = array(
    "id" => 5,
    "nome" => "nome",
    "foto" => "{$rr2}img/jogodouglas/jogo.douglas.jpg",
    "foto1" => "",
    "foto2" => "",
    "descricao"=> "desculpe mas não tem descrição",
    "jogar"=> "",   
);


echo json_encode($game);




