@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card">
                <div class="card-header">Reset Password</div>
                <div class="card-body">
                    <form  method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email"
                                aria-describedby="emailHelp"
                                class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <small id="emailHelp" class="form-text text-muted">
                                    {{ $errors->first('email') }}
                                </small>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control"
                                aria-describedby="passwordConfirmationlHelp"
                                name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                                <small id="passwordConfirmationlHelp" class="form-text text-muted">
                                    {{ $errors->first('password_confirmation') }}
                                </small>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
