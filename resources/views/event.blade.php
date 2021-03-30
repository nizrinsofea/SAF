@foreach($events as $key => $data)
    <table>
    <tr>    
    <td>{{$data->id}}</td>
    <td>{{$data->name}}</td>
    <td>{{$data->location}}</td>              
    </tr>
    </table>
@endforeach