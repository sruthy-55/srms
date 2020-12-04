<table class="container">
   

<thead>
  

<tr>
<th>ID</th>
<th>Item</th>
<th>Price</th>
<th>Status</th>

</tr>
</thead>


<tbody>

@foreach ($menus as $menu)
<tr>
<td>{{$menu['id']}}</td>
    <td>{{$menu['name']}}</td>
    <td>{{$menu['price']}}</td>
    <td>{{$menu['status']}}</td>
   
    </tr>
    @endforeach