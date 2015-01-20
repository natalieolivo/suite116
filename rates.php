<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>							
		<section class="page">
			<header>
				<?php include 'nav.php'; ?>					
			</header>
			<section class="rates"></div>			
		</section>
		<?php include 'scripts.php';?>
		<script>
			S116.Ajax.getPageData('rates').done(S116.Ajax.afterFetch);		
		</script>
	</body>		
</html>