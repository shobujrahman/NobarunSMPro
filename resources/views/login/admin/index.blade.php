{{-- require '../../login_layout/header.php'; --}}

@extends('layouts.login_layout.layout')
@section('content')


<form class="login100-form validate-form" action="{{url('/admin/admin-login')}}" method="POST">
    @csrf
    <span class="login100-form-title">
        Admin Login
    </span>

    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="Email">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <input class="input100" type="password" name="pass" placeholder="Password">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
        </span>
    </div>
    @if(Session::has('error'))
    <div class="alert alert-danger">
        {{Session::get('error')}}
    </div>
    @endif
    <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit">
            Login
        </button>
    </div>
</form>
@endsection

{{-- require '../../login_layout/footer.php'; --}}
