<head>
    <title>Tres_System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{url('css/form.css')}}">
</head>

<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">Register</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf
                    <div class="input-group form-group">
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="input-group form-group">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            name="email" value="{{ old('email') }}" placeholder="Email" required>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="input-group form-group">
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="input-group form-group">
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="Confirm Password" required autofocus>
                    </div>

                    <div class="col-md-15 offset-md-1">
                        <a href="/login/user">Already have an account.</button>&nbsp;&nbsp;&nbsp;
                        </a><button type="submit" class="btn register_btn">
                            Register
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>