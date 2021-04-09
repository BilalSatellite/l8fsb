@section('two-factor-challenge')
    <div class="modal fade" id="TwoFactorChallenge" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Two Factor Authentication Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('img/logo/smilogo.png') }}" alt="Logo">
                                </a>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#Two-Factor-Login"
                                                data-toggle="tab">{{ __('Two Factor Login') }}</a></li>

                                        <li class="nav-item"><a class="nav-link" href="#Recovry-Code"
                                                data-toggle="tab">{{ __('Recovry Code') }}</a></li>

                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="Two-Factor-Login">
                                            <p class="text-center">
                                                {{ __('Please enter your authentication code to login.') }}
                                            </p>
                                            <form method="POST" action="{{ route('two-factor.login') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="code"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('2F Auth code:') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="code" type="code"
                                                            class="form-control @error('code') is-invalid @enderror"
                                                            name="code" required autocomplete="current-code">

                                                        @error('code')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-0 form-group row">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Submit') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                        <div class="tab-pane" id="Recovry-Code">
                                            <p class="text-center">
                                                {{ __('Please enter your recovery code to login.') }}
                                            </p>
                                            <form method="POST" action="{{ route('two-factor.login') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="recovery_code"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('Recovery Code:') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="recovery_code" type="recovery_code"
                                                            class="form-control @error('recovery_code') is-invalid @enderror"
                                                            name="recovery_code" required
                                                            autocomplete="current-recovery_code">

                                                        @error('recovery_code')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="mb-0 form-group row">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Submit') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->

                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
