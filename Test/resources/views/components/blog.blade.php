@props(['blog'])

<div class="back">
    <a href="/blog-list/{{$blog['ID']}}"><h1 class ="none">{{$blog['title']}}</h1></a>
    <p >{{$blog['blog']}}</p>
    <p class="created">This blog was Created: {{$blog['created_at']}}</p>
</div>