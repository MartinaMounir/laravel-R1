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
  <form action="{{ route ('cardata') }}" method="post" enctype="multipart/form-data">
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
      <label for="price">price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" name="price"  value="{{old('price')}}">
    </div>
    <div class="form-group">
      <label for="description">description:</label>
      <input type="text" class="form-control" id="description" placeholder="Enter description" name="description"  value="{{old('description')}}">
        @error('description')
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
      <div class="form-group">
          <label for="category_id">category:</label>
          <select name="category_id" id="" class="form-control">
              <option value="">select category</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->categoryName}}</option>
                  @endforeach
          </select>
      </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published"> published</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
