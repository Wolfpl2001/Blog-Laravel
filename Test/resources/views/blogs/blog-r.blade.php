<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Blog</title>
</head>
<body>
    <x-Flash-msg />
    <div>
        <a href="/dashboard"><ion-icon name="arrow-back-outline" class="back-arrow"></ion-icon></a>
        @unless ($blog->isEmpty())
        @foreach ($blog as $singleBlog)
            <x-blog :blog="$singleBlog" />
        @endforeach
        
    @else
        <p class="NoneBlog">No blogs Found</p>
    @endunless

    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
</html>