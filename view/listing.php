<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Listing</h1>
  <a href="/">Accueil</a>
  <a href="/bandes-dessinees">Détails</a>

  <table border="1">

    <?php
    for ($i = 0; $i < count($products); $i++):
      ?>

      <tr>
        <?php foreach ($products[$i] as $key => $value): ?>

          <td> <?= $value ?>
          </td>

        <?php endforeach ?>

      </tr>


    <?php endfor ?>

  </table>

</body>

</html>