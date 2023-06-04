<?php
include __DIR__ . '../../model/Products.php';
$arrayProducts=[
    new Product("gatto",15.50, "graffiatorio per gatto", "https://th.bing.com/th/id/R.e84866191ea4874fa1a55e90d74bff7c?rik=DcYA8xrsB9nUjQ&pid=ImgRaw&r=0" ),
    new Product("cane",1.50, "cibo per cani", "https://images.unsplash.com/photo-1589924691995-400dc9ecc119?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" )
];
?>


<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand text-uppercase">shop per animali</a>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>

<main class="container mt-5">

<!-- CREAZINE CARD -->
    <div class="row">
        <?php foreach( $arrayProducts as $elem ) {?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $elem->immagine ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $elem->prodotto ?></h5>
                    <p class="card-text"><?php echo $elem->prezzo ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php }?>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>