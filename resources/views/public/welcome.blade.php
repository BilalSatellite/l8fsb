@extends("public.master")
@section('tital', 'welcome')

@section('content')


@endsection
@include('public.include.login')
@include('public.include.register')
@include('public.include.forgot-password')
@include('public.include.reset-password')

@section('scripts')
    @parent
    <script>
        $(function() {
            $('#LoginModal').modal('toggle');
            $('#RegisterModal').modal('toggle');
            $('#ForgotPassword').modal('toggle');
            $('#ResetPassword').modal('toggle');
        });

    </script>
@endsection
