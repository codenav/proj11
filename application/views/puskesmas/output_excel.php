<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=exceldata.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<table border='1' width="70%">
<tr>
<td>ID</td>
<td>TITLE</td>
<td>AUTHOR</td>
<td>email</td>
</tr>

<?php
  $i=1;
if ($excel > 0 ) {

foreach ($excel as $news_item) { ?>
  <tr>
    <td align="center"><?php echo $i; ?></td>
    <td><?php echo $news_item->no_surat_izin; ?></td>
    <td><?php echo $news_item->alamat; ?></td>
  </tr>

<?php $i++;} } ?>

</table>
