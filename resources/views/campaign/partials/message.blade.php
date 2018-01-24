<form class="form" name="message-form" id="message-form" action="/template" method="POST">
	{{ method_field('POST') }}
    {{ csrf_field() }}
<div class="form-group">
		<label for="message">Mensagem:</label>
		<textarea class="form-control " rows="5" id="message" name="message"></textarea>
	</div>
</form>