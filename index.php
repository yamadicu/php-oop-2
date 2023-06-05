<?php

require_once __DIR__ . '/model/Products.php';
require_once __DIR__ . '/model/Category.php';
require_once __DIR__ . '/model/Food.php';
require_once __DIR__ . '/model/Game.php';

$dogs = new Category( 'Dogs', 'fa-solid fa-dog' );
$cat = new Category( 'Cat', 'fa-solid fa-cat' );


$arrayProdotti = [
    new Products( 'Collare', 12, 'https://images.unsplash.com/photo-1491930722919-a5fc9ad49a75?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', $dogs),
    new Products( 'Erba gatta', 20, 'https://images.unsplash.com/photo-1685306344922-2c6333cd7792?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1474&q=80', $cat),
    new Food( 'Crocchette', 8.50, 'https://images.unsplash.com/photo-1589924691995-400dc9ecc119?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80', $dogs ),
    new Food( 'Scatolette per gatti', 10.50, 'https://images.unsplash.com/photo-1591324535489-9c78376631dc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80', $cat ),
    new Game( 'Palla da riposrto', 18.50, 'https://images.unsplash.com/photo-1590502160462-58b41354f588?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80', $dogs ),
    new Game( 'Graffiatoio per gatti', 30.90, 'https://itop5.it/wp-content/uploads/2020/05/migliori-tiragraffi-per-gatti.jpg', $cat ),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Animal Shop</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <?php foreach( $arrayProdotti as $element ) :  ?>

                <div class="col-4 mt-3">

                    <div class="card" style="width: 18rem;">
                        <img src="<?= $element->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $element->name ?></h5>
                            <span class="card-text">Prezzo: <?= $element->price ?>$</span>
                            <div>
                                <span>Categria: <?= $element->category->name ?></span>
                                <?= $element->getCategoryIcon(); ?>
                            </div>
                        </div>
                    </div>

                </div>

            <?php endforeach;   ?>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>