<?php
  $main_css = 'dist/css/main.css';
    // ref singles
    $singles = [
        [
          'cover' => 'https://images-na.ssl-images-amazon.com/images/I/71JuNbWD2bL._AC_SX679_PJautoripBadge,BottomRight,4,-40_OU11__.jpg',
          'artist' => 'the queen',
          'track' => 'under pressure',
          'album' => 'Sheer Heart Attack',
          'year' => '1974'
        ],
        [
          'cover' => 'https://m.media-amazon.com/images/I/81yo5sz9-cL._SS500_.jpg',
          'artist' => 'the queen',
          'track' => 'under pressure',
          'album' => 'Sheer Heart Attack',
          'year' => '1974'
        ],
    ];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo $main_css; ?>">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>php ajax dischi | Francesco Scarniglia</title>
 </head>
 <body>
<div id="app">
  <header>
    <div class="logo">
      here logo
    </div><!-- logo -->
  </header>
  <main class="content">

    <?php foreach ($singles as $single) {?>
      <div class="album">
        <ul>
          <li>
            <img src=" <?php echo $single["cover"]; ?> " alt="poster">
          </li>
          <li>
            <h2> <?php echo $single["artist"]; ?></h2>
          </li>
          <li>
            <h3> <?php echo $single["track"] ?> </h3>
          </li>
          <li>
            <h4> <?php echo $single["album"] ?> </h4>
          </li>
          <li>
            <h4> <?php echo $single["year"] ?> </h4>
          </li>
        </ul>
      </div>
    <?php } ?>



  <footer class="main-footer">
  here footer
  </footer> <!-- footer -->

</div><!-- app -->



 </body>
 </html>
