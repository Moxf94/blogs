@extends('layouts.main')
@section('content')
<div>
    <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text" class="form-control" id="content" placeholder="Content"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="" class="form-control" id="image" placeholder="Image"></input>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <textarea class="form-control" id="image" placeholder="Image"></textarea>
        </div>
        <button type="number" class="btn btn-primary">Submit</button>
    </form>
</div>/
@endsection
