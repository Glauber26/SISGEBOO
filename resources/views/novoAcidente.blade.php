@extends('layouts.appDenuncia')

@section('denunciaNome')
Registro Acidentes de Trânsito
@endsection

@section('denuncia')

<form method="POST" action="{{ route('acidente.submit') }}">
	@csrf

	<b>Dados Pessoais do Condutor</b>
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

	<b>Local do Acidente</b>
	<hr>
	<div class="form-group row">

		<div class="form-group col-md-6">
			<label for="inputRua">Rua</label>
			<input type="text" class="form-control {{ $errors->has('ruaOcorrencia') ? 'is-invalid' : '' }}" name="ruaOcorrencia" id="ruaOcorrencia" placeholder="Rua" value="{{ old('ruaOcorrencia') }}">

			@if($errors->has('ruaOcorrencia'))
			<div class="invalid-feedback">
				{{ $errors->first('ruaOcorrencia') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-4">
			<label for="inputBairro">Bairro</label>
			<input type="text" class="form-control {{ $errors->has('bairroOcorrencia') ? 'is-invalid' : '' }}" name="bairroOcorrencia" id="bairroOcorrencia" placeholder="Bairro" value="{{ old('bairroOcorrencia') }}">

			@if($errors->has('bairroOcorrencia'))
			<div class="invalid-feedback">
				{{ $errors->first('bairroOcorrencia') }}
			</div>
			@endif
		</div>


		<div class="col-md">
			<label for="inputState">Estado</label>

			<select class="custom-select required mr-sm-2 {{ $errors->has('estadoOcorrencia') ? 'is-invalid' : '' }}"name="estadoOcorrencia" id="estadoOcorrencia">
				<option value="{{ old('estadoOcorrencia') }}">{{ old('estadoOcorrencia') }}</option>
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

				@if($errors->has('estadoOcorrencia'))
				<div class="invalid-feedback">
					{{ $errors->first('estadoOcorrencia') }}
				</div>
				@endif
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="inputCidade">Cidade</label>
			<input type="text" class="form-control {{ $errors->has('cidadeOcorrencia') ? 'is-invalid' : '' }}" name="cidadeOcorrencia" id="cidadeOcorrencia" placeholder="Cidade" value="{{ old('cidadeOcorrencia') }}">

			@if($errors->has('cidadeOcorrencia'))
			<div class="invalid-feedback">
				{{ $errors->first('cidadeOcorrencia') }}
			</div>
			@endif
		</div>



		<div class="col-md-6">
			<label for="inputState">Local</label>

			<select class="custom-select required mr-sm-2 {{ $errors->has('descricao_local') ? 'is-invalid' : '' }}"name="descricao_local" id="descricao_local">
				<option value="{{ old('descricao_local') }}">{{ old('descricao_local') }}</option>
				<option value="Cruzamento">Cruzamento</option>
				<option value="Desvio">Desvio</option>
				<option value="Entroncamento">Entroncamento</option>
				<option value="Passagem de nível">Passagem de nível</option>
				<option value="Rotatória">Rotatória</option>
				<option value="Rodovia">Rodovia</option>
				<option value="Estrada Rural">Estrada Rural</option>
				<option value="Outros">Outros</option>

				@if($errors->has('descricao_local'))
				<div class="invalid-feedback">
					{{ $errors->first('descricao_local') }}
				</div>
				@endif
			</select>
		</div>

	</div>

	<b>Acontecimentos</b>
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

	<div class="form-group row">
		<div class="col-md-6">
			<label for="inputState">Houve vítimas?</label>

			<select class="custom-select required mr-sm-2 {{ $errors->has('vitimas') ? 'is-invalid' : '' }}"name="vitimas" id="vitimas">
				<option value="{{ old('vitimas') }}">{{ old('vitimas') }}</option>
				<option value="Sim">Sim</option>
				<option value="Não">Não</option>

				@if($errors->has('vitimas'))
				<div class="invalid-feedback">
					{{ $errors->first('vitimas') }}
				</div>
				@endif
			</select>
		</div>

		<div class="col-md-6">
			<label for="inputState">Quantidades de Vítimas</label>

			<select class="custom-select required mr-sm-2 {{ $errors->has('quant_vitimas') ? 'is-invalid' : '' }}"name="quant_vitimas" id="quant_vitimas">
				<option value="{{ old('quant_vitimas') }}">{{ old('quant_vitimas') }}</option>
				<option value="">Nenhuma vítima</option>
				<option value="uma">1</option>
				<option value="duas">2</option>
				<option value="três">3</option>
				<option value="quatro">4</option>
				<option value="cinco">5</option>
				<option value="seis">6</option>
				<option value="sete">7</option>
				<option value="oito">8</option>
				<option value="nove">9</option>
				<option value="dez">10</option>
				<option value="mais de dez">Mais de 10</option>

				@if($errors->has('quant_vitimas'))
				<div class="invalid-feedback">
					{{ $errors->first('quant_vitimas') }}
				</div>
				@endif
			</select>
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Registrar Acidente de Trânsito</button> 
</form>
@endsection