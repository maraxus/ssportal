<form class="form" name="message-form" id="message-form" action="/campaign" method="POST">
	{{ method_field('POST') }}
    {{ csrf_field() }}
<div class="form-group">
	<div class="form-row">
		<div class="form-group col-md-6">
		    <label for="name">Nome</label>
		    <input type="name" class="form-control" id="name" placeholder="Nome">
		</div>
		<div class="form-group col-md-6">
			<label for="data-envio">Data para envio</label>
			<!-- vue component -->
			<my-date-picker></my-date-picker>
		</div>
	</div>
	<div class="form-group">
		<input type="submit" class="form-control btn btn-primary" value="Salvar">
	</div>
</div>
</form>
