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
<h2 class="text-center">{{__('messages.CarForm')}}</h2>
<div class="container">
    <div>
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a>
    </div>
  <form action="{{ route ('cardata') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="Title">{{__('messages.title')}}:</label>
        <input type="text" class="form-control" id="title" placeholder="{{__('messages.placeholdertitle')}}" name="title" value="{{old('title')}}">
        @error('title')
        <div class="alter alter-warning">
        {{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="price">{{__('messages.price')}}:</label>
      <input type="number" class="form-control" id="price" placeholder="{{__('messages.placeholderprice')}}" name="price"  value="{{old('price')}}">
    </div>
    <div class="form-group">
      <label for="description">{{__('messages.description')}}:</label>
      <input type="text" class="form-control" id="description" placeholder="{{__('messages.placeholderdescription')}}" name="description"  value="{{old('description')}}">
        @error('description')
        <div class="alter alter-warning">
            {{ $message }}</div>
        @enderror
    </div>
      <div class="form-group">
          <label for="image">{{__('messages.image')}}:</label>
          <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
          @error('image')
          <div class="alter alter-warning">
              {{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
          <label for="category_id">{{__('messages.category')}}:</label>
          <select name="category_id" id="" class="form-control">
              <option value="">select category</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->categoryName}}</option>
                  @endforeach
          </select>
      </div>
    <div class="checkbox">
      <label><input type="checkbox" name="published"> {{__('messages.checkbox')}}</label>
    </div>
    <button type="submit" class="btn btn-default">{{__('messages.button')}}</button>
  </form>
</div>

</body>
</html>
