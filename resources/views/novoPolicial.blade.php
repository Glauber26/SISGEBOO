@extends('layouts.appDelegado')

@section('content')
<div class="container">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="http://localhost/SISGEBOO/public/admin">Dashboard Admin</a></li>
      <li class="breadcrumb-item active" aria-current="page">Novo Policial</a></li>
    </ol>
  </nav>

  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Cadastro de Policial</div>

        <div class="card-body">
          <form method="POST" action="{{ route('cadastro.policial.submit') }}">
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


              <!--Campo RG-->
              <div class="col-md-4">
                <label for="inputRG">RG</label>
                <input type="number" class="form-control  {{ $errors->has('rg') ? 'is-invalid' : '' }}" name="rg" id="rg" placeholder="RG" value="{{ old('rg') }}">

                @if($errors->has('rg'))
                <div class="invalid-feedback">
                  {{ $errors->first('rg') }}
                </div>
                @endif
              </div>


              <!--Campo UF do RG-->
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
            </div>


            <!--Outra linha-->

            <div class="form-group row">

              <!--Camop CPF-->
              <div class="form-group col-md-3">
                <label for="inputCPF">CPF</label>
                <input type="number" class="form-control {{ $errors->has('cpf') ? 'is-invalid' : '' }}" name="cpf" id="cpf" placeholder="CPF" value="{{ old('cpf') }}">

                @if($errors->has('cpf'))
                <div class="invalid-feedback">
                  {{ $errors->first('cpf') }}
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
                <label for="inputFuncao">Função</label>

                <select class="custom-select required mr-sm-2 {{ $errors->has('funcao') ? 'is-invalid' : '' }}" name="funcao" id="funcao">
                  <option value="">Função</option>
                  <option value="Policial">Policial</option>
                </select>

                @if($errors->has('funcao'))
                <div class="invalid-feedback">
                  {{ $errors->first('funcao') }}
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
