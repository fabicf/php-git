<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is some text:
    <?php 
        //variables
        $name = 'John';
        $age = 30;
        echo $name;
        $name = 'John'; // does overwritte

        //constant
        define('LASTNAME', 'Doe')
        //define('LASTNAME', 'Smith') not overwritte
    ?>  


   <div>
    <?php
        echo "Hello from PHP";
       
        echo $name;       
    ?>
    </div>
    <div>
        This is my age: <?php echo $age?>
    </div>
    <div>
        This is my name: <?php echo $name?>
    </div>
    <div>
        This is my last name: <?php echo LASTNAME ?>
    </div>
    <div>
     <?php 
        $stringOne = 'my email is ';
        $stringTwo = 'john@gmail.com';
        $dogsName = 'Bob';
        $dogsAge = 5;

        echo $stringOne . $stringTwo;
        echo 'my dogs name is '.$dogsName; // single quotes
        echo "my dogs age is $dogsAge"; // double quotes
        echo $dogsName[0];

        echo strlen($dogsName);
    ?>
    </div>
    <div>
        <?php
            //arrays
            $people = ['John', 'Smith', 'Eva'];
            echo $people[1];
            $ages = array(22, 33, 55);
            echo $ages[2];
            
            print_r($ages);
            $ages[2] = 56;
            print_r($ages);
            $ages[] = 60;
            print_r($ages);
            
            array_push($ages, 80);
            print_r($ages);

            echo count($ages);
            
            $idCard = array_merge($people, $ages);
            print_r($idCard);

        ?>
    </div>

    <div>
        <?php
            for($i = 0; $i < 5; $i++){

                echo 'bla' . '<br />';


            }
        ?>
    </div>
    <div>
        <?php
        $products = [
            ['name'=> 'banana', 'price'=> 25],
            ['name'=> 'grape', 'price'=> 15],
            ['name'=> 'egg', 'price'=> 20]
        ]
        ?>

        <h1>Products</h1>
        <ul>
            <?php foreach($products as $product){ ?>
                
                <h3><?php echo $product['name']; ?> </h3>
                <p><?php echo $product['price']; ?> </p>

            <?php } ?>
        </ul>


    
    </div>

</body>
</html>