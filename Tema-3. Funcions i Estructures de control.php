<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        
        echo '<h1>Nivell 1</h1>';
        echo '<h3>- Exercici 1</h3>';
        echo '<p>
        Programa una funciò que, donat un número qualsevol
        (per exemple,la teva edat)
        ens digui si és parell o imparell mitjançant un missatge 
        per pantalla.</p>';
    
        function isEven($num){
            if($num%2===0){
                echo 'parell!';
            } else {
                echo 'imparell!';
            }
        }
        echo 'Tengo 30 años y es un numero: ';
        isEven(30);

        echo "<br>";
        echo '<h3>- Exercici 2</h3>';
        echo '<p>
        Per jugar a el "amagatall" se\'ns ha demanat un programa que compti fins a 10. 
        Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. 
        Crea una funció que compti fins a 10, de 2 en 2, 
        mostrant cada número del compte per pantalla.</p>';
        
        function tramposo() {
            for ($i=1; $i<=10; $i++) {
                if ($i%2===0) {
                echo $i.'<br/>';}
            }
        }
        tramposo();
       
        echo '<h3>- Exercici 3</h3>';
        echo '<p>
        Imagina\'t que volem que compti fins a un nombre diferent de 10. 
        Programa la funció perquè el final del compte estigui parametritzat.</p>';
        function amagatall($finsA=15) {
            for ($i=1; $i<=$finsA; $i++){
            echo $i.'<br/>';  
            }
        }
        amagatall();

        echo '<h3>- Exercici 4</h3>';
        echo '<p>
        Per prevenir oblits a l\'utilitzar la nostra meravellosa opció "amagatall" 
        establirem un paràmetre per defecte igual a 10 a la funció 
        que s\'encarrega de fer aquest compte.</p>';

        function nOblits($fin=10) {
            for ($i=1; $i<=$fin; $i++){
                if($i%2===1){
                    echo $i.'<br/>';
                }
            }
        }
        nOblits();

        echo '<h3>- Exercici 5</h3>';
        echo '<p>
        Escriure una funciò per verificar el grau de un estudiant en d\'acord a la nota.

        Condicions

        Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
        Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
        Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
        Si la nota és menor a 33%, l\'estudiant reprovarà.</p>';
        
        function elGrauDelEstudiant($nota){
            switch($nota) {
                case $nota>=60:
                    echo 'Primera Divisió';
                    break;
                case $nota>=45 && $nota<=59:
                    echo 'Segona Divisió';
                    break;
                case $nota>=33 && $nota<=44:
                    echo 'Tercera Divisió';
                    break;
                case $nota<33:
                    echo ':(';
                    break;   
            }
            }
        elGrauDelEstudiant(60);

        echo '<h3>- Exercici 6</h3>';
        echo '<p>
        Charlie em va mossegar el dit!
        Charlie et mossegarà el dit exactament el 50% del temps.
        Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
        Consell: pot ser que la funció rand () et resulti útil.</p>';
       
        function isBitten() {
          $num = mt_rand(0, 100); 
          echo $num;
          if($num>=50) {
            echo ' % Is bitten!'; 
          } else {
             echo ' % Nice try!'; 
            
          }
        }
        isBitten();
       
    ?>
</body>
</html>