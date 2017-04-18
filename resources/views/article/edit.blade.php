@if(Session::has('message'))
	{{ Session::get('message')}}
@endif

<h4>Edit Article</h4>


<form action='{{url("articles/{$atbe->id}/edit")}}' method="POST">
	{{csrf_field()}}
	Title: <input type="text" name="title" value="{{$atbe->title}}"><br>
	Content:<br>
	<textarea name="content" >{{$atbe->content}}</textarea><br>
	<input type="submit">

</form>