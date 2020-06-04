<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
            @foreach ($donates as $pay)
			<div class="col-md-8 col-md-offset-2">
                <h1>{{ $pay->donater_name }}</h1>
				<h1>{{ $pay->payment_amount }}</h1>
				<p>{{  $pay->message  }}</p>
            </div>
            @endforeach
		</div>
	</div>

</body>
</html>