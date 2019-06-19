@extends('layouts.appDenuncia1')

@section('denunciaNome')
Registro Perda ou Furto de Objetos
@endsection

@section('naveg')
Registro Perda ou Furto de Objetos
@endsection

@section('denuncia')

<form method="POST" action="{{ route('obj.submit') }}">
	@csrf

	<b>Dados Pessoais de quem perdeu os Documentos</b>
	<hr>

	<div class="form-group row">
		<div class="col-md-8">
			<label for="inputNome">Nome</label>
			<input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" id="nome" placeholder="Nome que consta no Documento" value="{{ old('nome') }}">

			@if($errors->has('nome'))
			<div class="invalid-feedback">
				{{ $errors->first('nome') }}
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

		<div class="col-md-2">
			<label for="inputState">UF do RG</label>

			<select class="custom-select required mr-sm-2 {{ $errors->has('ufrg') ? 'is-invalid' : '' }}"name="ufrg" id="ufrg">
				<option value="">UF do RG</option>
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

		<div class="form-group col-md">
			<label for="inputCPF">CPF</label>
			<input type="number" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" name="cpf" id="cpf" placeholder="CPF" value="{{ old('cpf') }}">

			@if($errors->has('cpf'))
			<div class="invalid-feedback">
				{{ $errors->first('cpf') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md">
			<label for="inputnascimento">Data de Nascimento</label>
			<input type="date" class="form-control {{ $errors->has('nascimento') ? 'is-invalid' : '' }}" name="nascimento" id="nascimento" value="{{ old('nascimento') }}">

			@if($errors->has('nascimento'))
			<div class="invalid-feedback">
				{{ $errors->first('nascimento') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md">
			<label for="inputnascimento">Telefone</label>
			<input type="number" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : '' }}" name="telefone" id="telefone" value="{{ old('telefone') }}">

			@if($errors->has('telefone'))
			<div class="invalid-feedback">
				{{ $errors->first('telefone') }}
			</div>
			@endif
		</div>
	</div>

	<b>Informações Sobre o objeto</b>
	<hr>

	<div class="form-group row">
		<div class="col-md-8">
			<label for="inputNome">Nome do objeto</label>
			<input type="text" class="form-control {{ $errors->has('objeto_nome') ? 'is-invalid' : '' }}" name="objeto_nome" id="objeto_nome" placeholder="Nome do objeto" value="{{ old('objeto_nome') }}">

			@if($errors->has('objeto_nome'))
			<div class="invalid-feedback">
				{{ $errors->first('objeto_nome') }}
			</div>
			@endif
		</div>

		<div class="col-md-4">
			<label for="inputNome">Marca do objeto</label>
			<input type="text" class="form-control {{ $errors->has('objeto_marca') ? 'is-invalid' : '' }}" name="objeto_marca" id="objeto_marca" placeholder="Marca do objeto" value="{{ old('objeto_marca') }}">

			@if($errors->has('objeto_marca'))
			<div class="invalid-feedback">
				{{ $errors->first('objeto_marca') }}
			</div>
			@endif
		</div>

		<div class="col-md">
			<label for="inputNome">Cor do objeto</label>
			<input type="text" class="form-control {{ $errors->has('objeto_cor') ? 'is-invalid' : '' }}" name="objeto_cor" id="objeto_cor" placeholder="Cor do objeto" value="{{ old('objeto_cor') }}">

			@if($errors->has('objeto_cor'))
			<div class="invalid-feedback">
				{{ $errors->first('objeto_cor') }}
			</div>
			@endif
		</div>

		<div class="col-md">
			<label for="inputNome">Valor aproximado do objeto</label>
			<input type="number" class="form-control {{ $errors->has('objeto_valor') ? 'is-invalid' : '' }}" name="objeto_valor" id="objeto_valor" placeholder="Vallor do objeto" value="{{ old('objeto_valor') }}">

			@if($errors->has('objeto_valor'))
			<div class="invalid-feedback">
				{{ $errors->first('objeto_valor') }}
			</div>
			@endif
		</div>

		<div class="col-md">
			<label for="inputNome">Quantidade do objeto</label>
			<input type="number" class="form-control {{ $errors->has('objeto_quantidade') ? 'is-invalid' : '' }}" name="objeto_quantidade" id="objeto_quantidade" placeholder="Quantidade do objeto" value="{{ old('objeto_quantidade') }}">

			@if($errors->has('objeto_quantidade'))
			<div class="invalid-feedback">
				{{ $errors->first('objeto_quantidade') }}
			</div>
			@endif
		</div>
	</div>

	<div class="form-group">
		<label for="comment">Descreva o Objeto perdido ou furtado</label>
		<textarea class="form-control {{ $errors->has('objeto_descricao') ? 'is-invalid' : '' }}" rows="5" name="objeto_descricao" id="comment" placeholder="Descrição do objeto">{{ old('objeto_descricao') }}</textarea>
		@if($errors->has('objeto_descricao'))
		<div class="invalid-feedback">
			{{ $errors->first('objeto_descricao') }}
		</div>
		@endif
	</div>
	

	<b>Informações Sobre a ocorrência</b>
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

	<div class="form-group">
		<label for="comment">Descricao do Suspeito - (Em caso de Roubo)</label>
		<textarea class="form-control {{ $errors->has('suspeito') ? 'is-invalid' : '' }}" rows="5" name="suspeito" id="comment" placeholder="Descrição do suspeito">{{ old('suspeito') }}</textarea>
		@if($errors->has('suspeito'))
		<div class="invalid-feedback">
			{{ $errors->first('suspeito') }}
		</div>
		@endif
	</div>


	<b>Informaões Esepcíficas</b>
	<hr>
	<div class="form-group row">
		<div class="col-md-5">
			<label for="inputState">Você foi furtado(a) ou perdeu seu Pertence??</label>

			<select class="custom-select required mr-sm-2 {{ $errors->has('furto_ou_perda') ? 'is-invalid' : '' }}"name="furto_ou_perda" id="furto_ou_perda">
				<option value="{{ old('furto_ou_perda') }}">{{ old('furto_ou_perda') }}</option>
				<option value="Furto Objeto">Acredito que fui furtado(a)</option>
				<option value="Perda Objeto">Acredito que Perdi meu objeto</option>

				@if($errors->has('furto_ou_perda'))
				<div class="invalid-feedback">
					{{ $errors->first('furto_ou_perda') }}
				</div>
				@endif
			</select>
		</div>

		<div class="form-group col-md">
			<label for="inputnascimento">Data do Roubo/Perda</label>
			<input type="date" class="form-control {{ $errors->has('dataRoubo') ? 'is-invalid' : '' }}" name="dataRoubo" id="dataRoubo" value="{{ old('dataRoubo') }}">

			@if($errors->has('dataRoubo'))
			<div class="invalid-feedback">
				{{ $errors->first('dataRoubo') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md">
			<label for="inputnascimento">Hora do Roubo/Perda</label>
			<input type="time" class="form-control {{ $errors->has('horaRoubo') ? 'is-invalid' : '' }}" name="horaRoubo" id="horaRoubo" value="{{ old('horaRoubo') }}">

			@if($errors->has('horaRoubo'))
			<div class="invalid-feedback">
				{{ $errors->first('horaRoubo') }}
			</div>
			@endif
		</div>

		<div class="col-md-6">
			<label for="inputState">O furto envolveu grave ameaça ou agressão?</label>
			<select class="custom-select required mr-sm-2 {{ $errors->has('ameaca') ? 'is-invalid' : '' }}"name="ameaca" id="ameaca">
				<option value="{{ old('ameaca') }}">{{ old('ameaca') }}</option>
				<option value="Sim">Sim</option>
				<option value="Não">Não</option>
				@if($errors->has('ameaca'))
				<div class="invalid-feedback">
					{{ $errors->first('ameaca') }}
				</div>
				@endif
			</select>
		</div>

		<div class="col-md-6">
			<label for="inputState">O objeto é propriedade de algum órgão público?</label>
			<select class="custom-select required mr-sm-2 {{ $errors->has('publico') ? 'is-invalid' : '' }}"name="publico" id="publico">
				<option value="{{ old('publico') }}">{{ old('publico') }}</option>
				<option value="Sim">Sim</option>
				<option value="Não">Não</option>
				@if($errors->has('publico'))
				<div class="invalid-feedback">
					{{ $errors->first('publico') }}
				</div>
				@endif
			</select>
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