<?php
$nama =     $_POST['nama'];
$gender =   $_POST['gender'];
$agama =    $_POST['agama'];
$hobi =     $_POST['hobi'];
$alamat =   $_POST['alamat'];

echo "<table border = '1'>"
. "<tr><td>NAMA</td><td>$nama</td></tr>"
. "<tr><td>JENIS KELAMIN</td><td>$gender</td></tr>"
. "<tr><td>AGAMA</td><td>$agama</td></tr>"
. "<tr><td>HOBI</td><td>";
foreach ($hobi as $h) {
  echo $h. ' ' ;
}
echo  "</td></tr>"

. "<tr><td>ALAMAT</td><td>$alamat</td></tr>"
."</table>";
?>
