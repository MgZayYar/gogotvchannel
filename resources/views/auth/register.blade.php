<!-- @extends('layouts.app')

@section('style-content')
    <style>
    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(to right, #b92b27, #1565c0)
}

.box {
    width: 650px;
    padding: 0 auto;
    position: relative;
    background: #191919;
    text-align: center;
    transition: 0.25s;
    margin: 0 auto;
}
.box input[type="user"],
.box input[type="email"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #3498db;
    padding: 10px 10px;
    width: 250px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}
.box input[type="user"]:focus,
.box input[type="email"]:focus,
.box input[type="password"]:focus {
    width: 300px;
    border-color: #2ecc71
}

.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #2ecc71
}

.forgot {
    text-decoration: underline;
    padding: 5px;
}
.form-check-label{
    color: #737CA1;
}

@media(max-width:1055px) {
            .box{
                width:580px;
                margin:auto;
                padding:0 auto;
            }

        }
        @media(max-width:900px) {
            .box{
                width:400px;
                margin:auto;
                padding:0 auto;
            }

	    }

@media(max-width:480px) {
            .box{
                width:340px;
                margin:auto;
                padding:0 auto;
            }

        }
        @media(max-width:380px) {
            .box{
                width:300px;
                margin:auto;
                padding:0 auto;
            }

	    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <form class="box" method="POST" action="{{route('register')}}">
                            @csrf
                                <h1>Register</h1>
                                <p class="text-muted"> You can create your account!</p> 
                                <input id="name" type="user" class=" @error('user') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username"> 
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email"> 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password"> 
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password-confirm" type="password"  name="password-confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                <input type="submit" name="" value="Register" href="#">
                                
                                <a class="forgot text-muted" href="{{route('login')}}">Do you have account? Login!</a> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script-content')

@endsection -->