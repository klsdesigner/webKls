@extends('Painel.Layouts.index')

@section('content')

    <div class="col-md-12">        
        
        {{-- Tabela de Usuários ============================ --}}
        <div class="card card-gray">
            <div class="card-header">
              <h3 class="card-title">Listagem de Usuários</h3>              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row mb-3">
                    <a href="{{ route('user.create') }}" class="btn bg-gradient-success"><i class="fas fa-plus"></i> Novo usuario</a>
                </div>
              <table id="userTable" class="table table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Data</th>
                        <th class="text-center" width="8%">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($users as $user)                                          
                    <tr>
                        <td class="text-center">{{ $user['id'] }}</td>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                        <td class="text-center" widht="8%">{{ date('d/m/Y H:i',  strtotime($user['created_at']) ) }}</td>
                        <td>
                            <div class="row text-center">
                            {{-- {{ route('painel.usuarios.edit', ['user' => $us->id]) }} --}}
                            <a class="btn btn-primary btn-xs ml-1" href="{{ route('user.edit', ['id' => $user->id]) }}" title="Editar"><i class="fa fa-edit"></i></a>
                            {{-- <a href="" title="Apagar" class="text-danger"></a> --}}
                            <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="POST">
                                @csrf
                                @method('delete')                                                               
                                <button type="submit" class="btn btn-danger btn-xs ml-1" name="btn"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                        </td>
                    </tr>  
                    
                    @endforeach
                    
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        {{-- =============================================== --}}
    </div>

@endsection