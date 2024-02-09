<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <x-Flash-msg />
    <table>
        <td>
            <div class="reg-ico div-reg">
                <a href="{{ route('register') }}"><ion-icon name="person-add-outline" class="reg-ico"></ion-icon></a>
            </div>
        </td>
        <td>
            <div class="out-ico div-reg">
                <a href="/logout" ><ion-icon name="log-out-outline" class="out-ico"></ion-icon></a>
            </div>
        </td>
    </table>
        <div>
            <div >
                <h1 class="welcome">Welcome @php
                    $name = Session::get('name');
                    echo $name 
                 
                @endphp
                what do you want to do
                </h1>
            </div>
        </div>
        <div style="display: flex">
            <div class="table-back">
                <table class="table">
                <tr>
                    <td class="td">
                        <a href="/blog-c" class="menus">
                            <H1>Make new Blog</H1>
                        </a>
                    </td>
                        <td class="td">
                            <a href="/blog-r" class="menus">
                                <h1>Read Blogs</h1>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>