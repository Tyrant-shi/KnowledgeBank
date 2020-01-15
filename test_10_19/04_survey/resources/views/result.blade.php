<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
	<section>
		@foreach($result as $q)
		<label>{{ ($loop->index+1). "、".$q["issue"] }}</label><br />
		<label>(10)</label><br />
		@endforeach
	</section>
</body>
</html>
