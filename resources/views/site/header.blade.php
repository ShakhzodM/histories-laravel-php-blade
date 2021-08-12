<p class="siteName"><a href="">Histories</a></p>
<nav>
	<ul>
		<li><a href="{{ route('all')}}">Главная страница</a></li>
		<li><a href="{{ route('add') }}">Добавить</a></li>
	</ul>
</nav>

	@if(count($errors->all()) > 0)
		<div class="messages">
			@foreach($errors->all() as $message)
				<p>{{ $message }}</p>
			@endforeach
		</div>
	@endif 

	@if(session('status'))
		<p class="status">{{ session('status') }}</p>
	@endif