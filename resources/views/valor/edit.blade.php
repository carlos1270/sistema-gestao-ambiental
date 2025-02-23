<x-app-layout>
    <div class="container" style="padding-top: 5rem; padding-bottom: 8rem;">
        <div class="form-row justify-content-center">
            <div class="col-md-10">
                <div class="form-row">
                    <div class="col-md-8">
                        <h4 class="card-title">Editar valor de licença</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Valores de licenças > Editar valor</h6>
                    </div>
                    <div class="col-md-4" style="text-align: right; padding-top: 15px;">
                        <a title="Voltar" href="{{route('valores.index')}}">
                            <img class="icon-licenciamento btn-voltar" src="{{asset('img/back-svgrepo-com.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card card-borda-esquerda" style="width: 100%;">
                    <div class="card-body">
                        <form id="valor-form" method="POST" action="{{route('valores.update', ['valore' => $valor->id])}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="porte">{{__('Porte')}}<span style="color: red; font-weight: bold;">*</span></label>
                                    <select name="porte" id="porte" class="form-control @error('porte') is-invalid @enderror" required autofocus>
                                        <option selected disabled value="">-- Selecione o porte da empresa --</option>
                                        @if (old('porte') != null)
                                            <option @if(old('porte') == $portes['micro']) selected @endif value="{{$portes['micro']}}">Micro</option>
                                            <option @if(old('porte') == $portes['pequeno']) selected @endif value="{{$portes['pequeno']}}">Pequeno</option>
                                            <option @if(old('porte') == $portes['medio']) selected @endif value="{{$portes['medio']}}">Médio</option>
                                            <option @if(old('porte') == $portes['grande']) selected @endif value="{{$portes['grande']}}">Grande</option>
                                            <option @if(old('porte') == $portes['especial']) selected @endif value="{{$portes['especial']}}">Especial</option>
                                        @else
                                            <option @if($valor->porte == $portes['micro']) selected @endif value="{{$portes['micro']}}">Micro</option>
                                            <option @if($valor->porte == $portes['pequeno']) selected @endif value="{{$portes['pequeno']}}">Pequeno</option>
                                            <option @if($valor->porte == $portes['medio']) selected @endif value="{{$portes['medio']}}">Médio</option>
                                            <option @if($valor->porte == $portes['grande']) selected @endif value="{{$portes['grande']}}">Grande</option>
                                            <option @if($valor->porte == $portes['especial']) selected @endif value="{{$portes['especial']}}">Especial</option>
                                        @endif
                                    </select>

                                    @error('porte')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="potencial_poluidor">{{__('Potencial poluidor')}}<span style="color: red; font-weight: bold;">*</span></label>
                                    <select name="potencial_poluidor" id="potencial_poluidor" class="form-control @error('potencial_poluidor') is-invalid @enderror" required>
                                        <option selected disabled value="">-- Selecione o potencial poluidor da empresa --</option>
                                        @if (old('potencial_poluidor') != null)
                                            <option @if(old('potencial_poluidor') == $potenciais_poluidores['baixo']) selected @endif value="{{$potenciais_poluidores['baixo']}}">Baixo</option>
                                            <option @if(old('potencial_poluidor') == $potenciais_poluidores['medio']) selected @endif value="{{$potenciais_poluidores['medio']}}">Médio</option>
                                            <option @if(old('potencial_poluidor') == $potenciais_poluidores['alto']) selected @endif value="{{$potenciais_poluidores['alto']}}">Alto</option>
                                        @else
                                            <option @if($valor->potencial_poluidor == $potenciais_poluidores['baixo']) selected @endif value="{{$potenciais_poluidores['baixo']}}">Baixo</option>
                                            <option @if($valor->potencial_poluidor == $potenciais_poluidores['medio']) selected @endif value="{{$potenciais_poluidores['medio']}}">Médio</option>
                                            <option @if($valor->potencial_poluidor == $potenciais_poluidores['alto']) selected @endif value="{{$potenciais_poluidores['alto']}}">Alto</option>
                                        @endif
                                    </select>

                                    @error('potencial_poluidor')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="tipo_de_licenca">{{__('Tipo de licença')}}<span style="color: red; font-weight: bold;">*</span></label>
                                    <select name="tipo_de_licença" id="tipo_de_licenca" class="form-control @error('tipo_de_licença') is-invalid @enderror" required>
                                        <option selected disabled value="">-- Selecione o tipo de licenças --</option>
                                        @if (old('tipo_de_licença') !=null)
                                            <option @if(old('tipo_de_licença') == $tipos_licenca['simplificada']) selected @endif value="{{$tipos_licenca['simplificada']}}">Simplificada</option>
                                            <option @if(old('tipo_de_licença') == $tipos_licenca['previa']) selected @endif value="{{$tipos_licenca['previa']}}">Prêvia</option>
                                            <option @if(old('tipo_de_licença') == $tipos_licenca['instalacao']) selected @endif value="{{$tipos_licenca['instalacao']}}">Instalação</option>
                                            <option @if(old('tipo_de_licença') == $tipos_licenca['operacao']) selected @endif value="{{$tipos_licenca['operacao']}}">Operação</option>
                                        @else
                                            <option @if($valor->tipo_de_licenca == $tipos_licenca['simplificada']) selected @endif value="{{$tipos_licenca['simplificada']}}">Simplificada</option>
                                            <option @if($valor->tipo_de_licenca == $tipos_licenca['previa']) selected @endif value="{{$tipos_licenca['previa']}}">Prêvia</option>
                                            <option @if($valor->tipo_de_licenca == $tipos_licenca['instalacao']) selected @endif value="{{$tipos_licenca['instalacao']}}">Instalação</option>
                                            <option @if($valor->tipo_de_licenca == $tipos_licenca['operacao']) selected @endif value="{{$tipos_licenca['operacao']}}">Operação</option>
                                        @endif

                                    </select>

                                    @error('tipo_de_licença')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="valor">{{__('Valor')}}<span style="color: red; font-weight: bold;">*</span></label>
                                    <input type="text" value="{{old('valor', $valor->valor)}}" name="valor" id="valor" class="form-control @error('tipo_de_licença') is-invalid @enderror" required>

                                    @error('valor')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                            </div>
                            <div class="col-md-6 form-group">
                                <button type="submit" class="btn btn-success btn-color-dafault submeterFormBotao" style="width: 100%;" form="valor-form">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#valor").inputmask('decimal', {
                'alias': 'numeric',
                'autoGroup': true,
                'digits': 2,
                'radixPoint': ".",
                'digitsOptional': false,
                'allowMinus': false,
                'placeholder': ''
            });
        });
    </script>
</x-app-layout>
