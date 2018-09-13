
    <?php
    if(!isset($_GET["formato"])) {
        echo "Hoy es " . $_GET['dia'] . "/" . $_GET['mes'] . "/" . $_GET['anio'];
    }else
        echo "Hoy es " . $_GET['dia'] . " de " . date('F', mktime(0, 0, 0, $_GET['mes'], 1)) . " de " . $_GET['anio'];
    ?>

    <form>
    <span>
          <select name="dia">
            <?php
            $start_date = 1;
            $end_date   = 31;
            for( $j=$start_date; $j<=$end_date; $j++ ) {
                if($j == $_GET['dia'])
                    echo "<option selected>".$_GET['dia']."</option>";
                else
                    echo '<option value='.$j.'>'.$j.'</option>';
            }
            ?>
          </select>
        </span>
        <span>
          <select name="mes">
            <?php for( $m=1; $m<=12; ++$m ) {
                $month_label = date('F', mktime(0, 0, 0, $m, 1));
                if($m == $_GET["mes"]) {
                    $mess = $_GET["mes"];
                    echo "<option selected='$mess'";
                }
                echo "<option value='";
                    if(!isset($_GET["formato"])) {
                        echo $m;
                    }
                else{
                    echo $month_label;
                }
                echo "'>";
                    if(!isset($_GET["formato"]))
                    echo $m;
                    else
                        echo $month_label;
                    ?></option>
            <?php } ?>
          </select>
        </span>
        <span>
          <select name="anio">
            <?php
            for($i = 1900; $i < 2101; $i++) {
                if($i == $_GET["anio"   ]) {
                    if(!isset($_GET["formato"]))
                    echo "<option selected>".substr($_GET["anio"],2,2)."</option>";
                    else
                        echo "<option selected>".$_GET["anio"]."</option>";
                }
                else {

                    echo "<option>".substr($i,2,2)."</option>";
                }
            }
            ?>
          </select>
        </span>
        <br>
    </form>

