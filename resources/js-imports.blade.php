@if (count($scripts))
	@foreach ($scripts as $path)
		<script type="text/javascript" src="{{ asset($path) }}"></script>
	@endforeach
@endif