@extends('layouts.appDenuncia1')

@section('denunciaNome')
Registro Furto de Veículos
@endsection

@section('naveg')
Registro Furto de Veículos
@endsection


@section('denuncia')

<form method="POST" action="{{ route('furto.veiculo.submit') }}">
	@csrf

	
	<b>Descrição do Veículo Roubado</b>
	<hr>
	<div class="form-group row">

		<div class="col-md-3">
			<label for="inputState">Tipo</label>
			<select class="custom-select required mr-sm-2 {{ $errors->has('tipo') ? 'is-invalid' : '' }}"name="tipo" id="tipo">
				<option value="{{ old('tipo') }}">{{ old('tipo') }}</option>
				<option value="Carro">Carro</option>
				<option value="Ônibus">Ônibus</option>
				<option value="Micro - Ônibus">Micro - Ônibus</option>
				<option value="Caminhão">Caminhão</option>
				<option value="Motocicleta">Motocicleta</option>
				@if($errors->has('tipo'))
				<div class="invalid-feedback">
					{{ $errors->first('tipo') }}
				</div>
				@endif
			</select>
		</div>

		<div class="form-group col-md-3">
			<label for="inputRua">Chassi</label>
			<input type="number" class="form-control {{ $errors->has('chassi') ? 'is-invalid' : '' }}" name="chassi" id="chassi" placeholder="Chassi" value="{{ old('chassi') }}">

			@if($errors->has('chassi'))
			<div class="invalid-feedback">
				{{ $errors->first('chassi') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-3">
			<label for="inputRua">Renavam</label>
			<input type="number" class="form-control {{ $errors->has('renavam') ? 'is-invalid' : '' }}" name="renavam" id="renavam" placeholder="Renavam" value="{{ old('renavam') }}">

			@if($errors->has('renavam'))
			<div class="invalid-feedback">
				{{ $errors->first('renavam') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-3">
			<label for="inputRua">Placa</label>
			<input type="text" class="form-control {{ $errors->has('placa') ? 'is-invalid' : '' }}" name="placa" id="placa" placeholder="Placa" value="{{ old('placa') }}">

			@if($errors->has('placa'))
			<div class="invalid-feedback">
				{{ $errors->first('placa') }}
			</div>
			@endif
		</div>
	</div>


	<div class="form-group row">
		<div class="form-group col-md-3">
			<label for="inputRua">Ano de Fabricação</label>
			<input type="number" class="form-control {{ $errors->has('anofabricacao') ? 'is-invalid' : '' }}" name="anofabricacao" id="anofabricacao" placeholder="Ano de Fabricação" value="{{ old('anofabricacao') }}">

			@if($errors->has('anofabricacao'))
			<div class="invalid-feedback">
				{{ $errors->first('anofabricacao') }}
			</div>
			@endif
		</div>


		<div class="col-md-3">
			<label for="inputState">Categoria</label>
			<select class="custom-select required mr-sm-2 {{ $errors->has('categoria') ? 'is-invalid' : '' }}"name="categoria" id="categoria">
				<option value="{{ old('categoria') }}">{{ old('categoria') }}</option>
				<option value="Particular">Particular</option>
				<option value="Aluguel">Aluguel</option>
				<option value="Serviço">Serviço</option>
				@if($errors->has('categoria'))
				<div class="invalid-feedback">
					{{ $errors->first('categoria') }}
				</div>
				@endif
			</select>
		</div>

		<div class="form-group col-md-3">
			<label for="inputRua">Marca do Veiculo</label>
			<input type="text" class="form-control {{ $errors->has('marca') ? 'is-invalid' : '' }}" name="marca" id="marca" placeholder="Marca" value="{{ old('marca') }}">

			@if($errors->has('marca'))
			<div class="invalid-feedback">
				{{ $errors->first('marca') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-3">
			<label for="inputRua">Cor do Veiculo</label>
			<input type="text" class="form-control {{ $errors->has('objeto_cor') ? 'is-invalid' : '' }}" name="objeto_cor" id="objeto_cor" placeholder="Cor do Automovel" value="{{ old('objeto_cor') }}">

			@if($errors->has('objeto_cor'))
			<div class="invalid-feedback">
				{{ $errors->first('objeto_cor') }}
			</div>
			@endif
		</div>
	</div>

	<b>Descrição dos Acontecimentos e Suspeitos(as)</b>
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

	<div class="form-group">
		<label for="comment">Descricao do Suspeito - (Opcional)</label>
		<textarea class="form-control {{ $errors->has('suspeito') ? 'is-invalid' : '' }}" rows="5" name="suspeito" id="comment" placeholder="Descrição do suspeito">{{ old('suspeito') }}</textarea>
		@if($errors->has('suspeito'))
		<div class="invalid-feedback">
			{{ $errors->first('suspeito') }}
		</div>
		@endif
	</div>


	<div class="form-group row">
		<div class="form-group col-md-2">
			<label for="inputnascimento">Data do Roubo</label>
			<input type="date" class="form-control {{ $errors->has('dataRoubo') ? 'is-invalid' : '' }}" name="dataRoubo" id="dataRoubo" value="{{ old('dataRoubo') }}">

			@if($errors->has('dataRoubo'))
			<div class="invalid-feedback">
				{{ $errors->first('dataRoubo') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-2">
			<label for="inputnascimento">Hora do Roubo</label>
			<input type="time" class="form-control {{ $errors->has('horaRoubo') ? 'is-invalid' : '' }}" name="horaRoubo" id="horaRoubo" value="{{ old('horaRoubo') }}">

			@if($errors->has('horaRoubo'))
			<div class="invalid-feedback">
				{{ $errors->first('horaRoubo') }}
			</div>
			@endif
		</div>

		<div class="col-md-4">
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

		<div class="col-md-4">
			<label for="inputState">O veículo é propriedade de algum órgão público?</label>
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


	<b>Local do Furto</b>
	<hr>
	
	<div class="form-group row">
		<div class="form-group col-md">
			<label for="inputRua">Rua</label>
			<input type="text" class="form-control {{ $errors->has('rua_roubo') ? 'is-invalid' : '' }}" name="rua_roubo" id="rua_roubo" placeholder="Rua onde o veículo foi Roubado" value="{{ old('rua_roubo') }}">

			@if($errors->has('rua_roubo'))
			<div class="invalid-feedback">
				{{ $errors->first('rua_roubo') }}
			</div>
			@endif
		</div>
	</div>




	<div class="form-group row">
		<div class="form-group col-md-5">
			<label for="inputRua">Bairro</label>
			<input type="text" class="form-control {{ $errors->has('bairro_roubo') ? 'is-invalid' : '' }}" name="bairro_roubo" id="bairro_roubo" placeholder="Bairro onde o veiculo foi roubado" value="{{ old('bairro_roubo') }}">

			@if($errors->has('bairro_roubo'))
			<div class="invalid-feedback">
				{{ $errors->first('bairro_roubo') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-3">
			<label for="inputBairro">Cidade</label>
			<input type="text" class="form-control {{ $errors->has('cidade_roubo') ? 'is-invalid' : '' }}" name="cidade_roubo" id="cidade_roubo" placeholder="Cidade onde o veiculo foi roubado" value="{{ old('cidade_roubo') }}">

			@if($errors->has('cidade_roubo'))
			<div class="invalid-feedback">
				{{ $errors->first('cidade_roubo') }}
			</div>
			@endif
		</div>

		<div class="form-group col-md-3">
			<label for="inputCidade">CEP | (Opcional)</label>
			<input type="text" class="form-control {{ $errors->has('cep_local_roubo') ? 'is-invalid' : '' }}" name="cep_local_roubo" id="cep_local_roubo" placeholder="Cep do local onde o veículo foi roubado" value="{{ old('cep_local_roubo') }}">

			@if($errors->has('cep_local_roubo'))
			<div class="invalid-feedback">
				{{ $errors->first('cep_local_roubo') }}
			</div>
			@endif
		</div>

		<div class="col-md-1">
			<label for="inputState">Estado</label>
			<select class="custom-select required mr-sm-2 {{ $errors->has('estado_roubo') ? 'is-invalid' : '' }}"name="estado_roubo" id="estado_roubo">
				<option value="{{ old('estado_roubo') }}">{{ old('estado_roubo') }}</option>
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

				@if($errors->has('estado_roubo'))
				<div class="invalid-feedback">
					{{ $errors->first('estado_roubo') }}
				</div>
				@endif
			</select>
		</div>
	</div>


	<b>Informações do Proprietário</b>
	<hr>

	<div class="form-group row">
		<div class="col-md-6">
			<label for="inputNome">Nome</label>
			<input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" name="nome" id="nome" placeholder="Nome" value="{{ old('nome') }}">

			@if($errors->has('nome'))
			<div class="invalid-feedback">
				{{ $errors->first('nome') }}
			</div>
			@endif
		</div>
		
		<div class="form-group col-md-3">
			<label for="inputCPF">CPF</label>
			<input type="number" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" name="cpf" id="cpf" placeholder="CPF" value="{{ old('cpf') }}">

			@if($errors->has('cpf'))
			<div class="invalid-feedback">
				{{ $errors->first('cpf') }}
			</div>
			@endif
		</div>

		<div class="form-group col">
			<label for="telefone">Telefone</label>
			<input type="number" class="form-control  {{ $errors->has('telefone') ? 'is-invalid' : '' }}" name="telefone" id="telefone" placeholder="Telefone" value="{{ old('telefone') }}">

			@if($errors->has('telefone'))
			<div class="invalid-feedback">
				{{ $errors->first('telefone') }}
			</div>
			@endif
		</div>
	</div>


	<b>Endereço do Proprietário</b>
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
	</div>



	<button type="submit" class="btn btn-primary">Registrar Furto de Veículo</button> 
</form>
@endsection



