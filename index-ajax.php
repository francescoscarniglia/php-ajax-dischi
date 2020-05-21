<?php
    $header = '/partials/templates/header.php';
    $foreach = '/partials/templates/foreach.php';
    $data = '/partials/templates/data.php';
    $main_css = 'dist/css/main.css';
    $main_js = 'dist/js/main.js';
    include __DIR__ . $data;
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
  <?php
    include __DIR__ . $header;
   ?>
  <main class="content">
    <div class="album">
      <ul class="single-list">

      </ul>
    </div>

  </main>

  <footer class="main-footer">

  </footer> <!-- footer -->
</div><!-- app -->

<!-- Handlebars Templates -->
    <script id="template" type="text/x-handlebars-template">
        <li>
            <img src="{{ cover }}" alt="{{ title }}">
            <span>{{ track }}</span>
            <span>{{ artist }}</span>
            <span>{{ album }}</span>
            <span>{{ year }}</span>
        </li>
    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
<script src='<?php echo $main_js; ?>'>
</script>
 </body>
 </html>
