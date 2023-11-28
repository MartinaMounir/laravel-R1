<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Edit Car</h2>
    <form action="{{ route ('updatecar',$car->id) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="Title">Title:</label>
            <input type="text" class="form-control" id="Title" placeholder="Enter Title" name="Title" value="{{$car->title}}">
        </div>
        <div class="form-group">
            <label for="price">price:</label>
            <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" value="{{$car->price}}">
        </div>
        <div class="form-group">
            <label for="description">description:</label>
            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description" value="{{$car->description}}">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="published"  @checked($car->published)>published</label>
        </div>
        <button type="submit" class="btn btn-default">Update</button>
    </form>
</div>

</body>
</html>
