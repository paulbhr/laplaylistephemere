<div id='main'>
  <div class='full-container'>
    <div class='quart-col'>
      <img src='view/gal/ramoloss.svg'>
      <img src='view/gal/yolo.svg'>
      <img src='view/gal/carapuce.svg'>
    </div>
    <div class='half-col'>
      <section id='info' class='row'>
        <h1>
          <?php echo $currentsong['artist']; ?> - <?php echo $currentsong['title']; ?>
        </h1>
        <input id='share' class='share' type='text' value='https://youtu.be/<?php echo $currentsong["url"] ?>'>
        <button onclick='copy("share")'><i class="fa fa-share-alt" aria-hidden="true"></i></button>
        <form action='controller/lifepoints.php' method='post'>
          <button name='lifepoints' value='3'><i class="fa fa-star" aria-hidden="true"></i></button>
        </form>
        <form action='controller/lifepoints.php' method='post'>
          <button name='lifepoints' value='-3'><i class="fa fa-trash" aria-hidden="true"></i></button>
        </form>
      </section>
      <section id='control' class='row'>
        <button ng-click='history=!history'><i class="fa fa-history" aria-hidden="true"></i></button>
        <button id='playbutton' onclick='jump()'><i id='play' class="fa fa-play" aria-hidden="true"></i></button>
        <form action='controller/next.php' method='post'>
          <input type="hidden" name="lifepoints" value="-1">
          <button name='lastplayed' value='<?php echo $currentsong["url"] ?>'><i class="fa fa-step-forward" aria-hidden="true"></i></button>
        </form>
      </section>
      <img src='view/gal/typo.svg' id='logo' class='row'>
    </div>
    <div class='quart-col'>
      <img src='view/gal/carapuce.svg'>
      <img src='view/gal/yolo.svg' style='transform: rotate(180deg)'>
      <img src='view/gal/ramoloss.svg'>
    </div>
  </div>
</div>
<div id='history' ng-show='history'>
  <?php include 'history.php'; ?>
</div>
<div id='player'>
  <iframe id="ytplayer" type="text/html" src="https://www.youtube.com/embed/<?php echo $currentsong['url'] ?>?autoplay=<?php echo $autoplay?>&controls=1&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
</div>
