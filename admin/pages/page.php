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
if(isset($_GET['id']))
{
$q=mysql_query("Select * from page where sha1(id_page)='".$_GET['id']."'");
$r=mysql_fetch_array($q);
}
?>
<form action="" method="post">

<label>Judul</label>
<input type="text" name="judul" class="input-large" value="<?php echo $r['title']; ?>"/>

<label>Deskripsi</label>
<textarea id="editor1" name="editor1" rows="10" cols="80"> <?php echo $r['post_entry']; ?></textarea>
<input type="submit" class="btn btn-primary" name="button" id="button" value="Update">
</form>

        
<?php
if(isset($_POST['button']))
{
	$q=mysql_query("Update page SET title='".$_POST['judul']."',post_entry='".$_POST['editor1']."' Where sha1(id_page)='".$_GET['id']."'");
	if($q)
	{
		_direct("?p=promo");
	}
}
 ?>