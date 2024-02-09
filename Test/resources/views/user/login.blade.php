@php
    session_start();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login site</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <x-Flash-msg />
    <div class = 'bg'>
        <div class='login-form'>
            <h1 class='center'>Login</h1>
            <form action="/user" method="POST">
                @csrf
                <ul class = "none">
                    <li>
                        <label for="">Email</label>
                        <input class="input" type="email" name="email" value="{{old("email")}}">
                        @error('email')
                        <p class="text-red-500 text-xs mt-1, error">{{$message}}</p>
                    @enderror

                    </li>
                    <li>
                        <label for="">password</label>
                        <input class="input" type="password" name='password'value="{{old("password")}}">
                        @error('password')
                        <p class="text-red-500 text-xs mt-1, error">{{$message}}</p>
                        @enderror

                    </li>
                    <li>
                        <input class="input" type="submit" value="Login">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>
</html>