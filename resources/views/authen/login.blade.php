@extends('authen.main')

@section('isiauthen')
<!-- auth page content -->
<div class="auth-page-content">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card mt-4">

                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">SIGN IN</h5>
                        </div>
                        <div class="p-2 mt-4">
                            <form action="/login" method="post">
                                @csrf

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="username"
                                        placeholder="Enter username" required autocomplete="off" autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="password-input">Password</label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input type="password" name="password" class="form-control pe-5"
                                            placeholder="Enter password" id="password-input" autocomplete="off"
                                            required>
                                        <button
                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                            type="button" id="password-addon"><i
                                                class="ri-eye-fill align-middle"></i></button>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-success w-100" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="mt-4 text-center">
                    <p class="mb-0">Tidak memiliki akun ? <a href="/registrasi"
                            class="fw-semibold text-primary text-decoration-underline"> Sign Up </a> </p>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end auth page content -->
@endsection