@extends('base')

@section('content')

<body>
<br>
<br>
<br>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-3">
            <div class="card-header text-white" style="background-color:midnightblue; text-align: center">
                <h3 class="card-title">User Registration</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/register')}}" method="post">
                {{csrf_field()}}
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">Register</button>
                <button class="btn btn-danger" type="submit">Cancel</button>
            </form>
            </div>
        </div>
    </div>
</div>
</body>

<style>
    body{
        background-color: #e3f2fd;
    }
</style>
@stop
