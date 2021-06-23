<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>table list</h3>
    <table class="table table-hovered table-stripped">
        <thead style>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->age}}</td>
                    <td>{{ $data->password }}</td>
                    </tr>
                    @endforeach
        </tbody>
</body>
</html>