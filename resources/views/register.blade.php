<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration Page</title>

    <style>
        .h-main {
            height: 100vh;
        }
    </style>
</head>

<body>

    <section class="h-main bg-danger">
        <div class="d-flex justify-content-center align-items-center h-100">
            <form class="bg-light px-4 py-3 rounded-3 d-flex flex-column gap-2" method="POST" action="{{ route('register.data') }}"> 
                @csrf
                <div class="d-flex flex-row gap-3">
                    <div>
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" id="firstName">
                        {{-- maybe asach ahe saglya fields la karav lagel name change karun kar tu to paryant mi bghto correct ahe ka --}}
                        @error('fname')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="lastName">
                        @error('lname')
                        {{ $message }}
                    @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email">
                    @error('email')
                    {{ $message }}
                @enderror
                </div>
                <div>
                    <label for="contact_no" class="form-label">Contact No</label>
                    <input type="phone" name="phone" class="form-control" id="contact_no">
                    @error('phone')
                    {{ $message }}
                @enderror
                </div>
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username">
                    @error('username')
                    {{ $message }}
                @enderror
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    @error('password')
                    {{ $message }}
                @enderror
                </div>
                <div>
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror 
                </div>
                <div class="form-check d-flex justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
                    </div>
                    <div>
                        <a href="#">Forget Password?</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-3">
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
