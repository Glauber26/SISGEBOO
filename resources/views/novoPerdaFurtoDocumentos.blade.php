@extends('layouts.appDenuncia1')

@section('denunciaNome')
Registro Perda ou Furto de Documentos
@endsection

@section('naveg')
Registro Perda ou Furto de Documentos
@endsection



@section('denuncia')

<form method="POST" action="{{ route('doc.submit') }}">
	@csrf

	<b>Dados Pessoais de quem perdeu os Documentos</b>
	<hr>

	<div class="form-group row">
		<div class="col-md-8">
			<label for="inputNome">Nome</label>
			<input type="text" class="form-control {{ $errors->has('doc_nome') ? 'is-invalid' : '' }}" name="doc_nome" id="doc_nome" placeholder="Nome que consta no Documento" value="{{ old('doc_nome') }}">

			@if($errors->has('doc_nome'))
			<div class="invalid-feedback">
				{{ $errors->first('doc_nome') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-2">
			<label for="inputnascimento">Data de Nascimento</label>
			<input type="date" class="form-control {{ $errors->has('nascimento') ? 'is-invalid' : '' }}" name="nascimento" id="nascimento" value="{{ old('nascimento') }}">

			@if($errors->has('nascimento'))
			<div class="invalid-feedback">
				{{ $errors->first('nascimento') }}
			</div>
			@endif
		</div>


		<div class="form-group col-md-2">
			<label for="inputnascimento">Telefone</label>
			<input type="number" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }}" name="telefone" id="telefone" value="{{ old('telefone') }}">

			@if($errors->has('telefone'))
			<div class="invalid-feedback">
				{{ $errors->first('telefone') }}
			</div>
			@endif
		</div>
	</div>


	<b>Acontecimentos</b>
	<hr>
	<div class="form-group">
		<label for="comment">Descreva o que aconteceu</label>
		<textarea class="form-control {{ $errors->has('descricao') ? 'is-invalid' : '' }}" rows="5" name="descricao" id="comment" placeholder="Descrição dos Acontecimentos">{{ old('descricao') }}</textarea>
		@if($errors->has('descricao'))
		<div class="invalid-feedback">
			{{ $errors->first('descricao') }}
		</div>
		@endif
	</div>


	<b>Informaões Esepcíficas</b>
	<hr>
	<div class="form-group row">
		<div class="col-md-5">
			<label for="inputState">Você foi furtado(a) ou perdeu seus documentos?</label>

			<select class="custom-select required mr-sm-2 {{ $errors->has('furto_ou_perda') ? 'is-invalid' : '' }}"name="furto_ou_perda" id="furto_ou_perda">
				<option value="{{ old('furto_ou_perda') }}">{{ old('furto_ou_perda') }}</option>
				<option value="Furto Documento">Acredito que fui furtado(a)</option>
				<option value="Perda Documento">Acredito que Perdi meu documento</option>

				@if($errors->has('furto_ou_perda'))
				<div class="invalid-feedback">
					{{ $errors->first('furto_ou_perda') }}
				</div>
				@endif
			</select>
		</div>

		<div class="col-md-4">
			<label for="inputState">Qual o documento Perdido</label>
			<select class="custom-select required mr-sm-2 {{ $errors->has('tipo') ? 'is-invalid' : '' }}" name="tipo" id="tipo">
				<option value="{{ old('tipo') }}">{{ old('tipo') }}</option>
				<option value="CPF">CPF</option>
				<option value="RG">RG</option>
				<option value="CNH">CNH</option>
				<option value="Carteira de Trabalho<">Carteira de Trabalho</option>
				<option value="Certidão de Reservista">Certidão de Reservista</option>
				<option value="CRLV">CRLV</option>
				<option value="Passaporte">Passaporte</option>
				<option value="RNE">RNE</option>
				<option value="Título de Eleitor">Título de Eleitor</option>

				@if($errors->has('tipo'))
				<div class="invalid-feedback">
					{{ $errors->first('tipo') }}
				</div>
				@endif
			</select>
		</div>

		<div class="form-group col-md">
			<label for="inputnascimento">Número do Documento Perdido</label>
			<input type="number" class="form-control {{ $errors->has('doc_numero') ? 'is-invalid' : '' }}" name="doc_numero" id="doc_numero" value="{{ old('doc_numero') }}">

			@if($errors->has('doc_numero'))
			<div class="invalid-feedback">
				{{ $errors->first('doc_numero') }}
			</div>
			@endif
		</div>

	</div>


	<b>Local onde Ocorreu o furto ou a possível perda</b>
	<hr>
	<div class="form-group row">

		<div class="form-group col-md-8">
			<label for="inputRua">Rua</label>
			<input type="text" class="form-control {{ $errors->has('rua') ? 'is-invalid' : '' }}" name="rua" id="rua" placeholder="Rua" value="{{ old('rua') }}">

			@if($errors->has('rua'))
			<div class="invalid-feedback">
				{{ $errors->first('rua') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-4">
			<label for="inputBairro">Bairro</label>
			<input type="text" class="form-control {{ $errors->has('bairro') ? 'is-invalid' : '' }}" name="bairro" id="bairro" placeholder="Bairro" value="{{ old('bairro') }}">

			@if($errors->has('bairro'))
			<div class="invalid-feedback">
				{{ $errors->first('bairro') }}
			</div>
			@endif
		</div>


		<div class="col-md">
			<label for="inputState">Estado</label>

			<select class="custom-select required mr-sm-2 {{ $errors->has('estado') ? 'is-invalid' : '' }}"name="estado" id="estado">
				<option value="{{ old('estado') }}">{{ old('estado') }}</option>
				<option value="MG">MG</option>
				<option value="RJ">RJ</option>
				<option value="SP">SP</option>
				<option value="DF">DF</option>
				<option value="AC">AC</option>
				<option value="AL">AL</option>
				<option value="AP">AP</option>
				<option value="AM">AM</option>
				<option value="BA">BA</option>
				<option value="CE">CE</option>
				<option value="ES">ES</option>
				<option value="GO">GO</option>
				<option value="MA">MA</option>
				<option value="MT">MT</option>
				<option value="MS">MS</option>
				<option value="PA">PA</option>
				<option value="PB">PB</option>
				<option value="PR">PR</option>
				<option value="PE">PE</option>
				<option value="PI">PI</option>
				<option value="RN">RN</option>
				<option value="RS">RS</option>
				<option value="RO">RO</option>
				<option value="RR">RR</option>
				<option value="SC">SC</option>
				<option value="SE">SE</option>
				<option value="TO">TO</option>

				@if($errors->has('estado'))
				<div class="invalid-feedback">
					{{ $errors->first('estado') }}
				</div>
				@endif
			</select>
		</div>

		<div class="form-group col-md-9">
			<label for="inputCidade">Cidade</label>
			<input type="text" class="form-control {{ $errors->has('cidade') ? 'is-invalid' : '' }}" name="cidade" id="cidade" placeholder="Cidade" value="{{ old('cidade') }}">

			@if($errors->has('cidade'))
			<div class="invalid-feedback">
				{{ $errors->first('cidade') }}
			</div>
			@endif
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Registrar Perda/Furto de documento</button> 
</form>
@endsection