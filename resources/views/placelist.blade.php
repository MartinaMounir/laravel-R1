<!DOCTYPE html>
<html lang="en">
<head>
    <title>place</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>place List</h2>
    <h3><a href="addplace">Add</a></h3>
    <h3><a href="trashedplace">Show Trashed</a></h3>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>short description</th>
            <th>to</th>
            <th>from</th>
            <th>Edit</th>
            <th>Show</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($places as $place) <tr>
            <td>{{$place->id}}</td>
            <td> {{$place->title}}</td>
            <td>{{$place->shortdescription}}</td>
            <td>{{$place->from}}</td>
            <td>{{$place->to}}</td>
            <td> <a href="editplace/{{$place->id}}">Edit</a> </td>
            <td><a href="placedetails/{{$place->id}}">Show</a></td>
            <td><a href="deleteplace/{{$place->id}}">Delete</a></td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
