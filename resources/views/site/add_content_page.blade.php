	{!! Form::open(['action'=>'AddHistoryController'])!!}
		{{ Form::text('email', old('email'),['placeholder'=>'email']) }}
		{{ Form::textarea('text', old('text'), ['placeholder'=>'text']) }}
		Хеш-теги через пробел(#самара#спб...):{{ Form::text('mark', old('mark'),['placeholder'=>'mark']) }}

		{{ Form::submit('Отправить')}}


	{!! Form::close() !!}