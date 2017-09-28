<?php ?>
<script>
let player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('ytplayer', {
    events: { 'onStateChange': next }
  });
}

function jump() {
  let state = player.getPlayerState();
  let button = document.getElementById('play');
  if(state == 1) {
    player.pauseVideo();
    button.classList.remove('fa-pause');
    button.classList.add('fa-play');
  }
  else {
    player.playVideo();
    button.classList.remove('fa-play');
    button.classList.add('fa-pause');
  }
}

function next() {
  let state = player.getPlayerState();
  let button = document.getElementById('play');
  if(player.getPlayerState() == 1) {
    button.classList.remove('fa-play');
    button.classList.add('fa-pause');
  }
  if(player.getPlayerState() == 0) {
    window.location.href = 'controller/next.php';
  }
}

let main = document.getElementById('main');
let div = main.firstElementChild;
let BPM = <?php echo $currentsong['bpm'] ?>;
let delay = 60000/(BPM);
let angle = 0;
console.log(delay);

/*
rotating button :
setInterval(function() {
  let button = document.getElementById('play');
  angle++;
  button.style.transform = 'rotate('+angle+'deg)';
}, delay);
*/

function animation() {
  let div = document.getElementById('main').firstElementChild,
  style = window.getComputedStyle(div),
  flexDirection = style.getPropertyValue('flex-direction');
  switch(flexDirection) {
    case 'row':
      div.style.flexDirection = 'row-reverse';
      div.style.border = '20px solid #76c0e5';
      main.style.border = '20px solid #1940bc';
      break;
    case 'column':
      div.style.flexDirection = 'column-reverse';
      div.style.border = '20px solid #1940bc';
      main.style.border = '20px solid #76c0e5';
      break;
    case 'row-reverse':
      div.style.flexDirection = 'row';
      div.style.border = '20px solid #1940bc';
      main.style.border = '20px solid #76c0e5';
      break;
    case 'column-reverse':
      div.style.flexDirection = 'column';
      div.style.border = '20px solid #76c0e5';
      main.style.border = '20px solid #1940bc';
      break;
  }
}

setInterval(function() {animation();}, delay);

window.onYouTubeIframeAPIReady();
</script>
