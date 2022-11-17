<h1>Test połączenia z serwerem <i><?= $servername ?></i> i bazą <i><?= $database ?></i></h1>
<p>
    <?php
    echo 'host info: ' . mysqli_get_host_info($mysqliProceduraConnection) . '<br>';
    echo 'mysqli stat: ' . mysqli_stat($mysqliProceduraConnection);
    ?>
</p>