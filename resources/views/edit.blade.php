<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<section>
		<h1>Edit person</h1>
		<form  method="post" action="/Person/update/{{$person->id}}">
			@csrf 
            @method('PUT')
			<label>	
				Name
			</label>
			<input type="text" name="name" value="{{$person->name}}"> <br>
			<label>	
				Surname
			</label>
			<input type="text" name="surname" value="{{$person->surname}}"> <br>
			<label>	
				Age
			</label>
			<input type="number" name="age"value="{{$person->age}}" > <br>
			<label>	
				Phone
			</label>
			<input type="tel" name="phone" value="{{$person->phone}}"> <br>
			<label>	
				Email
			</label>    
			<input type="email" name="email" value="{{$person->email}}"> <br>
			<button type="submit">save</button>
		</form>


	</section>


</body>
</html>
