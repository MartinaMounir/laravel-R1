<!DOCTYPE html>
<html lang="en">
<head>
    <title>News trashed</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>News trashed</h2>
    <h3><a href="addnews">Add</a></h3>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>content</th>
            <th>author</th>
            <th>restore</th>

            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $new) <tr>
            <td>{{$new->id}}</td>
            <td>{{$new->title}}</td>
            <td> {{$new->content}}</td>
            <td>{{$new->author}}</td>
            <td> <a href="restorenews/{{$new->id}}">restore</a> </td>
            <td> <a href="delete/{{$new->id}}">delete</a> </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
