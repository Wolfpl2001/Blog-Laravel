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
    <div class="blog">
        <a href="/blog-r"><ion-icon name="arrow-back-outline" class="back-arrow"></ion-icon></a>
        <a href="/remove/{{$blog['ID']}}"><ion-icon name="trash-outline" class="remove"></ion-icon></a>
        <div>
            <table class="none table">
                <tr>
                    <td>
                        <h1>{{$blog['title']}}</h1>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="text-blog">{{$blog['blog']}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="created">This blog was Created {{$blog['created_at']}}</p>
                    </td>
                </tr>
            </table>
            </div>
            
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>