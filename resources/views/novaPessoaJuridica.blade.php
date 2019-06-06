@extends('layouts.appDelegado')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Cadastro de pessoa jurídica</div>

        <div class="card-body">
          <form method="POST" action="{{ route('cadastro.pessoa.juridica.submit') }}">
            @csrf

            <b>Dados Pessoais</b>
            <hr>

            <div class="form-group row">

              <!--Campo Nome-->
              <div class="col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" placeholder="Nome" value="{{ old('name') }}">

                @if($errors->has('name'))
                <div class="invalid-feedback">
                  {{ $errors->first('name') }}
                </div>
                @endif
              </div>

              <!--Campo Razão Social-->
              <div class="form-group col-md">
                <label for="inputCPF">Razão Social</label>
                <input type="text" class="form-control {{ $errors->has('razao_social') ? 'is-invalid' : '' }}" name="razao_social" id="razao_social" placeholder="Razão Social" value="{{ old('razao_social') }}">

                @if($errors->has('razao_social'))
                <div class="invalid-feedback">
                  {{ $errors->first('razao_social') }}
                </div>
                @endif
              </div>


            </div>

            <div class="form-group row">

              <!--Campo CNPJ-->
              <div class="col-md-4">
                <label for="inputCNPJ">CNPJ</label>
                <input type="number" class="form-control  {{ $errors->has('cnpj') ? 'is-invalid' : '' }}" name="cnpj" id="cnpj" placeholder="CNPJ" value="{{ old('cnpj') }}">

                @if($errors->has('cnpj'))
                <div class="invalid-feedback">
                  {{ $errors->first('cnpj') }}
                </div>
                @endif
              </div>

              <!--Campo Data de Nascimento-->
              <div class="form-group col-md-3">
                <label for="inputnascimento">Data de Nascimento</label>
                <input type="date" class="form-control {{ $errors->has('nascimento') ? 'is-invalid' : '' }}" name="nascimento" id="nascimento" value="{{ old('nascimento') }}">

                @if($errors->has('nascimento'))
                <div class="invalid-feedback">
                  {{ $errors->first('nascimento') }}
                </div>
                @endif
              </div>

              <!--Campo Telefone-->
              <div class="form-group col">
                <label for="telefone">Telefone</label>
                <input type="number" class="form-control  {{ $errors->has('telefone') ? 'is-invalid' : '' }}" name="telefone" id="telefone" placeholder="Telefone" value="{{ old('telefone') }}">

                @if($errors->has('telefone'))
                <div class="invalid-feedback">
                  {{ $errors->first('telefone') }}
                </div>
                @endif
              </div>

              <!--Campo Tipo-->
              <div class="form-group col-md-2">
                <label for="inputTipo">Vítima ou Testemunha?</label>

                <select class="custom-select required mr-sm-2 {{ $errors->has('tipo') ? 'is-invalid' : '' }}" name="tipo" id="tipo">
                  <option value="">Selecione</option>
                  <option value="Vitima">Vítima</option>
                  <option value="Testemunha">Testemunha</option>
                </select>

                @if($errors->has('tipo'))
                <div class="invalid-feedback">
                  {{ $errors->first('tipo') }}
                </div>
                @endif
              </div>

            </div>


            <!--Fim da linha de cadastro pessoal e inicio da linha de cadastro de endereço-->


            <b>Endereço</b>
            <hr>


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

            <!--Fim da linha de endereço. Início da linha de Login-->


            <b>Login no sistema</b>
            <hr>


            <div class="form-group row">

              <!--Campo E-Mail-->
              <div class="col-md-6">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" placeholder="E-Mail" value="{{ old('email') }}">

                @if($errors->has('email'))
                <span class="invalid-feedback">
                  {{ $errors->first('email') }}
                </span>
                @endif
              </div>

              <!--Campo Senha-->
              <div class="col-md-6">
                <label for="Password">Senha</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" placeholder="Password">

                @if($errors->has('password'))
                <div class="invalid-feedback">
                  {{ $errors->first('password') }}
                </div>
                @endif

              </div>

            </div>

            <!--Botão de Enviar o formulario-->
            <button type="submit" class="btn btn-primary">Cadastre-se</button> 
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
