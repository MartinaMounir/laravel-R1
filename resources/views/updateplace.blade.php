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
    <h2>Edit place</h2>
    <form action="{{ route ('updateplace',$place->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="Title">Title:</label>
            <input type="text" class="form-control" id="Title" placeholder="Enter Title" name="Title"
                   value="{{$place->title}}">
            @error('Title')
            <div class="alter alter-warning">
                {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="from">price from:</label>
            <input type="number" class="form-control" id="from" placeholder="Enter price from" name="from"
                   value="{{$place->from}}">
        </div>
        <div class="form-group">
            <label for="from">price to:</label>
            <input type="number" class="form-control" id="to" placeholder="Enter price to" name="to"
                   value="{{$place->to}}">
        </div>
        <div class="form-group">
            <label for="shortdescription">short description:</label>
            <input type="text" class="form-control" id="shortdescription" placeholder="Enter short description" name="shortdescription"
                   value="{{$place->shortdescription}}">
            @error('shortdescription')
            <div class="alter alter-warning">
                {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <div class="form-floating mb-3">
                <img src="{{asset('assets/images/'.$place->image)}}" width="200px">
            </div>
            <label for="image">image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
            @error('image')
            <div class="alter alter-warning">
                {{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-default">Update</button>
    </form>
</div>

</body>
</html>
