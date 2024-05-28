<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Détails de l'article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>{{ $articles->TitreArticle }}</h1>
    <img src="{{ asset($articles->ImageArticle) }}" class="img-fluid" alt="Image de l'article">
    <p>{{ $articles->DescriptionArticle }}</p>
    <p><strong>Publié le :</strong> {{ $articles->PublicationDate }}</p>
    @if($articles->statut)
        <span class="badge bg-success">À la une</span><br>
    @endif<br>
    <a href="# " class="btn btn-warning">Commander</a>
    <a href="/liste" class="btn btn-primary">Retour à la liste</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
