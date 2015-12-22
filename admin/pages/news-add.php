<script src="<?php echo $base_url; ?>includes/ckeditor/ckeditor.js"></script>
<script src="<?php echo $base_url; ?>includes/ckfinder/ckfinder.js"></script>
<?php
ob_start();
?>
<form name="form1" method="post" action="">
  	  <label>Judul</label>
      <input type="text" name="judul" id="judul">
     
      <label>Feature Image (akan ditampilkan sebagai thumbnails)</label>
      <input type="text" name="photo" id="photo" onClick="window.open('<?php echo $base_url; ?>includes/imguploads/index.php','popuppage','width=600,toolbar=0,resizable=0,scrollbars=no,height=400,top=100,left=100');">
      <input type="hidden" name="ext" id="ext" />
<input type="hidden" name="nfile" id="nfile" />

<p></p>
      <label>Isi Berita</label>
      <textarea id="editor1" name="editor1" rows="10" cols="80"></textarea>
   	
      <p></p>
      <input type="submit" class="btn btn-primary" name="button" id="button" value="Tambah">
</form>
<?php
if(isset($_POST["button"]))
{
	
	date_default_timezone_set('Asia/Jakarta');
	$skrg=date("Y-m-d");
	$rs=mysql_query("INSERT INTO post_article (`title`, `featurephoto`, `post_entry`, `create_date`,`create_by`,`hit`) VALUES ('".$_POST['judul']."','".$_POST['photo']."', '".$_POST['editor1']."','".$skrg."','admin','0')") or die(mysql_error());
	
	if($rs)
	{			
		_direct("?p=news");
		
	}
}
ob_end_flush();
?>