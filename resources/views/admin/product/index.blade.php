@extends("admin.layout")

@section("content")

<div class="container">
  <h2>Products</h2>

  @if(session("message"))
    <div class="alert alert-primary">
        {{session("message")}}
    </div>
  @endif

  <a class="btn btn-success" href="/product/create">Add Product</a>
          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>category name</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>
</div>

@endsection