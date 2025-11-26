@extends('index')

@section('content')
<form action="{{ route('cadastrar.produto') }}" method="POST">
  @csrf
    
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Criar novo Produto</h1>
  </div>

  <div class="form-row">
      <div class="form-group col-md-6">
          <label for="nome">Nome</label>
          <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" placeholder="Nome" name="nome" >
          @if ($errors->has('nome'))
          <div class="invalid-feedback">{{ $errors->first('nome') }}

          </div>

          @endif
      </div>

      <div class="form-group col-md-6">
          <label for="valor">Valor</label>
          <input type="number" step="0.01" class="form-control @error('valor') is-invalid @enderror" id="valor" placeholder="Valor" name="valor" >
            @if ($errors->has('nome'))
          <div class="invalid-feedback">{{ $errors->first('valor') }}

          </div>

          @endif
      </div>
  </div>

  <button type="submit" class="btn btn-primary">CADASTRAR</button>
</form>
@endsection
