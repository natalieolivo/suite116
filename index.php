<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>
		<div class="uploads-mask hide"></div>
		<div class="uploads-panel hide">
		  <div>
		    <h2>Home Admin</h2>
		    <span>X</span>
		    <form id="image-upload" enctype="multipart/form-data" method="post">
		      <input type="file" name="file1" id="image-1">
		      <input type="file" name="file2" id="image-2">
		      <input type="file" name="file3" id="image-3">
		      <input type="file" name="file4" id="image-4">
		      <input class="upload-button" type="button" value="upload" />
		      <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
		      <h3 id="status"></h3>
		    </form>
		  </div>
		</div>							
		<section class="page">
			<header>
				<?php include 'nav.php'; ?>					
			</header>
			<?php include 'home.php';?>		
		</section>
		<?php include 'scripts.php';?>		
	</body>		
</html>