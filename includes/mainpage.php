    <?php
        $result = Ev();

    ?>
    <div class="container py-3">
        <h1 class="text-center display-5">Húzások</h1>
        <p class="fs-4">
            Válassz egy évet!
        </p>
        <p class="fs-1">
            <?php while($row=mysqli_fetch_array($result))
            {
            ?>
            <a class="btn btn-primary" href="./?p=ev&evszam=<?php echo $row["ev"]; ?>" role="button">
            <?php echo $row["ev"]; ?></a>
            <?php 
            }
            ?>
        </p>
    </div>
    <!--vágás-->
    