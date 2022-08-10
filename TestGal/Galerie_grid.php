<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Gal_grid.css">
    <title>Document</title>
</head>
<body>
  <h1>Galerie photos</h1>
  <hr>
    <div class="image-mosaic">
    <?php
      require('connexion.php');
      $query = "SELECT * FROM galerie ORDER BY id DESC LIMIT 15";
      $req = $connexion->prepare($query);
      $req->execute();
      $gal = $req->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php foreach($gal as $value): ?>
      <div
          class="card <?= $value['class'] ?>"
          style="background-image: url('../../AdminPanel/img/<?= $value['img'] ?>');"
          onclick="open_window(`../../AdminPanel/img/<?= $value['img'] ?>`)"
        >
        <p class="text-card"><?= $value['description'] ?><br><a class="lien-sup" href="#">Par ici</a></p>
      </div>
      <?php endforeach; ?>
        <div
          class="card card-tall card-wide"
          style="background-image: url('https://picsum.photos/id/564/1200/800')"
          onclick="open_window('https://picsum.photos/id/564/1200/800')"
        >
        <p class="text-card">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse ut voluptatum iure cupiditate dignissimos, unde ex natus, quas quod culpa aliquid nisi deleniti voluptatem exercitationem sunt et non pariatur est.<br><a href="#">Par ici</a></p>
      </div>
        <div
          class="card card-tall"
          style="background-image: url('https://picsum.photos/id/566/800/530')"
        ><p class="text-card">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nobis explicabo laudantium est repellendus asperiores consequatur fuga tempore ipsam. Voluptatum rerum repellat unde, explicabo eaque ullam aliquam aut quam nam.</p></div>
        <div
          class="card"
          style="background-image: url('https://picsum.photos/id/575/800/530')"
        ><p class="text-card"></p></div>
        <div
          class="card"
          style="background-image: url('https://picsum.photos/id/626/800/530')"
        ><p class="text-card"></p></div>
        <div
          class="card"
          style="background-image: url('https://picsum.photos/id/667/800/530')"
        ><p class="text-card"></p></div>
        <div
          class="card"
          style="background-image: url('https://picsum.photos/id/678/800/530')"
        ><p class="text-card"></p></div>
        <div
          class="card card-wide"
          style="background-image: url('https://picsum.photos/id/695/800/530')"
        ><p class="text-card"></p></div>
        <div
          class="card"
          style="background-image: url('https://picsum.photos/id/683/800/530')"
        ><p class="text-card"></p></div>
        
      </div>
  
      <script>
        function open_window(votre_page)
				{
					var hauteur_popup=800;
					var H = (screen.height - hauteur_popup) / 2;
					var largeur_popup=800;
					var L = (screen.width - largeur_popup) / 2;
					pop_up = window.open(votre_page,"Popup","status=no,location=no,scrollbars=yes,resizable=no,height="+hauteur_popup+",width="+largeur_popup+",top="+H+",left="+L);
				}
      </script>
</body>
</html>