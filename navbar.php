<nav>
  <section id='login' ng-show='login'>
    <?php
    if(!isset($_SESSION['login'])) { ?>
      <?php
      include 'connect.php';
    } else { ?>
    <form method='post' action='controller/logout.php'>
      <button>Déconnexion</button>
    </form>
    <?php };?>
  </section>
  <section id='userpannel'>
    <button ng-click='login=!login'>
      <i class="fa fa-user-circle-o" aria-hidden="true"></i> <?php if(isset($_SESSION['login'])) {
        echo $_SESSION['login'];
      } else {
        echo 'Connexion';
      }?>
    </button>
    <?php if($_SESSION["adminstatus"] == 1) { ?>
    <button ng-click='playlist=!playlist'><i class="fa fa-list-ul" aria-hidden="true"></i></button>
    <button ng-click='addform=!addform'><i class="fa fa-plus" aria-hidden="true"></i></button>
  <?php }; ?>
  </section>
  <section id='links'>
    <a ng-click='about=!about' class='white'><i class="fa fa-question-circle" aria-hidden="true"></i></a>
    <a ng-click="licence=!licence" class='white'><i class="fa fa-info-circle" aria-hidden="true"></i></a>
    <a><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a><i class="fa fa-twitter" aria-hidden="true"></i></a>
  </section>
</nav>
<div id='backoffice'>
  <?php include 'crud.php'; ?>
</div>
<div id='modal'>
  <?php include 'guide.php'; ?>
</div>
