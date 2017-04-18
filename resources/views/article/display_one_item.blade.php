<!DOCTYPE html>
<html>
<head>
	<title>Display One item</title>
</head>
<body>

@if(Session::has('message'))
	{{ Session::get('message')}}
@endif
<h1>Display All Article Info</h1>
	<p>{{$article->title}}</p>
	<p>{{$article->content}}</p>
	

	<a href='{{url("articles/$article->id/edit")}}'><button >Edit</button>
	<a href='{{url("articles/$article->id/delete")}}'><button>Delete</button></a>	
	<p>Comment:</p><br>	
	@foreach($article->comments as $key => $comment)
		<p>Author: {{$comment->owner->name}}</p>
		<p>Comment: {{$comment->content}}</p>
		<!-- <p>Comment ID: {{$comment->id}}</p> -->

		
		<!-- <p>Article Commented: {{$comment->article->title}}</p> -->
		
	@endforeach
	<form method="POST" action='{{url("articles/$article->id/comment")}}'>
	{{csrf_field()}}
	<textarea name="content"></textarea><br>
	<button>Submit</button>
	</form>



</body>
</html>