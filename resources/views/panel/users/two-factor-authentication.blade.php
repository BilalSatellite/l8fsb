@extends("panel.master")
@section('tital', 'Two Factor Authentication')
@section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header p-2">
                        <label for="two-factor-authentication" class="col-form-label text-md-left">{{ __('Two Factor Authentication') }}</label>
                        @if (session('status') == "two-factor-authentication-disabled")
                        <div class="alert alert-danger float-right" role="alert">
                            Two factor Authentication has been disabled.
                        </div>
                    @endif

                    @if (session('status') == "two-factor-authentication-enabled")
                        <div class="alert alert-success float-right" role="alert">
                            Two factor Authentication has been enabled.
                        </div>
                    @endif
                    </div><!-- /.card-header -->
                    <div class="card-body">
                    <form method="POST" action="/user/two-factor-authentication" >
                        @csrf

                        @if (auth()->user()->two_factor_secret)
                            @method('DElETE')
                        <div class="row">
                            <div class="pb-5 col-md-6 border border-dark">
                                <p class="text-danger text-center">Scan QR Code your phone with ' google authenticator ' app or Use other authenticator app</p>
                                {!! auth()->user()->twoFactorQrCodeSvg() !!}
                            </div>

                            <div class="col-md-6  border border-dark">
                                <p class="text-danger text-center">Copy Recovery Code your safe place</p>

                                <ol>
                                    @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                                        <li>{{ $code }}</li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                            <button class="btn btn-danger mt-1">Disable</button>
                        @else
                            <button class="btn btn-primary mt-1">Enable</button>
                        @endif
                    </form>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>

</section><!-- /.content -->
 <!-- ConfirmPassword Modal -->

<div class="modal fade" id="ConfirmPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Confirm Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                    </div>
                    <div class="card-body">
                        <p class="text-center">
                            {{ __('Please confirm your password before continuing.') }}
                        </p>

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-0 form-group row">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Confirm Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@if(Route::is('password.confirm'))
@parent
<script>
    $(function() {

        $('#ConfirmPassword').modal('toggle');
    });

</script>
@endif
@endsection

