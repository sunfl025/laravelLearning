<h1>Users</h1>
{{Auth::user()->name}}
<a href="{{route("logout")}}">logout</a>