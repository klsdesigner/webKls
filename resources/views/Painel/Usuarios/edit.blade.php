@extends('Painel.Layouts.index')

@section('content')

    <div class="col-md-12">        
        
        {{-- Edite de Usuários ============================= --}}
                
        <div class="card card-gray">
            <div class="card-header">
              <h3 class="card-title">Manutenção de Usuário</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
                <!-- form start -->
                <form role="form" action="{{ route('painel.user.update', ['user' => $user->id]) }}" name="alteracao" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Seu Nome" value="{{ $user->name }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="E-mail válido" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <div class="row">
                                <div class="col-3">
                                    <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Senha">
                                </div>
                            </div>
                        </div>   
                        <div class="form-group">
                            <label for="avatar">Foto</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="avatar" name="avatar" >
                                <label class="custom-file-label" for="avatar">Sua Foto</label>
                              </div>                              
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="btn">Salvar Alteração</button>
                    <a href="{{ route('painel.user.index') }}" title="Voltar"> <i class="fa fa-reply text-muted"></i></a>
                    </div>
                </form>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        {{-- =============================================== --}}

    </div>

@endsection