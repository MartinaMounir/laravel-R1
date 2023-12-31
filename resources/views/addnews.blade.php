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
    <h2>Vertical (basic) form</h2>
    <form action="{{ route ('newsdata') }}" method="post">
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
            <label for="content">content:</label>
            <input type="text" class="form-control" id="content" placeholder="Enter content" name="content" value="{{old('content')}}">
            @error('content')
            <div class="alter alter-warning">
                {{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="author">author:</label>
            <input type="text" class="form-control" id="author" placeholder="Enter author" name="author" value="{{old('author')}}">
            @error('author')
            <div class="alter alter-warning">
                {{ $message }}</div>
            @enderror
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="published"> published</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>
