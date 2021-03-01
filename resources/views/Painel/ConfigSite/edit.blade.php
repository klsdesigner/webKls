@extends('Painel.Layouts.index')

@section('content')

    <div class="col-md-12">        
        
        {{-- Edite de Usuários ============================= --}}
                
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Configuração do Site</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
                <!-- form start -->
                <form role="form" action="{{ route('painel.setting.update', ['setting' => $setting->id]) }}" name="alteracao" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   
                    @if ($errors->any())
                      <ul>
                          @foreach ($errors as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    @endif

                    <div class="row">
                        <div class="col-sm-4">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nome do Site" autofocus value="{{ $setting->name }}">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail do Site"value="{{ $setting->email }}" >
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Url</label>
                            <input type="text" class="form-control" name="url" id="url" placeholder="url do Site" value="{{ $setting->url }}">
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Descrição</label>
                            <textarea type="text" class="form-control" name="description" id="description" placeholder="Descrição do Site..." >{{ $setting->description }}</textarea>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Palavras Chaves</label>
                            <textarea type="text" class="form-control" name="keyword" id="keyword" placeholder="Palavras Chaves separadas por , " >{{ $setting->keyword }}</textarea>                            
                          </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Endereço</label>
                            <textarea type="text" class="form-control" name="address" id="address" placeholder="Endereço do Site" >{{ $setting->address }}</textarea>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Google-Maps</label>
                            <textarea type="text" class="form-control" name="google_maps" id="google_maps" placeholder="Localização do Site" >{{ $setting->google_maps }}</textarea>                            
                          </div>
                        </div>                        
                    </div>

                    <div class="row">
                        <div class="col-sm-5">
                          <!-- text input -->
                          <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefone do Site" value="{{ $setting->phone }}">
                          </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Celular</label>
                                <input type="text" class="form-control" name="phone_mobile" id="phone_mobile" placeholder="Celular do Site" >                                
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group mt-3">
                                <label></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="whatsapp" id="whatsapp">
                                    <label class="form-check-label">WhatsApp</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <div class="custom-file">
                              <label class="form-control-file" for="logotipo">Logo do Site</label>
                              <input type="file" class="form-control-file" id="logotipo" name="logotipo">                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="custom-file">   
                              <label class="form-control-file" for="icon">Icon</label>
                              <input type="file" class="form-control-file" id="icon" name="icon" placeholder="Selecione um Icon">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary" name="btn">Salvar Alteração</button>
                    <a href="{{ route('painel.setting.index') }}" title="Voltar"> <i class="fa fa-reply text-muted"></i></a>
                    </div>
                </form>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        {{-- =============================================== --}}

    </div>

@endsection