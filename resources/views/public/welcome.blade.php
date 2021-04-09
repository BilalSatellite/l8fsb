@extends("public.master")
@section('tital', 'welcome')

@section('content')
{{-- {{ Route::current()->getName() }} --}}

@endsection
@include('public.include.login')
@include('public.include.register')
@include('public.include.forgot-password')
@include('public.include.reset-password')
@include('public.include.verify-email')
@include('public.include.two-factor-challenge')

@section('scripts')
    @parent
    <script>
        $(function() {
            $('#LoginModal').modal('toggle');
            $('#RegisterModal').modal('toggle');
            $('#ForgotPassword').modal('toggle');
            $('#ResetPassword').modal('toggle');
            $('#VerifyEmail').modal('toggle');
            $('#TwoFactorChallenge').modal('toggle');
        });

    </script>
@endsection
