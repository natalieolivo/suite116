<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>							
		<section class="page kids">
			<header>
				<?php include 'nav.php'; ?>					
			</header>
			<section class="kids"></div>
		</section>		
		<?php include 'scripts.php';?>
		<script>			
			S116.Ajax.getPageData('kids').done(function(data){
				S116.Ajax.afterFetch(data).done(S116.Form.setValidationFields, S116.Form.checkForErrors);
			});				
		</script>		
	</body>		
</html>