@section('forgot-password')
<!-- Forgot-Password Modal -->
<div class="modal fade" id="ForgotPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                      <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
                        </div>
                        <!-- /.col -->
                      </div>
                    </form>
                    <p class="mt-3 mb-1">
                      <a href="{{ route('login') }}">Login</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
