<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div class = 'bg'>
        <div class='login-form'>
            <x-Flash-msg />
            <h1 class='center'>Create a blog</h1>
            <form action="/c-blog" method="POST">
                @csrf
                <ul class = "none creat-blog">
                    <li>
                        <label for="">Title</label>
                        <input class="input" type="text" name="title"  value="{{old('title')}}">
                            @error('title')
                                <p class="text-red-500 text-xs mt-1, error">{{$message}}</p>
                            @enderror
                        
                    </li>
                    <li>
                        <label for="">Blog</label>
                        <textarea class="input" type="text" name="blog" id=""value="{{old('blog')}}"rows="10" cols="30"></textarea>
                        @error('blog')
                                <p class="color-red-500 text-xs mt-1, error">{{$message}}</p>
                        @enderror
                        
                    </li>
                    <li>
                        <input class="input, button" type="submit" value="Create blog">
                    </li>
                </ul>
            </form>

        </div>
    </div>
</body>
</html>