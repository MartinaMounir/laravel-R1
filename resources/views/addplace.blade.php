<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Place</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>add places</h2>
    <form action="{{ route ('addplaces') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{old('title')}}">
            @error('title')
            <div class="alter alter-warning">
                {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="from">price from:</label>
            <input type="number" class="form-control" id="from" placeholder="Enter price From" name="from"  value="{{old('from')}}">
            @error('from')
            <div class="alter alter-warning">
                {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="from">price to:</label>
            <input type="number" class="form-control" id="to" placeholder="Enter price to" name="to"  value="{{old('to')}}">
            @error('to')
            <div class="alter alter-warning">
                {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">shortdescription:</label>
            <input type="text" class="form-control" id="shortdescription" placeholder="Enter short description" name="shortdescription"  value="{{old('description')}}">
            @error('shortdescription')
            <div class="alter alter-warning">
                {{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
            @error('image')
            <div class="alter alter-warning">
                {{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>

