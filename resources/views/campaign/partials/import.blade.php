<form class="form-inline" name="import-form" id="import-form" action="/wallet" method="POST" enctype="multipart/form-data">
	{{ method_field('POST') }}
    {{ csrf_field() }}
	<div class="form-group" id="import-file">
		<div class="input-group">
			<span class="input-group-btn">
				<label for="file" class="btn btn-primary">
					<input name="file" id="file" type="file" style="display: none; " multiple>Navegar</input>
				</label>
			</span>
			<input name="text" type="text" class="form-control" readonly placeholder="selecione o arquivo...">
			<input type="text" name="file-identifier" hidden="true">
		</div>
	</div>
</form>