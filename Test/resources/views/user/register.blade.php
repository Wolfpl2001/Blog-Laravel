
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
            <h1 class='center'>Register</h1>
            <form action="/users" method="POST">
                @csrf
                <ul class = "none">
                    <li>
                        <label for="">Name</label>
                        <input class="input" type="text" name="name" id="" value="{{old('name')}}">
                            @error('name')
                                <p class="text-red-500 text-xs mt-1, error">{{$message}}</p>
                            @enderror
                        
                    </li>
                    <li>
                        <label for="">Email</label>
                        <input class="input" type="text" name="email" id=""value="{{old('email')}}">
                        @error('email')
                                <p class="color-red-500 text-xs mt-1, error">{{$message}}</p>
                        @enderror
                        
                    </li>
                    <li>
                        <label for="">password</label>
                        <input class="input" type="password"name="password"value="{{old('password')}}">
                        @error('password')
                                <p class="text-red-500 text-xs mt-1, error">{{$message}}</p>
                        @enderror
                        
                    </li>
                    <li>
                        <label for="">confirm password</label>
                        <input class="input" type="password" name="password_confirmation"value="{{old('password_confirmation')}}">
                        @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1, error">{{$message}}</p>
                        @enderror
                        
                    </li>
                    <li>
                        <input class="input, button" type="submit" value="Register">
                    </li>
                    
                    <p>You alredy have accout? <a href="/login">Login</p></a>
                </ul>
            </form>

        </div>
    </div>
</body>
<script src="//unpkg.com/alpinejs" defer></script>
</html>