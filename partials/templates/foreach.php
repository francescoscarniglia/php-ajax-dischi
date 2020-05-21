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
