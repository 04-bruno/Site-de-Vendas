<?php
    include "header.php";
    include "dados.php";
?>
<main>
    <h1>Produtos destaque:</h1>
    <div class="grid">
        <?php
            $i = 1;
            shuffle($produtos);
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
        <?php
            $i++;
            if ($i > 4) break;
            }
        ?>
    </div>
</main>
<?php
    include "footer.php"
?>