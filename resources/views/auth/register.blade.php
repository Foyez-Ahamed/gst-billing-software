<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Form</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            /* Center the form on the page */
            .register-container {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }

            .register-form {
                padding: 2rem;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
            }

            .register-form h2 {
                text-align: center;
                margin-bottom: 1.5rem;
            }

        </style>
    </head>

    <body style="background: blue;">

        <div class="register-container">
            <div class="register-form bg-light">
                <h2>Register</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>

                        <input id="name" type="text" placeholder="Enter Full name"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>

                        <input id="email" type="email" placeholder="Enter email address"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>

                        <input id="password" type="password" placeholder="Enter your password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Confirm Password</label>

                        <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password">

                    </div>

                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>

                <div class="mt-2">
                    <a href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
