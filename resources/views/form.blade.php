<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET" action="/add">
 @csrf
  Name:<input type="text" name="name"/><br/><br/>
  Email:<input type="text" name="email"/><br><br/>
  Age:<input type="text" name="age"/><br><br/>
  Password:<input type="password" name="password"/><br><br/>
  <input type="submit" name="submit" value="submit"/>
</form>    
</body>
</html>
