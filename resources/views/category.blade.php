
@foreach($categorys as $category)

	<p>
		{{$category->id}}
		<a href="{{asset('category/'.$category->id)}}">{{$category->name}}
		</a>
	</p>

@endforeach

