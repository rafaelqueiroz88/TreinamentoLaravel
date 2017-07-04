@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
		<h3>
	    	Imóvel
	    </h3>
	    <div class="divider"></div>
    </div>
    <div class="row section">
    	<div class="col s12 m8">
    		<div class="row">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="{{asset('img/modelo_detalhe_1.jpg')}}" alt="Imagem1"/>
                            <div class="caption left-align">
                                <h3>
                                    Titulo
                                </h3>
                                <h5>
                                    Descricao
                                </h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('img/modelo_detalhe_2.jpg')}}" alt="Imagem2"/>
                            <div class="caption right-align">
                                <h3>
                                    Titulo
                                </h3>
                                <h5>
                                    Descricao
                                </h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('img/modelo_detalhe_3.jpg')}}" alt="Imagem3"/>
                            <div class="caption center-align">
                                <h3>
                                    Titulo
                                </h3>
                                <h5>
                                    Descricao
                                </h5>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('img/modelo_detalhe_4.jpg')}}" alt="Imagem4"/>
                            <div class="caption left-align">
                                <h3>
                                    Titulo
                                </h3>
                                <h5>
                                    Descricao
                                </h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row" align="center">
                <button onClick="sliderPrev()" class="btn blue">
                    Anterior
                </button>
                <button onClick="sliderNext()" class="btn blue">
                    Próxima
                </button>
            </div>
    	</div>
    	<div class="col s12 m4">
    		<h4>
    			Título do imóvel
    		</h4>
    		<blockquote>
    			Descrição breve sobre do imóvel.
    		</blockquote>
    		<p>
            <b>
                Código: 245
            </b>    			
    		</p>
            <p>
            <b>
                Status: Vende
            </b>                
            </p>
            <p>
            <b>
                Tipo: Alvenaria
            </b>                
            </p>
            <p>
            <b>
                Endereço: Rua Luis Tomas de Lima
            </b>                
            </p>
            <p>
            <b>
                Cep: 12525-000
            </b>                
            </p>
            <p>
            <b>
                Cidade: Potim
            </b>                
            </p>
            <p>
            <b>
                Valor: R$ 200.000,000
            </b>                
            </p>
            <a class="btn deep-orange darkern-1" href="{{route('site.contato')}}">
                Entrar em contato
            </a>
    	</div>
    </div>
</div>
@endsection