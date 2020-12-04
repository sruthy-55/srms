
<h1><span class="blue"></span>Reservation View</h1>
<form action="delete" method="post">
@csrf
<link rel="stylesheet" href="css/table.css"/>
<span class="blue">&gt;</span> 

<table class="container">
    <div class="yellow">

<thead>
  

<tr>
<th>ID</th>
<th>NAME</th>
<th>MOBILE</th>
<th>EMAIL</th>
<th>NO:OF PERSON</th>
<th>DATE</th>
<th>TIME</th>
<th>APPROVE</th>
<th>REJECT</th>
<th>DELETE</th>
</tr>
</thead>


<tbody>

@foreach ($reservations as $Reserve)
<tr>
<td>{{$Reserve['id']}}</td>
    <td>{{$Reserve['name']}}</td>
    <td>{{$Reserve['mobile']}}</td>
    <td>{{$Reserve['email']}}</td>
    <td>{{$Reserve['num']}}</td>
    <td>{{$Reserve['date']}}</td>
    <td>{{$Reserve['time']}}</td>
    <td><button type="submit" class="btn2" name="approve-btn" value="{{ $Reserve['id']}}">
        <a href="/send">APPROVE</a>
    
		</button></td>
    <td><button type="button" class="btn2">
        <a href="{{route('admin.decline',$Reserve->status)}}">REJECT</a></button></td>
    <td><button type="submit" class="btn2">DELETE</button></td>
       </td>
    <!--   <td>@if($Reserve->status == 1) 
        <form action="{{ route('completedUpdate', $Reserve->id) }}" method="POST">
            {{ csrf_field() }}                          
            <button type="submit" class="btn btn-success" name="changeStatus" value="0">Active</button>
        </form>                    
    @else
        <form action="{{ route('completedUpdate', $Reserve->id) }}" method="POST">
            {{ csrf_field() }}                              
            <button type="submit" class="btn btn-default" name="changeStatus" value="1">Inactive</button>
        </form>                                                 
    @endif-->
    </td>
    
        </td> 
       </tr>    
      
                                
                               
    @endforeach
</tbody>