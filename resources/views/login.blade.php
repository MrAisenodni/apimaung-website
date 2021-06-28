<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login | E-Government Tengkurak</title>
        <link href="{{ url('admin/css/styles.css') }}" rel="stylesheet" />
        <script src="{{ url ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js') }}" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="/login">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <label for="email">Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Masukkan email Anda" value="{{ old('email') }}" />
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="password">Kata Sandi</label>
                                                <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Masukkan kata sandi Anda" />
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="remember" name="remember" type="checkbox" value="" />
                                                <label class="form-check-label" for="remember">Ingat kata sandi</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="#">Lupa Kata Sandi?</a>
                                                <button type="submit" class="btn btn-success"> MASUK</button>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; E-Government Tengkurak 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ url('admin/js/scripts.js') }}"></script>
    </body>
</html>
