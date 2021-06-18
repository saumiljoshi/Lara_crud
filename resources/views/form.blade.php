<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET" enctype="multipart/form-data" action="" >
 @csrf
  name<input type="text" name="name" /><br/><br/>
  category<input type="text" name="catgory" /><br><br/>
  Brand<input type="text" name="brand"/><br><br/>
  Price<input type="number" name="price"/><br><br/>
  display_price<input type="number" name="display_price"/><br><br/>
  Description<input type="text" name="description"/><br><br/>
     <input type="submit" name="submit" value="submit" />
</form>    
</body>
</html>
