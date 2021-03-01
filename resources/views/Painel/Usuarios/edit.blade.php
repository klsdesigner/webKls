@extends('Painel.Layouts.index')

@section('content')

    <div class="col-md-12">        
        
        {{-- Edite de Usuários ============================= --}}
                
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Manutenção de Usuário</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
                <!-- form start -->
                <form role="form" action="" name="alteracao" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">                            
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Seu Nome" value="{{ $user->name }}" autofocus>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="E-mail válido" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">                            
                                    <label for="password">Senha</label>                                    
                                    <input type="password" class="form-control " name="password" id="password" placeholder="Senha">                                   
                                </div>   
                            </div>
                            <div class="col-sm-9">                                
                                <div class="form-group">
                                    <label for="avatar">Foto</label>
                                    <input type="file" class="form-control-file form-control-sm" id="avatar" name="avatar">             
                                </div>
                            </div>
                        </div> 
                        
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="btn">Salvar Alteração</button>
                    <a href="{{ route('user.index') }}" title="Voltar"> <i class="fa fa-reply text-muted"></i></a>
                    </div>
                </form>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        {{-- =============================================== --}}

    </div>

@endsection