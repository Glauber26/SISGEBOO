@extends('layouts.appDelegado')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Registrar Denúncia Anônima</div>

        <div class="card-body">
          <form method="POST" action="{{ route('denuncia.anonima.submit') }}">
            @csrf

            <div class="form-group">

              <label for="tipo">Tipo de Ocorrência</label>
              <select name="tipo" id="tipo" class="custom-select required {{ $errors->has('tipo') ? 'is-invalid' : '' }}">
                <option value="Agressão">Agressão</option>
                <option value="Violência doméstica">Violência doméstica</option>
                <option value="Homicídio">Homicídio</option>
                <option value="Tráfico de drogas">Tráfico de drogas</option>
                <option value="Porte ilegal de armas">Porte ilegal de armas</option>
                <option value="Sequestro">Sequestro</option>
                <option value="Estupro">Estupro</option>
                <option value="Outros">Outros</option>
              </select>

              @if($errors->has('tipo'))
              <div class="invalid-feedback">
                {{ $errors->first('tipo') }}
              </div>
              @endif
            </div>


            <div class="form-group row">

              <!--Campo Rua-->
              <div class="form-group col-md-5">
                <label for="inputRua">Rua</label>
                <input type="text" class="form-control {{ $errors->has('rua') ? 'is-invalid' : '' }}" name="rua" id="rua" placeholder="Rua" value="{{ old('rua') }}">

                @if($errors->has('rua'))
                <div class="invalid-feedback">
                  {{ $errors->first('rua') }}
                </div>
                @endif
              </div>

              <!--Campo Bairro-->
              <div class="form-group col-md-3">
                <label for="inputBairro">Bairro</label>
                <input type="text" class="form-control {{ $errors->has('bairro') ? 'is-invalid' : '' }}" name="bairro" id="bairro" placeholder="Bairro" value="{{ old('bairro') }}">

                @if($errors->has('bairro'))
                <div class="invalid-feedback">
                  {{ $errors->first('bairro') }}
                </div>
                @endif
              </div>

              <!--Campo Cidade-->
              <div class="form-group col-md-3">
                <label for="inputCidade">Cidade</label>
                <input type="text" class="form-control {{ $errors->has('cidade') ? 'is-invalid' : '' }}" name="cidade" id="cidade" placeholder="Cidade" value="{{ old('cidade') }}">

                @if($errors->has('cidade'))
                <div class="invalid-feedback">
                  {{ $errors->first('cidade') }}
                </div>
                @endif
              </div>

              <!--Campo Estado-->
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
            </div>

            <div class="form-group">
              <label for="comment">Descricao do Suspeito</label>
              <textarea class="form-control {{ $errors->has('suspeito') ? 'is-invalid' : '' }}" rows="5" name="suspeito" id="comment" placeholder="Descrição do suspeito"></textarea>
              @if($errors->has('suspeito'))
              <div class="invalid-feedback">
                {{ $errors->first('suspeito') }}
              </div>
              @endif
            </div>

            <div class="form-group">
              <label for="comment">Descreva os acontecimentos</label>
              <textarea class="form-control {{ $errors->has('descricao') ? 'is-invalid' : '' }}" rows="5" name="descricao" id="comment" placeholder="Descrição dos Acontecimentos"></textarea>
              @if($errors->has('descricao'))
              <div class="invalid-feedback">
                {{ $errors->first('descricao') }}
              </div>
              @endif
            </div>


            <!--Botão de Enviar o formulario-->
            <button type="submit" class="btn btn-primary">Registrar Ocorrência Anônima</button> 
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
