@foreach ($select as $item)
    
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->dept}}</td>
            <td><button onclick="editdata({{$item->id}})" class="btn btn-success">Edit</button></td>
            <td><button onclick="deletedata({{$item->id}})" class="btn btn-warning">Delete</button></td>
        </tr>
@endforeach