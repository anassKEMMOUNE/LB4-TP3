<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</head>
<body>
    <form  method= "get">
    <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" name ="Name">
</div>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Surname" aria-label="Surname" aria-describedby="basic-addon1" name ="Surame">
</div>


<div class="input-group mb-3">
  <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2" name ="Email">
</div>


<div class="input-group">
  <span class="input-group-text">Object</span>
  <textarea class="form-control" aria-label="With textarea" name ="text"></textarea>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="cat" id="flexRadioDefault2" value="après-vente" checked>
  <label class="form-check-label" for="flexRadioDefault2">
  Service après-vente
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="cat" id="flexRadioDefault1" value ="techniques">
  <label class="form-check-label" for="flexRadioDefault1">
  Service techniques
  </label>
</div>
<input type="submit" value="Submit">

    </form>
    <body>
    <?php
    if (array_key_exists("Name", $_GET)){
        echo "name ",$_GET["Name"],"<br>";
        echo "surname " ,$_GET["Surame"],"<br>";
        echo "Email ",$_GET["Email"],"<br>";
        echo "Object ",$_GET["text"],"<br>";
        echo "Service ",$_GET["cat"],"<br>";
    
    }

    ?>
</body>
<style>
    body{
        width : 70%;
        margin : 20% auto;
    }
</style>
</html>