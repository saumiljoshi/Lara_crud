<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
     <div class="col-sm-4 offset-sm-4">
        @if(Session::get('success'))
        <span class="alert alert-success">{{ Session::get('success') }}</span>
    @endif

    @if(Session::get('fail'))
        <span class="alert alert-danger">{{ Session::get('success') }}</span>
    @endif
    <form action="{{ route('CustomerResources.store') }}" method="post" class="form-group">
     @csrf
     <div class="card">
        <div class="card-header">
             <center>Customer Add</center>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value="{{ old('name') }}" class="form-control" name="name" placeholder="Enter Customer Name" />
                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="{{ old('email') }}" class="form-control" name="email" placeholder="Enter Customer Email" />
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="name">Mobile</label>
                <input type="number" value="{{ old('mobile') }}" class="form-control" name="mobile" placeholder="Enter Customer Mobile" />
                <span class="text-danger">@error('mobile') {{ $message }} @enderror</span>
            </div>
            <div class="card-footer">
                <button class="btn btn-secondary">Save</button>
        </div>
    </form>
    </div>
</div>
  <div class="row">
    <div class="col-sm-12">
    <h1><center>Customer List</center></h1>
    <table class="table table-hovered table-stripped">
            <thead style>
            <tr>
                <th>SNo.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody >
                @foreach($customer as $data)
                    <tr style="color: rgb(173, 32, 68);">
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->mobile }}</td>
                      <td>
                            <a type="button" href="{{ route('CustomerResources.edit',$data) }}" class="btn btn-danger">Edit</a>
                            &nbsp;
                            <form method="post" action="{{ route('CustomerResources.destroy',$data) }}" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-primary" onclick="return confirm('Sure to Delete !!!')">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
            </tbody>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</html>