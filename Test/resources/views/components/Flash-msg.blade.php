@if(session()->has('message'))
    <div x-data= "{show: true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show" class="fixed transform left-1/2 -translate-x-1/2 text-white px-48 -py-3 flash">
        <h1>
            {{session('message')}}
        </h1>
    </div>
@endif