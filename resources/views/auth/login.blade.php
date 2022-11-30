@extends('layouts.app')

@section('content')
<div class="container">

    <br>   
    <div align="center"> <img src="{{asset('/img/logoCDTA.png')}}" alt="" width="100" srcset=""></div>
    <br>   
    <div class="row">

        <div class=" col-md-8 col-md-offset-2">
            <div class="  panel panel-default">
                <div  style="background-color:rgba(43, 63, 82, 0.9) ;color:white"class="panel-heading"> <b>Connexion</b> </div>

                <div style="background-color:rgba(43, 63, 82, 0.9);" class=" panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <br><br>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label style="color:white" for="name" class="col-md-4 control-label">Nom d'utilisateur</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label style="color:white" for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button  style="background-color:#1ab394 ; color:white" type="submit" class="btn ">
                                    Se connecter
                                </button>

                                    {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a> --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                    {{-- <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label> --}}
                                </div>
                            </div>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
