@extends('layouts.master')

@section('content')
<div class="container" style="">
    <section class="login-area my-5" >
        <div class="container">
            @include('layouts.includes.flash-message')
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Kirish</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{url('/login')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control {{$errors->has('email')? 'is-invalid': ''}} form-control-sm">

                                    @if($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{$errors->first('email')}}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">Parol</label>
                                    <input type="password" name="password" class="form-control {{$errors->has('password')? 'is-invalid': ''}} form-control-sm">
                                    @if($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{$errors->first('password')}}</strong>
                                        </span>
                                    @endif

                                    <div><small><a href="#" class="text-muted">Parolni unutdingizmi?</a></small></div>

                                </div>
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" name="remember"> Eslab qolish
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block btn-md">Login</button>
                                </div>
                            </form>
                            <small>Hali ro'yhatdan o'tmaganmisiz? <a href="{{route('register')}}">Ro'yhatdan o'tish</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
