<html>
<head>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<style type="text/css">
		body{
			background-color: green;
		}

		.container {
			width: 100%;
			height: 300px;
			float: left;
			margin-top: 10%;
		}

		.container .main{
			width: 100%;
			margin: 0 auto;
			text-align: center;
			color: #FFF;
			font-size: 124px;
			font-family: 'Lato', sans-serif;
		}

		.container .second{
			width: 100%;
			margin: 0 auto;
			text-align: center;
			color: #FFF;
			font-size: 84px;
			font-family: 'Lato', sans-serif;
		}
	</style>
</head>
<body>	
	<div class="container">
		<p class="main">Livre</p>
		<p class="second">Free</p>
	</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$(document).click(function(){
			changeStatus();
		});	
	});

	function changeStatus()
	{		
		if (getState() == 'free') {
			$('body').css('background', 'red');
			$('.main').text('Ocupado');
			$('.second').text('Busy');
			return true;
		}

		if (getState() == 'busy') {
			$('body').css('background', 'green');
			$('.main').text('Livre');
			$('.second').text('free');
			return true;
		}
	}	

	function getState()
	{
		if ($('body').css('background-color') ==  'rgb(255, 0, 0)') {
			return 'busy';
		}

		return 'free';
	}

</script>