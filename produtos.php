<?php 
    include "header.php";
    include "dados.php";
?>
<main>
    <h1>Nossos produtos:</h1>
    <div class="grid">
         <?php
            foreach($produtos as $item){
        ?>
        <a href="produto.php?id=<?=$item['id']?>">
          <div class="coluna">
                <img src="imagens/<?=$item['imagem']?>" alt="<?=$item['nome']?>">
                <p>
                    <?=$item['nome']?> <br>
                    R$ <?=$item['valor']?>
                </p>
            </div>
            </a>
            <?php } ?>
    </div>
</main>
<?php
    include "footer.php"
?>
