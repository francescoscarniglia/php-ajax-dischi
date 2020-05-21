<?php foreach ($singles as $single) {?>
  <div class="album">
    <ul class="single-list">
      <li>
        <img src=" <?php echo $single["cover"]; ?> " alt="<?php echo $single["track"] ?>">
        <span><h2> <?php echo $single["artist"]; ?></h2></span>
        <span><h3> <?php echo $single["track"] ?> </h3></span>
        <span><h4> <?php echo $single["album"] ?> </h4></span>
        <span><h4> <?php echo $single["year"] ?> </h4></span>
      </li>
    </ul>
  </div>
<?php } ?>
