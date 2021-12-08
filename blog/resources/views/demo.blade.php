
<html>
      <body>
        <table id="datatable" style="border: 1px solid">
            <h1>Quản lý cầu thủ</h1>
            <thead>
                <tr role="row">
                    <th>ID</th>
                    <th>Tên cầu thủ</th>
                    <th>Tuổi</th>
                    <th>Quốc tịch</th>
                    <th>Lương</th>
                    <th style="width: 7%;">Edit</th>
                    <th style="width: 10%;">>Delete</th>
                </tr>
            </thead>
            <tbody>
            @csrf
                @foreach($data as $key => $data)
                    <tr role="row">    
                    <th>{{$data->id}}</th>
                    <th>{{$data->name}}</th>
                    <th>{{$data->age}}</th>
                    <th>{{$data->positon}}</th>
                    <th>{{$data->salary}}</th> 
                    <td><a href="Edit/{{$data->id}}">Edit</a></td>
                    <td><a href="Delete/{{$data->id}}"> Delete</a></td>                
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8">
                        <a href="them"><button id="button">Thêm cầu thủ</button></a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>