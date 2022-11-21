<?php
$result = Adatlap();
$row = mysqli_fetch_array($result);
?>

<div class="container py-3">
    <h1 class="text-center display-5"><?php echo $row["ev"] . " - " . $row["het"] . ". hét"; ?></h1>
    <div class="row">
        <div class="col-md">
            <p class="fs-4">
                ötös lottó nyerőszámai: <?php echo $row["szam1"] . ", " . $row["szam2"] . ", " . $row["szam3"] . ", " . $row["szam4"] . ", " . $row["szam5"]; ?>
            </p>
        </div>
        <div class="col-md">
            <?php if ($row["ev"] > 1998) { ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>DARAB</th>
                            <th>HUF</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Öt találatos:</td>
                            <td><?php echo $row["talalat5_db"]; ?></td>
                            <td><?php echo number_format($row["talalat5_huf"],0,"."," ") . " Ft"; ?></td>
                        </tr>
                        <tr>
                            <td>Négy találatos:</td>
                            <td><?php echo $row["talalat4_db"]; ?></td>
                            <td><?php echo number_format($row["talalat4_huf"],0,"."," ") . " Ft"; ?></td>
                        </tr>
                        <tr>
                            <td>Három találatos:</td>
                            <td><?php echo $row["talalat3_db"]; ?></td>
                            <td><?php echo number_format($row["talalat3_huf"],0,"."," ") . " Ft"; ?></td>
                        </tr>
                        <tr>
                            <td>Két találatos:</td>
                            <td><?php echo $row["talalat2_db"]; ?></td>
                            <td><?php echo number_format($row["talalat2_huf"],0,"."," ") . " Ft"; ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php } else { ?>

                <h1>A nyereményekről nincsen adat...</h1>

            <?php } ?>
        </div>
    </div>
</div>