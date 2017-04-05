<?php
  $company = 'Dogfish Head';
  $title = 'Arrays';
  $topic = 'Dogfish Head Beer';
  $franchise = 'Year Round Releases';

  // Let's create a simple array
  $beers = array(
    '60 Minute IPA',
    '90 Minute IPA',
    'Flesh & Blood IPA',
    'SeaQuench Ale',
    'Namaste White',
    'Indian Brown',
    'Palo Santo Marron',
    'Burton Baton',
    'Midas Touch'
  );

  // Let's create an associative array
  $beersYears = array(
    '60 Minute IPA' => 2003,
    '90 Minute IPA' => 2001,
    'Flesh & Blood IPA' => 2016,
    'SeaQuench Ale' => 2016,
    'Namaste White' => 2009,
    'Indian Brown' => 1999,
    'Palo Santo Marron' => 2007,
    'Burton Baton' => 2004,
    'Midas Touch' => 1999
  );

  // Count how many items are stored in the array $movies
  $beersLength = count($beers);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $franchise; ?></em></h1>
      <p>There are <?php echo $beersLength; ?> beers in the <em><?php echo $franchise; ?></em> calendar</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($beers as $beer) {
              echo '<li class="list-group-item">'.$beer.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($beer);
        ?>
      </ul>
      <p>The best <em><?php echo $franchise; ?></em> beer is <em><?php echo $beers[1]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> beers were released in the following years:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($beersYears as $beer => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$beer.'</em> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($beer);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>







