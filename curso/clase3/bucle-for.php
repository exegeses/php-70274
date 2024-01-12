<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Bucle for()</h1>
<?php
    //for( inicio; condicion; incremento )
    for( $i = 1; $i <= 15; $i++ ){
        echo $i, '<br>';
    }
?>


    </main>
<?php
include '../layouts/footer.php';
