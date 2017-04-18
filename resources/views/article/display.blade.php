<!DOCTYPE html>
<html>
<head>
	<title>Display Articles</title>
</head>
<body>

	<h4>Display All Articles</h4>
	@if(Session::has('message'))
		{{ Session::get('message')}}
	@endif
	@foreach($articles as $key => $article)

		<p><a href='{{url("articles/$article->id")}}'> {{$article->title}}<a></p>
		<p>{{$article->content}}</p>
	@endforeach
		
	<a href='{{url("articles/create")}}'><button class="btn btn-primary">Add Article</button></a>

</body>
</html>