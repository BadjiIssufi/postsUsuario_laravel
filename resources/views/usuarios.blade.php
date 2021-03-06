@extends('templates.app')

@section('conteudo')

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="/usuarios">Usuários</a></li>
            <li role="presentation"><a href="{{route("Usuario.index")}}">Posts</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Prova de Web - Posts</h3>
      </div>

      <div class="row marketing">

        <div class="col-sm-12">
            <form class="form-inline" action="/usuarios" method="POST">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group col-sm-10">
                <label for="nomeusuario" class="col-sm-4 control-label">Nome do Usuário</label>
                <div class="input-group col-sm-8">
                  <input type="text" class="form-control" name="nome" id="nomeusuario">
                </div>
              </div>
              <div class="form-group col-sm-2">
                  <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
        </div>

        <br><br><br><br>

        <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading">Usuários Cadastrados</div>

              <table class="table table-bordered table-hover" >
                <thead>

                  <tr>
                    <th>Código</th>
                    <th>Nome do Usuário</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($usuarios as $U)
                    <tr>
                        <td style="horizontal-align: left;">{{$u->id}}</td>
                        <td>{{$u->nome}}</td>
                        <td>
                            <a href="/usuarios/editar/1" class="btn btn-xs btn-primary">Editar</a>
                            <a href="/usuarios/apagar/1" class="btn btn-xs btn-danger">Remover</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
              </table>

            </div>
        </div>

      </div>

      <footer class="footer">
        <p>&copy; 2020 SI - UFMT/CUR</p>
      </footer>

    </div> <!-- /container -->

@endsection
