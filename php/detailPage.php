<?php
$includePath = "../";
include $includePath.('include/include.php');
include "../db/dbConnect.php";
include "functions/saveDetailPage.php";

if($_SESSION['usertype'] == '3'){
    header("Location: projectPage.php");
}
?>

<html>

<head>
    <title>Company - Project</title>
</head>

    <body>
      <div class="pagemargin">
        <h2 class="w3-center">Detail pagina</h2>
          <form enctype="multipart/form-data" method="post" role="form" action="<?php echo $_SERVER["PHP_SELF"];?>">

              <?php
                $schade_id = $_POST["id"];
                $query = "SELECT * FROM `schade` WHERE id like {$schade_id}";

                try
                {
                  $rows = $dbh->query($query)->fetchAll();
                  $columns_bad = $dbh->query("SHOW COLUMNS FROM schade")->fetchAll();
                } catch(Exception $e) {
                  var_dump($e->getMessage());
                }

                $count = 0;

                foreach ($columns_bad as $column) {
                  $columns[$count] = $column[0];
                  $count++;
                }

                $count = 0;

                foreach ($rows as $row) {
                  foreach ($columns as $column) {
                    if($column != "id"){
                      echo "
                        <div class=\"w3-half w3-padding-small\">
                          <label>{$column}</label>
                          <input class=\"w3-input w3-border\" type=\"text\" name=\"data[$column]\" value=\"{$row["{$count}"]}\">
                        </div>";
                      } else {
                        echo "
                          <div style=\"display: none;\" class=\"w3-half w3-padding-small\">
                            <label>{$column}</label>
                            <input class=\"w3-input w3-border\" type=\"text\" name=\"$column\" value=\"{$row["{$count}"]}\">
                          </div>";
                      }
                      $count++;
                  }
                }
               ?>
          <button type="submit" class="w3-center w3-btn w3-round w3-margin companyblue " name="Update" value="Update">Save</button>
        </form>
      </div>
    </body>

</html>