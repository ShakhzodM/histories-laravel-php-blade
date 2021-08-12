<p class="siteName"><a href="">Histories</a></p>
<nav>
	<ul>
		<li><a href="{{ route('home')}}">Профиль</a></li>
	</ul>
</nav> 

	@if(session('status'))
		<p class="status">{{ session('status') }}</p>
	@endif