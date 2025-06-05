<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.scss">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="listing-title__container">
    <h1 class="listing-title">Liste des produits</h1>
  </div>

  <navbar class="navbar">
    <a href="/">Accueil</a>
  </navbar>

  <table class="listing">

    <tr>

      <th>Id</th>
      <th>Titre</th>
      <th>Série</th>
      <th>Auteur</th>
      <th>Photo</th>

    </tr>

    <?php foreach ($products as $row): ?>

      <tr>

        <td> <?= $row["product_id"]; ?> </td>
        <td> <?= $row["product_name"]; ?> </td>
        <td> <?= $row["product_serie"]; ?> </td>
        <td> <?= $row["product_author"]; ?> </td>
        <td> <?= $row["product_image"]; ?> </td>

        <td> <a href="/bande-dessinee/<?= $row["product_id"]; ?>" class="product-pencil">&#9998;</a> </td>

      </tr>

    <?php endforeach ?>

  </table>

</body>

</html>