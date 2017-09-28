<section id='playlist' ng-show='playlist'>
  <table>
    <thead>
      <th>Titre</th>
      <th>Durée</th>
      <th>BPM</th>
      <th>URL</th>
      <th></th>
      <th></th>
    </thead>
    <tbody>
    <?php
    foreach($songs as list($id, $title, $artist, $time, $bpm, $url)) :
      $string = str_replace(' ', '', $title);
      $str = substr($string, 0, 3);
    ?>
      <tr ng-hide="<?php echo $str?>">
        <td><?php echo $artist ?> <br> <?php echo $title ?></td>
        <td><?php echo $time ?></td>
        <td><?php echo $bpm ?></td>
        <td><?php echo $url ?></td>
        <td><form action="controller/delete.php" method="post"><input type="hidden" name="id" value="<?php echo $id ?>"><button><i class="fa fa-trash" aria-hidden="true"></i></button></form></td>
        <td>
          <button ng-click="<?php echo $str;?>=!<?php echo $str;?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>
        </td>
      </tr>
      <tr ng-show="<?php echo $str ?>">
          <form class="edit" action="controller/edit.php" method="post">
            <td><input type="text" name="artist" value="<?php echo $artist ?>"></td>
            <td><input type="text" name="title" value="<?php echo $title ?>"></td>
            <td><input type="text" name="time" value="<?php echo $time ?>"></td>
            <td><input type="text" name="bpm" value="<?php echo $bpm ?>"></td>
            <td><input type="text" name="url" value="<?php echo $url ?>"></td>
            <td><button name="id" value="<?php echo $id ?>">Edit</button></td>
          </form>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</section>

<section id='addform' ng-show='addform'>
  <article>
    <h1>Rechercher URL</h1>
    <fieldset>
      <input type='text' name='search' value='' id='search'>
      <button onclick="search()"><i class="fa fa-search" aria-hidden="true"></i></button>
    </fieldset>
  </article>
  <div id='result'></div>
  <form action='controller/add.php' method='post'>
    <input type='text' name='artist' value='' placeholder='Artist'>
    <input type='text' name='title' value='' placeholder='Title'>
    <fieldset>
      <input type='number' name='time' value='' placeholder='Time'>
      <input type='number' name='bpm' value='' placeholder='BPM'>
    </fieldset>
    <input type='text' name='url' value='' placeholder='URL'>
    <button><i class="fa fa-plus" aria-hidden="true"></i></button>
  </form>
</section>
