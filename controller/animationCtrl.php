<script>
let main = document.getElementById('main');
let div = main.firstElementChild;
let BPM = <?php echo $currentsong['bpm'] ?>;
let delay = 60000/(BPM);
let angle = 0;
console.log(delay);
</script>
