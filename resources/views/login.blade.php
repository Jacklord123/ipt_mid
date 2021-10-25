@extends('base')

@section('content')

<style>
    p{
        text-align: center;
    }
</style>
<div class = "container">
<div class="row">
    <div class="col-md-4 offset-md-4 bg-tr">
        <div class="card mt-5">
            <div class="card-header bg-light bg-gradient text-dark">
                <h3 class="card-title">User Login</h3>
            </div>
            <div class="card-header bg-dark bg-gradient text-white">
            <div class="card-body bg-dark bg-gradient ">
                <form action="{{url('/login')}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <p>Don't have an account?</p>
                    <p>Click here to <a href="/register">register!</a></p>
                    <button class="btn btn-light bg-gradient" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@stop