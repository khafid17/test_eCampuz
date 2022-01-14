<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $kelipatan1 = 3;
		$kelipatan2 = 5;
 
		for ($i= 1; $i <= 50; $i++) { 
			if ( $data = $i % $kelipatan1 == 0 ) {
				echo 'Foo ' . '<br>';
			}elseif ( $data = $i % $kelipatan2 == 0 ) {
				echo 'Bar ' . '<br>';
                 
            }else{
				echo 'FooBar ' . '<br>';
            }
		}
    ?>
</body>
</html>