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
            name: <input type="text" name="name"></input>
            age: <input type="text" name="age"></input>
            positon: <input type="text" name="positon"></input>
            salary: <input type="text" name="salary"></input>       
            <button type="submit">Send</button>
            
    </form>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>