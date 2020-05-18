<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $matches = [
      [
        'home' => 'Los Angeles Lakers',
        'away' => 'Miami Heat',
        'point_Home' => rand(1, 130),
        'point_Away' => rand(1, 130)
      ],
      [
        'home' => 'Indiana Pacers',
        'away' => 'San Antonio Spurs',
        'point_Home' => rand(1, 130),
        'point_Away' => rand(1, 130)
      ],
      [
        'home' => 'Los Angeles Clippers',
        'away' => 'New York Knicks',
        'point_Home' => rand(1, 130),
        'point_Away' => rand(1, 130)
      ],
      [
        'home' => 'Philadelphia 76ers',
        'away' => 'Chicago Bulls',
        'point_Home' => rand(1, 130),
        'point_Away' => rand(1, 130)
      ]
    ];
  ?>
    <h1>Risultati giornata</h1>
      <ul>
          <?php for($i=0; $i < count($matches); $i++){ ?>
              <li>
                  <?php echo $matches[$i]['home']?>&ndash;
                      <?php echo $matches[$i]['away']?> |
                          <?php echo $matches[$i]['point_Home']?> &ndash;
                              <?php echo $matches[$i]['point_Away']?>
              </li>
          <?php } ?>
      </ul>
</body>
</html>