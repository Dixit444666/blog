{{-- dddddd --}}
<html>
<h1>Welcome</h1>
<body>
@if(Session('success'))
{{Session('success')}}
@endif
<a href="{{ url('logout')}}">logout</a>
</body>
</html>