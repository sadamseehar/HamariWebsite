@extends("admin.layout")

@section("content")

<div class="container">
  <h2>Categories</h2>

  @if(session("message"))
    <div class="alert alert-primary">
        {{session("message")}}
    </div>
  @endif

  <a class="btn btn-success" href="/addCategory">Add Category</a>
          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>category name</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($category as $c)
      <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->category_name}}</td>
        <td><a class="btn btn-danger" href="/delete/{{$c->id}}">delete</a></td>
        <td><a class="btn btn-success" href="/edit/{{$c->id}}">edit</a></td>
      </tr>
      @endforeach
    
    </tbody>
  </table>
</div>

@endsection