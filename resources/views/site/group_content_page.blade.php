@if(count($histories) > 0)
	@foreach($histories as $history)
		<div class="history">
			<p class="date">{{ $history->date_published }}</p>
			<p class="test">{{ $history->text }}</p>
			<div class="marks">
				@foreach($history->markers as $marker)
					<a href="{{ route('group',$marker->label) }}" class="marker">#{{ $marker->label }}</a>
				@endforeach	
			</div>
		</div>
	@endforeach
	{{ $histories->links() }}

@endif