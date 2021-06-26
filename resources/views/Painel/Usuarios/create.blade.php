@extends('Painel.Layouts.index')

@section('content')

    <div class="col-md-12">                
        {{-- Create de Usuários ============================ --}}
        
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Cadastro de Usuário</h3>
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


                <!-- form start  -->
                <form method="POST" role="form" id="formCreate" name="formCreate" action="{{ route('user.store') }}">
                    @csrf                    
                    
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <div class="col-6 row">
                            <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Seu Nome" value="{{ old('name') }}" autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <div class="col-6 row">
                            <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="E-mail válido" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Senha</label>                            
                        <div class="col-3 row">
                            <input type="password" class="form-control form-control-sm" name="password" id="password" placeholder="Senha">
                        </div>                            
                    </div>   
                    {{-- <div class="form-group">
                        <label for="avatar">Foto</label>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="avatar" name="avatar" >
                            <label class="custom-file-label" for="avatar">Sua Foto</label>
                            </div>                              
                        </div>
                    </div> --}} 

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary" id="btnCreate" name="btnCreate"><i class="fa fa-floppy text-muted"></i> Criar Usuarios</button>
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