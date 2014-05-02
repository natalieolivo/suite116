<!DOCTYPE html>
<html>
	<?php include 'head.php'; ?>
	<body>
		<section class="page">
			<header>
				<?php include 'nav.php'; ?>					
			</header>
			<?php include 'email-us/main.php';?>			
		</section>
		<?php include 'scripts.php';		
		$FNAME = $_GET['fname'];
		$LNAME = $_GET['lname'];
		$ADDY = $_GET['addy'];
		$CITY = $_GET['city'];
		$STATE = $_GET['state'];
		$PCODE = $_GET['pcode'];
		$TEL = $_GET['tel'];
		$EMAIL = $_GET['email'];
		$MOBILE = $_GET['mobile'];
		$COMMENTS = $_GET['comments'];
		?>
		<script>
		$(function(){				
			// In callback this will get the saved fields state and set errors							
			S116.Form.saveValidationFields({
				FirstName : '<?=$FNAME?>',
				LastName  : '<?=$LNAME?>',
				Address   : '<?=$ADDY?>',
				City 	  : '<?=$CITY?>',
				State     : '<?=$STATE?>',
				PostCode  : '<?=$PCODE?>',
				Telephone : '<?=$TEL?>',
				Email     : '<?=$EMAIL?>',
				Mobile    : '<?=$MOBILE?>',
				Comments  : '<?=$COMMENTS?>'
			});																
		});
		</script>
			
	</body>		
</html>