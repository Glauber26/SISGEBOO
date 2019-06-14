@extends('layouts.appDenuncia')

@section('denunciaNome')
Registro Pessoas Desaparecidas
@endsection

@section('denuncia')

<form method="POST" action="{{ route('pessoa.desaparecida.submit') }}">
	@csrf

	<b>Dados Pessoais do Desaparecido</b>
	<hr>

	<div class="form-group row">
		<div class="col-md-10">
			<label for="inputNome">Nome</label>
			<input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" id="nome" placeholder="Nome" value="{{ old('nome') }}">

			@if($errors->has('nome'))
			<div class="invalid-feedback">
				{{ $errors->first('nome') }}
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

		
		<div class="col-md-4">
			<label for="inputRG">RG</label>
			<input type="number" class="form-control  {{ $errors->has('rg') ? 'is-invalid' : '' }}" name="rg" id="rg" placeholder="RG" value="{{ old('rg') }}">

			@if($errors->has('rg'))
			<div class="invalid-feedback">
				{{ $errors->first('rg') }}
			</div>
			@endif
		</div>

		<div class="col-md-4">
			<label for="inputState">UF-RG</label>
			<select class="custom-select required mr-sm-2 {{ $errors->has('ufrg') ? 'is-invalid' : '' }}" name="ufrg" id="ufrg">
				<option value="{{ old('ufrg') }}">{{ old('ufrg') }}</option>
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

				@if($errors->has('ufrg'))
				<div class="invalid-feedback">
					{{ $errors->first('ufrg') }}
				</div>
				@endif
			</select>
		</div>

		<div class="form-group col-md-4">
			<label for="inputCPF">CPF</label>
			<input type="number" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" name="cpf" id="cpf" placeholder="CPF" value="{{ old('cpf') }}">

			@if($errors->has('cpf'))
			<div class="invalid-feedback">
				{{ $errors->first('cpf') }}
			</div>
			@endif
		</div>
	</div>

	<b>Ultimo local onde a pessoa foi vista</b>
	<hr>
	<div class="form-group row">

		<div class="form-group col-md-5">
			<label for="inputRua">Rua</label>
			<input type="text" class="form-control {{ $errors->has('ultima_localizacao_rua') ? 'is-invalid' : '' }}" name="ultima_localizacao_rua" id="ultima_localizacao_rua" placeholder="Rua" value="{{ old('rua') }}">

			@if($errors->has('ultima_localizacao_rua'))
			<div class="invalid-feedback">
				{{ $errors->first('ultima_localizacao_rua') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-3">
			<label for="inputBairro">Bairro</label>
			<input type="text" class="form-control {{ $errors->has('ultima_localizacao_bairro') ? 'is-invalid' : '' }}" name="ultima_localizacao_bairro" id="ultima_localizacao_bairro" placeholder="Bairro" value="{{ old('ultima_localizacao_bairro') }}">

			@if($errors->has('ultima_localizacao_bairro'))
			<div class="invalid-feedback">
				{{ $errors->first('ultima_localizacao_bairro') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-3">
			<label for="inputCidade">Cidade</label>
			<input type="text" class="form-control {{ $errors->has('ultima_localizacao_cidade') ? 'is-invalid' : '' }}" name="ultima_localizacao_cidade" id="ultima_localizacao_cidade" placeholder="Cidade" value="{{ old('ultima_localizacao_cidade') }}">

			@if($errors->has('ultima_localizacao_cidade'))
			<div class="invalid-feedback">
				{{ $errors->first('ultima_localizacao_cidade') }}
			</div>
			@endif
		</div>

		<div class="col-md-1">
			<label for="inputState">Estado</label>

			<select class="custom-select required mr-sm-2 {{ $errors->has('ultima_localizacao_estado') ? 'is-invalid' : '' }}"name="ultima_localizacao_estado" id="ultima_localizacao_estado">
				<option value=""></option>
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

				@if($errors->has('ultima_localizacao_estado'))
				<div class="invalid-feedback">
					{{ $errors->first('ultima_localizacao_estado') }}
				</div>
				@endif
			</select>
		</div>

	</div>

	<b>Endereço da Família</b>
	<hr>
	<div class="form-group">
		<label for="comment">Descreva os acontecimentos</label>
		<textarea class="form-control {{ $errors->has('descricao') ? 'is-invalid' : '' }}" rows="5" name="descricao" id="comment" placeholder="Descrição dos Acontecimentos">{{ old('descricao') }}</textarea>
		@if($errors->has('descricao'))
		<div class="invalid-feedback">
			{{ $errors->first('descricao') }}
		</div>
		@endif
	</div>



	<b>Endereço da Família</b>
	<hr>
	<div class="form-group row">

		<div class="form-group col-md-5">
			<label for="inputRua">Rua</label>
			<input type="text" class="form-control {{ $errors->has('rua') ? 'is-invalid' : '' }}" name="rua" id="rua" placeholder="Rua" value="{{ old('rua') }}">

			@if($errors->has('rua'))
			<div class="invalid-feedback">
				{{ $errors->first('rua') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-3">
			<label for="inputBairro">Bairro</label>
			<input type="text" class="form-control {{ $errors->has('bairro') ? 'is-invalid' : '' }}" name="bairro" id="bairro" placeholder="Bairro" value="{{ old('bairro') }}">

			@if($errors->has('bairro'))
			<div class="invalid-feedback">
				{{ $errors->first('bairro') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-3">
			<label for="inputCidade">Cidade</label>
			<input type="text" class="form-control {{ $errors->has('cidade') ? 'is-invalid' : '' }}" name="cidade" id="cidade" placeholder="Cidade" value="{{ old('cidade') }}">

			@if($errors->has('cidade'))
			<div class="invalid-feedback">
				{{ $errors->first('cidade') }}
			</div>
			@endif
		</div>

		<div class="col-md-1">
			<label for="inputState">Estado</label>

			<select class="custom-select required mr-sm-2 {{ $errors->has('estado') ? 'is-invalid' : '' }}"name="estado" id="estado">
				<option value=""></option>
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

		<div class="form-group col">
			<label for="telefone">Telefone Parente(s)</label>
			<input type="number" class="form-control  {{ $errors->has('telefone') ? 'is-invalid' : '' }}" name="telefone" id="telefone" placeholder="Telefone" value="{{ old('telefone') }}">

			@if($errors->has('telefone'))
			<div class="invalid-feedback">
				{{ $errors->first('telefone') }}
			</div>
			@endif
		</div>
	</div>








	<button type="submit" class="btn btn-primary">Registrar Pessoa Desaparecida</button> 
</form>
@endsection