@if(count($data) > 0)
	@foreach($data as $elem)
		<div class="history">
		
			<p class="date">{{ $elem->date_published }}</p>
			<p class="test">{{ $elem->text }}</p>
	
			<div class="marks">
				@foreach($elem->markers as $marker)
					<a href="{{ route('group',$marker->label) }}" class="marker">#{{ $marker->label }}</a>
				@endforeach	
			</div>
		</div>
	@endforeach
	{{ $data->links() }}

@endif
