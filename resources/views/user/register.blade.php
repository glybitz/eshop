@extends('layout.master')

@section('main')
    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <a class="logo" href="index.html">
                            <img src="images/logo.png" alt="">
                        </a>
                        <h2 class="text-center">Create Your Account</h2>
                        <form class="text-left clearfix" action="{{route('user.saveuser')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="FullName" name='fullname'>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone" name='phone'>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name='email'>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name='password'>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-main text-center">Register Mo Muka Mo</button>
                            </div>
                        </form>
                        <p class="mt-20">Already hava an account ?<a href= "{{route('user.login')}}"> Login</a></p>
                        <p><a href="#"> Forgot your password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
