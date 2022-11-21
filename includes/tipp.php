<?php 
    $random_szamok = array();
    for ($i=0; $i <5 ; $i++) {
        do {
            $num = rand(1,90);
        } while (in_array($num, $random_szamok));
        $random_szamok[$i] = $num;
    }
    sort($random_szamok);

?>

<div class="container py-3">
    <h1 class="text-center display-5">Számtippelő</h1>
    <div class="row">
        <div class="col-md">
            <p class="fs-4">
                Nyerőszám tippek: 
                <?php echo join(", ",$random_szamok);?>
            </p>
        </div>
    </div>
</div>