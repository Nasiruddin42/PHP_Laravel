@extends('layout')

@section('page-content')

<h3>Add New Book</h3>
<form method="post" action="{{ Route('books.store') }}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter title" >
      <div>{{ $errors->first('title') }}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Author</label>
        <input type="text" class="form-control" name="author" value="{{ old('author') }}" placeholder="Enter author" >
        <div>{{ $errors->first('author') }}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Enter price">
        <div>{{ $errors->first('price') }}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">ISBN</label>
        <input type="text" class="form-control" name="isbn" value="{{ old('isbn') }}" placeholder="Enter isbn" >
        <div>{{ $errors->first('isbn') }}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Stock</label>
        <input type="text" class="form-control" name="stock" value="{{ old('stock') }}" placeholder="Enter stock" >
        <div>{{ $errors->first('stock') }}</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ Route('books.index') }}" class="btn btn-danger">Back</button>
  </form>

@endsection