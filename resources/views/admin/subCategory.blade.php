@extends("admin.layout")

@section("content")

<div class="container">
  <h2>Sub Categories</h2>

  @if(session("message"))
    <div class="alert alert-primary">
        {{session("message")}}
    </div>
  @endif

  <a class="btn btn-success" href="/addSubCategory">Add sub Category</a>
          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>sub category name</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($sub_cat as $s)
      <tr>
        <td>{{$s->id}}</td>
        <td>{{$s->sub_category_name}}</td>
        <td><a class="btn btn-danger" href="">delete</a></td>
        <td><a class="btn btn-success" href="">edit</a></td>
      </tr>
        @endforeach
    
    </tbody>
  </table>
</div>

@endsection