
<form action="ej12b.php" method="get">
<span>
      <select name="dia">
        <?php
        $start_date = 1;
        $end_date   = 31;
        for( $j=$start_date; $j<=$end_date; $j++ ) {
            if($j == date("d"))
            echo "<option selected='".date("d")."'";
            echo '<option value='.$j.'>'.$j.'</option>';
        }
        ?>
      </select>
    </span>
<span>
      <select name="mes">
        <?php for( $m=1; $m<=12; ++$m ) {
            $month_label = date('F', mktime(0, 0, 0, $m, 1));
            if($m == date("m"))
                echo "<option selected='".$m."'";
            ?>
            <option value="<?php echo $m; ?>"><?php echo $month_label; ?></option>
        <?php } ?>
      </select>
    </span>
<span>
      <select name="anio">
        <?php
        for($i = 1900; $i < 2101; $i++) {
            if($i == date("Y")) {
                echo "<option selected>".date("Y")."</option>";
            }
            else {
                echo "<option>$i</option>";
            }
        }
        ?>
      </select>
    </span>
    <br>
    <input type="checkbox" name="formato" value="1"> Formato largo<br>
    <input type="submit">
</form>