<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Podaj liczbę do pomnożenia: <br>
        <input type="number" name="liczbaPow" id="">
        <input type="submit" value="Oblicz" name='Power'>
    </form>
    <form action="" method="post">
        Podaj liczbę do wyliczenia silni: <br>
        <input type="number" name="liczbaSil" id="">
        <input type="submit" value="Oblicz" name='Sil'>
    </form>
    <p id="wynik"></p>
<?php
    function power($liczba){
        $wynik=$liczba*2;
        echo"Wynik podwojenia wynosi: ".$wynik;
    }
    function silnia($liczba){
        $wynik=1;
        for($i=1;$i<=$liczba;$i++){
            $wynik*=$i;
        }
        echo"Wynik silni wynosi:".$wynik;
    }
if(isset($_POST['Power'])){
  if(is_numeric($_POST['liczbaPow'])){
        $liczba1=$_POST['liczbaPow'];
        power($liczba1);
    }}
    if(isset($_POST['Sil'])){
        if(is_numeric($_POST['liczbaSil'])){
              $liczba1=$_POST['liczbaSil'];
              silnia($liczba1);
          }}

?>

</body>
</html>