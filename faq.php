<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>							
		<section class="page dance">
			<header>
				<?php include 'nav.php'; ?>					
			</header>
			<section class="faq"></div>					
		</section>		
		<?php include 'scripts.php';?>
		<script>
			S116.Ajax.getPageData('faq').done(S116.Ajax.afterFetch);				
		</script>
	</body>		
</html>