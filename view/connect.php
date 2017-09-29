<form ng-hide="signup" action="controller/signin.php" method="post">
  <fieldset>
    <label>C'est moi</label>
    <input type="text" name="username" ng-model="quiestce">
  </fieldset>
  <fieldset>
    <label>La preuve</label>
    <input type="password" name="password">
  </fieldset>
  <button><i class="fa fa-check" aria-hidden="true"></i></button>
</form>

<p ng-click="signup=!signup" ng-hide="signup">Pas encore inscrit ?</p>

<form ng-show="signup" action="controller/signup.php" method="post">
  <fieldset>
    <input type="text" name="username" ng-model="quiestce" placeholder='Bienvenue'>
  </fieldset>
  <fieldset>
    <input type="password" name="password" placeholder='Mot de passe'>
  </fieldset>
  <fieldset>
    <input type="mail" name="mail" placeholder='Mail'>
  </fieldset>
  <button><i class="fa fa-check" aria-hidden="true"></i></button>
</form>

<p ng-click="signup=!signup" ng-show="signup">Déjà inscrit ?</p>
