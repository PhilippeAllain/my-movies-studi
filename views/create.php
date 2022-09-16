<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movies</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
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
                            <a class="nav-link active" aria-current="page" href="../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Publier un film</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h3>Publier un nouveau film</h3>
        <form action="" class="container-fluid w-50" method="POST">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" placeholder="Le titre du film" class="form-control">
            <textarea name="synopsis" id="synopsis" cols="30" rows="10" placeholder="Le résumé du film"></textarea>
            <label for="imageUrl" class="form-control">Image</label>
            <input type="url" name="imageUrl" id="imageUrl" placeholder="L'URL de l'image du film">
            <label for="releaseDate" class="form-control">Date de sortie</label>
            <input type="date" name="releaseDate" id="releaseDate">
            <label for="category" class="form-control">Catégorie</label>
            <select name="categoryId" id="category" class="form-select">
                <option value="" selected>--Sélectionner une catégorie</option>
                <option value="1">Horreur</option>
                <option value="2">Drame</option>
                <option value="Comedie">Comédie</option>
            </select>
            <input type="submit" value="Publier" class="btn btn-primary mt-3">


        </form>
    </main>
        <footer>

        </footer>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>

</body>

</html>