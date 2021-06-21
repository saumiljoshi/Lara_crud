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
         
            @if(Session::get('fail'))
                <span class="alert alert-danger">{{ Session::get('fail') }}</span>
            @endif
        
            <form action="{{ route('CustomerResources.update',$customer) }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $customer->id }}">
                    <div class="card">
                            <div class="card-header">
                                Customer Edit
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{ $customer->name }}" class="form-control" name="name" placeholder="Enter Customer Name" />
                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" value="{{ $customer->email }}" class="form-control" name="email" placeholder="Enter Customer Email" />
                                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mobile</label>
                                    <input type="number" value="{{ $customer->mobile }}" class="form-control" name="mobile" placeholder="Enter Customer Mobile" />
                                    <span class="text-danger">@error('mobile') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            <div class="card-footer">
                            <button class="btn btn-warning">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
</body>
</html>