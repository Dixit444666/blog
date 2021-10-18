<h1>User Form</h1>
@if(Session('msg'))
{{Session('msg')}}
@endif
    
<form method="get" action="{{ route('profile') }}">
    {{ csrf_field() }}
    email:<input type="text" name="email">
    password:<input type="password" name="password">
    <input type="submit" value="submit">

</form>