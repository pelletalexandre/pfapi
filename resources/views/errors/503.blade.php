<!DOCTYPE html>
<html lang="en">
<head>
    

	<title>Mappavini</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('comingsoon')}}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('comingsoon')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('comingsoon')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('comingsoon')}}/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('comingsoon')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('comingsoon')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('comingsoon')}}/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<!--  -->
	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('{{ asset('comingsoon/images/bg01.jpg') }}');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('{{ asset('comingsoon/images/bg02.jpg') }}');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('{{ asset('comingsoon/images/bg03.jpg') }}');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('{{ asset('comingsoon/images/bg04.jpg') }}');"></div>
        <div class="simpleslide100-item bg-img1" style="background-image: url('{{ asset('comingsoon/images/bg05.jpg') }}');"></div>
	</div>

	<div class="flex-col-c-sb size1 overlay1">
		<!--  -->
		<div class="w-full flex-w flex-sb-m p-l-80 p-r-80 p-t-22 p-lr-15-sm">
			<div class="wrappic1 m-r-30 m-t-10 m-b-10">
				<a href="#"><img src="{{ asset('comingsoon')}}/images/icons/logo.png" alt="LOGO"></a>
			</div>

		</div>

		<!--  -->
		
		<div class="flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-200">
			<h3 class="l1-txt1 txt-center p-b-35 respon1">
				Votre application préférée revient très bientôt.
			</h3>
<!--
			<div class="flex-w flex-c cd100 respon2">
				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 days">3</span>
					<span class="m1-txt2 p-r-20">Jours</span>
				</div>

				<span class="l1-txt2 p-t-15 dis-none-sm">:</span>

				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 hours">17</span>
					<span class="m1-txt2 p-r-20">Heures</span>
				</div>

				<span class="l1-txt2 p-t-15 dis-none-lg">:</span>

				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 minutes">50</span>
					<span class="m1-txt2 p-r-20">Minutes</span>
				</div>

				<span class="l1-txt2 p-t-15 dis-none-sm">:</span>

				<div class="flex-col-c wsize1 m-b-30">
					<span class="l1-txt2 p-b-37 seconds">39</span>
					<span class="m1-txt2 p-r-20">Secondes</span>
				</div>
			</div>
				-->
		</div>


	</div>



	

<!--===============================================================================================-->	
	<script src="./comingsoon/vendor/jquery/jquery-3.2.1.min.js"></script> 
<!--===============================================================================================-->
	<script src="{{ asset('comingsoon')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ asset('comingsoon')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('comingsoon')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('comingsoon')}}/vendor/countdowntime/moment.min.js"></script>
	<script src="{{ asset('comingsoon')}}/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="{{ asset('comingsoon')}}/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="{{ asset('comingsoon')}}/vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 2,
			endtimeHours: 0,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('comingsoon')}}/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('comingsoon')}}/js/main.js"></script>

</body>
</html>