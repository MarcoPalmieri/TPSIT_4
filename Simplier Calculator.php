<!DOCTYPE HTML>  
<a href="../../../../F:/workflow.html"></a>
<html>
<body style="background-color:#093145;">
</body>
<head>
<style>
.error {color: #FFFF00;}
</style>
</head>

  <?php
  $N1Err=$N2Err=$OpErr="";
  $n1=$n2=$operazione="";
  $c1=$c2=$c3=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //Controllo dei dati da inserire e impostazione degli errori
    if( empty($_POST['n1'])){
        $N1Err = "Primo numero richiesto" ;
    } else {
        if (is_numeric($_POST['n1'])){
            $n1=test_input($_POST['n1']);
            $c1=1;
        } else {
            $N1Err= "Non un numero" ;
        }
    }
    if( empty($_POST['n2'])){
        $N2Err = "Secondo numero richiesto" ;
    } else {
        if (is_numeric($_POST['n2'])){
       $n2=test_input($_POST['n2']);
       $c2=1;
        } else {
            $N2Err = "Non un numero" ;
        }
    }
    if( empty($_POST['Operazione'])){
        $OpErr = "Tipo di operazione richiesta" ;
    } else {
        $operazione=test_input($_POST['Operazione']);
        $c3=1;
    }
}
  //Funzione di controllo dei dati
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
  ?>

<form style="color:white;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <h1 style="color:white;">Calcolatrice</h1>
    <br>
    <p><span class="error">* required field.</span></p>
    Primo numero: <input type="text" name="n1" value="<?php echo $n1;?>">
    <span class="error">* <?php echo $N1Err;?></span>
    <br>
    Secondo numero: <input type="text" name="n2" value="<?php echo $n2;?>">
    <span class="error">* <?php echo $N2Err;?></span>
    <br>
    Operazione:
    <input type="radio" name="Operazione" <?php if (isset($operazione) && $operazione=="Addizione") echo "checked";?> value="Addizione">Addizione
    <input type="radio" name="Operazione" <?php if (isset($operazione) && $operazione=="Sottrazione") echo "checked";?> value="Sottrazione">Sottrazione
    <input type="radio" name="Operazione" <?php if (isset($operazione) && $operazione=="Moltiplicazione") echo "checked";?> value="Moltiplicazione">Moltiplicazione
    <input type="radio" name="Operazione" <?php if (isset($operazione) && $operazione=="Divisione") echo "checked";?> value="Divisione">Divisione
    <span class="error">* <?php echo $OpErr;?></span><br>
    <input style="margin-left: 2.3cm;" type="radio" name="Operazione" <?php if (isset($operazione) && $operazione=="Potenza") echo "checked";?> value="Potenza">Potenza
    <input type="radio" name="Operazione" <?php if (isset($operazione) && $operazione=="Radice") echo "checked";?> value="Radice">Radice
    <input type="radio" name="Operazione" <?php if (isset($operazione) && $operazione=="Logaritmo") echo "checked";?> value="Logaritmo">Logaritmo
    <br><br>
    <input type="submit">
    <br>
    <br>
</form>


</html> 

<?php 
    
    //controllo se i dati inseriti erano corretti e switch per ogni operazione
    if($c1 === 1&&$c2 === 1&&$c3 === 1){
        switch ( $operazione ) {
            
            case Addizione : 
                $Risultato= $n1 + $n2 ;
                echo  '<div style="color:white"> Risultato: ' . $Risultato . '</div>';
            break;
        
            case Sottrazione :
                $Risultato= $n1 - $n2 ;
                echo '<div style="color:white"> Risultato: ' . $Risultato . '</div>';
            break;
        
            case Moltiplicazione :
                $Risultato= $n1 * $n2 ;
                echo '<div style="color:white"> Risultato: ' . $Risultato . '</div>';
            break;
        
            case Divisione : 
                $Risultato= $n1 / $n2 ;
                echo '<div style="color:white"> Risultato: ' . $Risultato . '</div>';
            break;
            
            case Potenza :
                $Risultato= pow ( $n1, $n2);
                echo '<div style="color:white"> Risultato: ' . $Risultato . '</div>';
            break;
            
            case Radice :
                $Risultato= pow($n1 , 1/$n2);
                echo '<div style="color:white"> Risultato: ' . $Risultato . '</div>';
            break;
        
            case Logaritmo :
                $Risultato= log($n1,$n2);
                echo '<div style="color:white"> Risultato: ' . $Risultato . '</div>';
            break;
        
        }
    }