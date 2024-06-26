<section id="main">
<div class="card-flex"> 
<?php

$dadosApi = file_get_contents("http://localhost/pirate/api/game.php/");
$dadosApi = json_decode($dadosApi);

foreach ($dadosApi as $dados) {
  ?>

    <div class="card-block">
      <img src="<?php echo $dados->foto ?>" alt="" >
  <div class="card-info">
    <h5><?php echo $dados-> nome?></h5>
    <p><?php echo $dados-> descricao?></p>


    <div class="button-center">
    <a href="<?php echo $dados-> jogar?>" style="color: white; background-color:black ; font-size: 1rem; padding: 5px; border-radius: 10px; ">
        Jogos 
</a>
</div>
  </div>
    </div>

  <?php
}
;
?>
  </div>
</section>
