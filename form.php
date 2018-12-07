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
<?php
<form class= "w3-card-16 w3-col m6 w3-round-large w3-margin" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <lebel>SKU</lebel>
      <input class="w3-input w3-round-large w3-margin-bottom" id="code" type="text" name="code" maxlength="100" required onBlur="checkAvailability()"><b id="available"></b>
	        <lebel>NAME</lebel>
      <input class="w3-input w3-round-large w3-margin-bottom" type="text" name="name" maxlength="100" required>
	        <lebel>STOCK</lebel>
    <input class="w3-input w3-round-large w3-margin-bottom" type="number" name="stock" maxlength="100" required> 	        
      <button class="w3-green w3-round-xlarge w3-large w3-right w3-margin" name="submit_npro">SUBMIT</button>
    </form>
    ?>
