@extends('layout')

@section('page-content')

<h3> Update Book</h3>
<form method="post" action="{{ Route('books.update') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $book->id }}">

    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" value="{{ old('title', $book->title )}}" placeholder="Enter title" >
      <div>{{ $errors->first('title') }}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Author</label>
        <input type="text" class="form-control" name="author" value="{{ old('author' , $book->author) }}" placeholder="Enter author" >
        <div>{{ $errors->first('author') }}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="text" class="form-control" name="price" value="{{ old('price', $book->price) }}" placeholder="Enter price">
        <div>{{ $errors->first('price') }}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">ISBN</label>
        <input type="text" class="form-control" name="isbn" value="{{ old('isbn', $book->isbn) }}" placeholder="Enter isbn" >
        <div>{{ $errors->first('isbn') }}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Stock</label>
        <input type="text" class="form-control" name="stock" value="{{ old('stock', $book->stock) }}" placeholder="Enter stock" >
        <div>{{ $errors->first('stock') }}</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ Route('books.index') }}" class="btn btn-danger">Back</button>
  </form>

@endsection