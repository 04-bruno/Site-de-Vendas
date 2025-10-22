<?php
    include "header.php";
    include "dados.php";
    $id = (int)$_GET['id'];
    $quant = count($produtos);
    if($id == 0 || $id > $quant ){
        header("Location: index.php");
        exit;
    }

    //Metodo do professor

    // if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    //     $id = (int)$_GET['id'];

    //     if(!isset($produtos['id'])){
    //         $id = 1;
    //     }
    // } else {
    //     $id = 1;
    // }
    
?>
<main>
    <div class="grid-2">
        <div class="coluna">
            <img src="imagens/<?= $produtos[$id]['imagem'] ?>" alt="<?= $produtos[$id]['nome'] ?>">
        </div>

        <div class="coluna">
            <h2><?= $produtos[$id]['nome'] ?></h2>
            <p>R$ <?= $produtos[$id]['valor'] ?></p>
        </div>
    </div>
</main>
<?php
    include "footer.php"
?>