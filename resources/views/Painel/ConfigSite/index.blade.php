@extends('Painel.Layouts.index')

@section('content')

    <div class="col-md-12">        
        
        {{-- Tabela de Usuários ============================ --}}
        <div class="card card-gray">
            <div class="card-header">
              <h3 class="card-title">Config Site</h3>              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {{-- <div class="row mb-3">
                    <a href="{{ route('painel.setting.create') }}" class="btn bg-gradient-success">Novo usuario</a>
                </div> --}}
              <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                    {{-- id	
                        name	
                        email	
                        url	
                        description	
                        keyword	
                        address	
                        google_maps	
                        phone	
                        phone_mobile	
                        whatsapp	
                        logotipo	
                        icon	
                        slug	
                        created_at	
                        updated_at --}}
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Url</th>
                        <th>Telefone</th>
                        <th>Celular</th>                      
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($settings as $setting)                                          
                    <tr>
                        <td>{{ $setting['id'] }}</td>
                        <td>{{$setting['name']}}</td>
                        <td>{{$setting['email']}}</td>
                        <td>{{$setting['url']}}</td>
                        <td>{{$setting['phone']}}</td>
                        <td>{{$setting['phone_mobile']}}</td>
                        <td>{{ date('d/m/Y H:i',  strtotime($setting['created_at']) ) }}</td>
                        <td>
                            <div class="row">
                            {{-- {{ route('painel.usuarios.edit', ['user' => $us->id]) }} --}}
                            <a class="btn btn-primary btn-sm ml-1" href="{{ route('painel.setting.edit', ['setting' => $setting->id]) }}" title="Editar"><i class="fa fa-edit"></i></a>
                            {{-- <a href="" title="Apagar" class="text-danger"></a> --}}
                            {{-- <form action="{{ route('painel.user.destroy', ['user' => $us->id]) }}" method="POST">
                                @csrf
                                @method('delete')                                                               
                                <button type="submit" class="btn btn-danger btn-sm ml-1" name="btn"><i class="fa fa-trash"></i></button>
                            </form> --}}
                        </div>
                        </td>
                    </tr>  
                    
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Url</th>
                        <th>Telefone</th>
                        <th>Celular</th>                      
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        {{-- =============================================== --}}
    </div>

@endsection