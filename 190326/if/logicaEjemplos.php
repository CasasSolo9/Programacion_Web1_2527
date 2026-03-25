   <?php 

        $edadLogica = $_GET['edadForm'];
        echo $edadLogica;

        if($edadLogica >= 18){
            echo "<p>Puedes pasar por que tu edad es de ".$edadLogica."</p>";
        }else{
            echo "<h2>No puedes pasar eres menor por que tu edad es: ".$edadLogica."</h2>";
        }
        echo "<a href='ejemplo.php'>Regresar a la pagina anterior</a>";

        
    
    ?>