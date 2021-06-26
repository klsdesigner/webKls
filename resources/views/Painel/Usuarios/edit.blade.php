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

                @if ($errors->any())                    
                    <div class="alert alert-danger" role="alert"> 
                        <ul>
                            @foreach ($errors->all() as $error)                            
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              
                <!-- form start -->
                <form role="form" action="{{ route('user.update', ['id' => $user->id] ) }}" id="formEdit" name="formEdit" method="POST">
                    @csrf
                    @method('PUT')                                          
                                                      
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <div class="col-6 row">
                            <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Seu Nome" value="{{ $user->name }}" autofocus>
                        </div>
                    </div>                
                
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <div class="col-6 row">
                            <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="E-mail válido" value="{{ $user->email }}">
                        </div>    
                    </div>

                    <div class="form-group">                            
                        <label for="password">Senha</label>                                    
                        <div class="col-3 row">
                            <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Senha">                                   
                        </div>
                    </div>   

                    <div class="form-group">
                        <label for="avatar">Foto</label>
                        <div class="col-6 row">                                
                            <input type="file" class="form-control-file form-control-sm" id="avatar" name="avatar">             
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary" name="btn">Salvar Alteração</button>
                        <a class='btn btn-default' href="{{ route('user.index') }}" title="Voltar"> <i class="fa fa-reply text-muted"></i> Voltar</a>
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        {{-- =============================================== --}}

    </div>

@endsection