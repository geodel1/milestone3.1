<h4>Create New Article</h4>
<form action="{{url('articles/create')}}" method="POST">
	{{csrf_field()}}
	Title: <input type="text" name="title"><br>
	Content:<br>
	<textarea name="content"></textarea><br>
	<input type="submit">

</form>