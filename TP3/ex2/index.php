<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

    <title>TP3</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</head>
<body>
<h1>Please select the course you want to check !</h1>
    <form action="" method="get">
        
        <label class ="form-check-label" for="web">Web</label>
        <input  class ="form-check-input" type="radio" name="learning" id="web" value="web" required>
        <label class ="form-check-label" for="databases">Databases</label>
        <input class ="form-check-input" type="radio" name ="learning" id ="databases" value="db" required>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php 
        $tableau = [
            "web" => [
                "PHP" => ["lien" => "https://www.php.net/","avis" =>"*****" ],
                "HTML" => ["lien" => "https://www.w3schools.com/html/default.asp","avis" =>"****" ],
                "JavaScript" => ["lien" => "https://www.javascript.com/","avis" =>"**" ],
                "CSS" => ["lien" => "https://www.w3schools.com/css/","avis" =>"****" ]
            ]
            ,

            "db" => [
                "MySQL" =>  ["lien" => "https://www.mysql.com/","avis" =>"*****" ],
                "PostgreSQ" =>  ["lien" => "https://www.postgresql.org","avis" =>"*****" ],
                "Oracle" =>  ["lien" => "https://www.oracle.com/","avis" =>"****" ],
                "DB2" => ["lien" => "https://www.ibm.com/products/db2","avis" =>"****" ],

            ]

            ];
                if (array_key_exists("learning",$_GET)){
                    echo "<table>         <thead>
                    <th>Nom</th>
                    <th>Lien</th>
                    <th>Avis</th>
                </thead>";
                    foreach ($tableau[$_GET["learning"]] as $key => $value ){
                        echo "<tr>";
                        echo "<td> $key </td>";
                       foreach ($value as $key1 => $value1){
                       echo "<td>
                            $value1
                        </td>";
                       }
                        echo "</tr>";
                    }
                    echo "</table>";

                }

    
    ?>
</body>
<style>
    body{
        width : 70%;
        margin : 10% auto;
    }
    h1 {
        text-align:center;
        margin-bottom : 10%;
        
    }
    form{
        width : 90%;
        margin:auto;
        text-align:center;
    }
    form input {
        margin-left:15px;
        margin-right : 30px;
    }
    form input[type ="submit"]{
        margin-top : 30px;
        padding : 10px 40px;
        font-weight : 600;
    }
    table{
        margin :10% auto;
    }
    th , td{
        border : 1px solid black;
        padding : 10px;
        text-align : center;
    }
</style>
</html>