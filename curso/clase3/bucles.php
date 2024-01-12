<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Bucles en PHP</h1>

        <select name="dia">
<?php
        $n = 1;
        while ( $n < 32 ) {
?>
            <option value="<?= $n ?>"><?= $n ?></option>
<?php
            $n++;// $n = $n + 1
        }
?>
        </select>     
        

    </main>
<?php
include '../layouts/footer.php';
