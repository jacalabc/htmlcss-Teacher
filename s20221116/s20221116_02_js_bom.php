<!DOCTYPE html>
<!-- root element -->
<html lang="en">
    <!-- element -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- element -->
    <!-- text -->
    <title>Document</title>
</head>
<body>
    <h1 id="myH1">test</h1>
    <script>
       getWidth = window.screen.width;
       console.log('getWidth',getWidth);

       window.alert('123');
       window.console.log('hello');

       console.log('window.location',window.location);
       console.log('window.location.host',window.location.host);
       <?php 
        $myArr = [1,2,3];

        $assocArr = [
            's1' => 'amy',
            's2' => 'bob',
            's3' => 'cat'
        ];

        $window = [
            'document' => [
                's1' => 'amy',
                's2' => 'bob',
                's3' => 'cat'
            ],
            'screen' => [
                's1' => 'amy',
                's2' => 'bob',
                's3' => 'cat'
            ],
            'location' => [
                'host' => '127.0.0.1:5500',
                's2' => 'bob',
                's3' => 'cat'
            ]
        ]

       ?>

    </script>
</body>
</html>