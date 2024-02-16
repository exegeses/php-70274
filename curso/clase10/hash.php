<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Hashear ( encriptar ) un dato</h1>

<?php
        $datoSinEncriptar = 'adfg';
        $datoHash = password_hash( $datoSinEncriptar, PASSWORD_DEFAULT );
        echo $datoHash;
            echo '<br>';
        $datoHash = password_hash( $datoSinEncriptar, PASSWORD_DEFAULT );
        echo $datoHash;
?>

    </main>
<?php
include '../layouts/footer.php';
