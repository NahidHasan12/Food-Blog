
<h1>
    @if (auth()->guard('editor')->check())
        {{ auth()->guard('editor')->user()->first_name }}
    @endif
     Dashboard

</h1>

<a href="{{ route('editor.logout') }}">Logout</a>
