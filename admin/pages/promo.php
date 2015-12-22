<script src="<?php echo $base_url; ?>includes/ckeditor/ckeditor.js"></script>
<script src="<?php echo $base_url; ?>includes/ckfinder/ckfinder.js"></script>

   <script>
$(function() {
$( "#datepicker" ).datepicker();
});
$(function() {
$( "#datepicker2" ).datepicker();
});
</script>
<style>
.ui-datepicker td {
    border: 1px solid #CCC;
    padding: 0;
}

.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
    border: solid #FFF;
    border-width: 1px 0 0 1px;
}

</style>
<?php
$q=mysql_query("Select * from promote");
$r=mysql_fetch_array($q);
?>
<form action="" method="post">
<label>Tipe Villa</label>
				<select name="jenis" class="required" id="selectBox">

					<option value="">- silakan pilih -</option>
                    <?php
					$q2=mysql_query("Select * from class");
					while($r2=mysql_fetch_array($q2))
					{
					?>
					<option value="<?php echo $r2['idclass']; ?>"><?php echo $r2['title']; ?></option>
                    <?php
					}
					?>
				</select>
<label>Judul Promo</label>
<input type="text" name="judul" class="input-large" value="<?php echo $r['title']; ?>"/>
<label>Diskon (dalam persen)</label>
<input type="text" name="diskon" class="input-small" value="<?php echo $r['discount']; ?>"/>%<br />
Dari <input name="tgl1" type="date" id="datepicker" value="<?php echo $r['start_date']; ?>"> Hingga <input name="tgl2" type="date" id="datepicker2" value="<?php echo $r['end_date']; ?>">
<label>Deskripsi</label>
<textarea id="editor1" name="editor1" rows="10" cols="80"> <?php echo $r['description']; ?></textarea>
<input type="submit" class="btn btn-primary" name="button" id="button" value="Update">
</form>

        
<?php
if(isset($_POST['button']))
{
	$q=mysql_query("Update promote SET idclass='".$_POST['jenis']."',description='".$_POST['editor1']."',title='".$_POST['judul']."',start_date='".$_POST['tgl1']."',end_date='".$_POST['tgl2']."',discount='".$_POST['diskon']."'");
	if($q)
	{
		_direct("?p=promo");
	}
}
 ?>