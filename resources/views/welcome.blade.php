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
		<h1>Person</h1>
		<form action="/Person/store" method="post">
			@csrf 
			<label>	
				Name
			</label>
			<input type="text" name="name"> <br>
			<label>	
				Surname
			</label>
			<input type="text" name="surname"> <br>
			<label>	
				Age
			</label>
			<input type="number" name="age"> <br>
			<label>	
				Phone
			</label>
			<input type="tel" name="phone"> <br>
			<label>	
				Email
			</label>
			<input type="email" name="email"> <br>
			<button type="submit">save</button>
		</form>

		<h1>People</h1>

		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Surname</th>
					<th>Age</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($people as $person)
					<tr>
						<td>{{ $person->name }}</td>
						<td>{{ $person->surname }}</td>
						<td>{{ $person->age }}</td>
						<td>{{ $person->phone }}</td>
						<td>{{ $person->email }}</td>
						<td>
							<a href="Person/edit/{{ $person->id }}">Edit</a>
							<a href="Person/delete/{{$person->id}}">Delete</a>
							
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</section>


</body>
</html>
