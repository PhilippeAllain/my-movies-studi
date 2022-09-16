<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movies</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./styles/main.css">
</head>

<body>
    <?php
    $firstName= "Monique";
    $firstNames = array("Christelle", "Christophe", $firstName, "Aline");
    $myInformations = [
        "firstName" => "Philippe",
        "lastName" => "Frager",
        "age" => 67
    ];

    foreach ($firstNames as $firstName) {
        echo "Bonjour, je m'appelle $firstName ! :)<br>";
    }

    echo ("Bonjour, je m'appelle {$myInformations['firstName']} ! :)");
     ?>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-film"> My movies</i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./views/create.php">Publier un
                                film</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1>My Movies</h1>
        <h3 class="slogan">Découvrez et partagez des films</h3>
        <img class="logo" src="./images/videos.jpg" alt="Logo My Movies" width="100">

        <section class="container d-flex jutify">
            <div class="card m-3" style="width: 18rem;">
                <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTA4nJB9z9llRSjgDa4SrU-Jwtb-3dwzkt90rF7KkCka1H90HDt"
                    class="card-img-top" alt="Avatar">
                <div class="card-body">
                    <h5 class="card-title">Avatar</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Aventure</h6>
                    <p class="card-text">Un film avec des gens bleus.</p>
                    <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-title="Modifier">
                        <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-title="Supprimer">
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </button>
                </div>
            </div>

            <div class="card m-3" style="width: 18rem;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6bUzA1d32QD13Q1HZRbEjXGTvTvsKdXpC-Q&usqp=CAU"
                    class="card-img-top" alt="Titanic">
                <div class="card-body">
                    <h5 class="card-title">Titanic</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Drame</h6>
                    <p class="card-text">Un film avec des gens bleus.</p>
                    <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-title="Modifier">
                        <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-title="Supprimer">
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </button>
                </div>
            </div>

        </section>

        <footer>

        </footer>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <script src="./scripts/scripts.js"></script>


</body>

</html>