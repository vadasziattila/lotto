<?php
        $result = OtosTalalatok();

    ?>
<div class="container py-3">
    <h1 class="text-center display-5">Mikor volt ötös?</h1>
    <p class="fs-4">
        Az adatok csak 1988-tól ismertek!
    </p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Év</th>
                <th>Hét</th>
                <th>Darab</th>
                <th>HUF</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row["ID"]; ?></td>
                    <td><?php echo $row["ev"]; ?></td>
                    <td><?php echo $row["het"]; ?></td>
                    <td><?php echo $row["talalat5_db"]; ?></td>
                    <td><?php echo number_format($row["talalat5_huf"],0,"."," ")." Ft"; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>