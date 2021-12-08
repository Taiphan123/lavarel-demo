<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="Post">
    @csrf
        @foreach($data as $key => $data)
            name: <input type="text" value="{{$data->name}}"name="name"></input>
            age: <input type="text" value="{{$data->age}}" name="age"></input>
            positon: <input type="text" value="{{$data->positon}}" name="positon"></input>
            salary: <input type="text" value="{{$data->salary}}" name="salary"></input>       
            <button type="submit">Send</button>
        @endforeach
    </form>
</body>
</html>