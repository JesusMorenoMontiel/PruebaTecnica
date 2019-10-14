<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<title>Jesús Moreno Montiel</title>
</head>

<?php
session_start();
if (!isset($_SESSION['url'])) {
  $_SESSION['url'] = "http://www.skysignage.com/s/front/channel_preview.php?ID_channel=1129&tvmode=horizontal";
}
?>

<style type="text/css">
	iframe {
		transform: scale(0.5);
    transform-origin: 0 0;
		width: 1280px;
		height: 720px;
	}
	body,html {
		padding: 0px;
		margin: 0px;
		max-width: 100vw;
		box-sizing: border-box;
	}
	#element {
		display: none;
	}

	.buttons{
		max-width: 640px;
    text-align: center;
	}

	video,img{
		max-width: 640px;
	}

	.button{
		padding: 10px 20px;
		color: #666;
		border-radius: 5px;
		border: 1px solid #666;
		background-color: #fff;
		margin: 15px 5px;
	}

	.button:focus{
		color: #fff;
		border: 1px solid transparent;
		background-color: #30C2F4;
	}
</style>

<body>
	<div class="container">
		<div class="buttons">
			<input class="button click" type="submit" name="video" value="video">
			<input class="button click" type="submit" name="image" value="image">
			<input class="button click-api" type="submit" name="API" value="api">
		</div>

		<div id="element">

		</div>

		<iframe frameborder="0" allowfullscreen id="skysignage_preview" src="<?php echo $_SESSION["url"] ?>"></iframe>;


	</div>

	<script>
		$(document).ready(function(){
				$('.click').click(function(){
						var clickBtnValue = $(this).val();
						var ajaxurl = 'functions.php',
						data =  {'action': clickBtnValue};

						$.post(ajaxurl, data, function (response) {
								var jsonData = JSON.parse(response);
								$('#element').html('');
								$('#element').append(jsonData.element);
								$('#skysignage_preview').fadeOut(1000).delay(32000).fadeIn(1000);
								$("#element").delay(1000).fadeIn(1000).delay(30000).fadeOut(1000);
						});
				});

				$('.click-api').click(function(){
					var clickBtnValue = $(this).val();
						var ajaxurl = 'functions.php',
						data =  {'action': clickBtnValue};

						$.post(ajaxurl, data, function (response) {
								var jsonData = jQuery.parseJSON(response);
								$('#element').html('');
								$("#element").fadeIn(1000);
								$('#skysignage_preview').fadeIn(1000);
								$('#element').append("<div> <h2>ID: " + jsonData.ad.id + "</div>");
								$('#element').append("<div> <h2>Prix: " + jsonData.ad.prix+ "</div>");
						});
				});
		});
	</script>
</body>
</html>
