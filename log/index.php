<?php 
include("../libs.php");
$getir = new IPTVClass();
$getir->require_auth('admin', '1234');
$files = array_diff(scandir("../log"), array('.', '..', "index.php"));
echo '<table>
<thead>
<tr>
<th>Title</th>
</tr>
</thead>
<tbody>';
foreach($files as $dosyalar) {
    if (strstr($dosyalar, "log")) {
        echo '<tr>
        <td><a href="../log/' . htmlentities(strip_tags($dosyalar)) . '">' . htmlentities(strip_tags($dosyalar)) . '</a></td>
        </tr>';
    }
}
echo '</tbody></table>';
?>
