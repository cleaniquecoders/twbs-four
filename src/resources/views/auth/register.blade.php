@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control"
                                aria-describedby="nameHelp"
                                name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <small id="nameHelp" class="form-text text-muted">
                                    {{ $errors->first('name') }}
                                </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control"
                                aria-describedby="emailHelp"
                                name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <small id="emailHelp" class="form-text text-muted">
                                    {{ $errors->first('email') }}
                                </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>

                            <input id="password" type="password" class="form-control"
                                aria-describedby="passwordHelp"
                                name="password" required>
                            @if ($errors->has('password'))
                                <small id="passwordHelp" class="form-text text-muted">
                                    {{ $errors->first('password') }}
                                </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm Password</label>
                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
