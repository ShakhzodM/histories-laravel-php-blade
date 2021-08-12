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
			{!! Form::open(['url'=>route('check', ['history'=>$history->id]), 'method'=>'POST']) !!}
					{!! Form::button('Добавить', ['type'=>'submit']) !!}
					{!! Form::close() !!}

			{!! Form::open(['url'=>route('check', ['history'=>$history->id]), 'method'=>'POST']) !!}
					{!! method_field('DELETE') !!}
					{!! Form::button('Отклонить', ['type'=>'submit']) !!}
					{!! Form::close() !!}
		</div>
	@endforeach
	{{ $histories->links() }}
@endif