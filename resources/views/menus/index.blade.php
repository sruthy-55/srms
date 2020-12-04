@extends('menus.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>MENU</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('menus.create') }}"> Add New Item</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Status</th>
            <th>Price</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($menus as $menu)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $menu->name }}</td>
            <td>{{ $menu->status }}</td>
            <td>{{ $menu->price }}</td>
            <td><img src="{{asset('public/images/'. $menu->file)}}" width="100px"></td>
            <!--<td>{{ $menu->file }}</td>-->
            <td>
                <form action="{{ route('menus.destroy',$menu->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('menus.show',$menu->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('menus.edit',$menu->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $menus->links() !!}
      
@endsection