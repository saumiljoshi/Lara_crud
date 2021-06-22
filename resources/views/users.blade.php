<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Employee-list</h1>
 <form action="employee" method="POST">
        @csrf
        {{ method_field('DELETE') }}
        <td><input type="text" name="user"/></td>
        <td><input type="password" name="password"/></td>
       <button>login</button>
    </table>
</form>
</body>
</html>