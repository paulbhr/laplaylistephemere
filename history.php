<h1>Les derniers titres écoutés</h1>
<table>
<?php
foreach(array_reverse($_SESSION['played']) as $url) {
  $song = $bdd->query("SELECT artist, title, url FROM song WHERE url='$url'")->fetch();
  $artist = $song['artist'];
  $title = $song['title'];
  $link = $song['url'];
?>
  <tr>
    <td><?php echo $artist ?> - <?php echo $title ?></td>
    <td>
      <input id='<?php echo $link ?>' class='share' type='text' value='https://youtu.be/<?php echo $link ?>'>
      <button onclick='copy("<?php echo $link ?>")'><i class="fa fa-share-alt" aria-hidden="true"></i></button>
    </td>
    <td>
      <form action='controller/lifepoints.php' method='post'>
        <button name='lifepoints' value='3'><i class="fa fa-star" aria-hidden="true"></i></button>
      </form>
    </form></td>
    <td>
      <form action='controller/lifepoints.php' method='post'>
        <button name='lifepoints' value='-3'><i class="fa fa-trash" aria-hidden="true"></i></button>
      </form>
    </td>
  </tr>
<?php
}
?>
</table>
<a ng-click='history=!history'><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>
