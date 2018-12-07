
<?php
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <lebel>SKU</lebel>
      <input id="code" type="text" name="code" maxlength="100" required onBlur="checkAvailability()"><b id="available"></b>	        
      <button name="submit">SUBMIT</button>
    </form>
    ?>

	<script>
				function checkAvailability() {
			jQuery.ajax({
			url: "check.php",
			data:'code='+$("#code").val(),
			type: "POST",
			success:function(data){
			$("#available").html(data);
			},
			error:function (){}
			});
			}
	</script>
