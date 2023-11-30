<!DOCTYPE html>
<html lang="en">
<head>
    <title>Car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Car List</h2>
    <h3><a href="addcar">Add</a></h3>
    <h3><a href="trashed">Show Trashed</a></h3>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>price</th>
            <th>description</th>
            <th>Edit</th>
            <th>Show</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
      @foreach($cars as $car) <tr>
          <td>{{$car->id}}</td>
            <td> {{$car->title}}</td>
            <td>{{$car->price}}</td>
          <td>{{$car->description}}</td>
          <td> <a href="editcar/{{$car->id}}">Edit</a> </td>
          <td><a href="cardetails/{{$car->id}}">Show</a></td>
          <td><a href="deletecar/{{$car->id}}">Delete</a></td>
      </tr>
      @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
