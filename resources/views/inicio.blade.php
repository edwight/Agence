@extends('layouts.main')

@section('content')
 <main id="wrapper" class="animate">
    
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="row">              
                @include('layouts.fechas')
              </div>

              <div class="row" style="margin-top: 10px">
                <div class="col-md-5">
                  <select name="from" id="multiselect" class="form-control" size="8" multiple="multiple">
                          <option v-for="user in users" v-bind:value="user.co_usuario">@{{user.no_usuario}}</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <button type="button" id="multiselect_rightAll" class="btn btn-block"><i class="fa fa-angle-double-right"></i></button>
                  <button type="button" id="multiselect_rightSelected" class="btn btn-block"><i class="fa fa-angle-right"></i></button>
                  <button type="button" id="multiselect_leftSelected" class="btn btn-block"><i class="fa fa-angle-left"></i></button>
                  <button type="button" id="multiselect_leftAll" class="btn btn-block"><i class="fa fa-angle-double-left"></i></button>
                </div>
                <div class="col-md-5">
                  <select name="to" id="multiselect_to" class="form-control" size="8" multiple="multiple">
                  </select>
                </div>
              </div>

              <div class="row" style="margin-top: 3em">
                <div class="col-md-6 offset-md-3">
                  <div class="row justify-content-md-center">
                    <div class="col-md-4">
                      <a href="#" v-on:click="getData()" class="btn btn-info"><i class="fa fa-file"></i> Relatorio </a>
                    </div>
                    <div class="col-md-4">
                      <a href="#" v-on:click="getGraficoBar()" class="btn btn-info"><i class="fa fa-bar-chart"></i> Grafico</a>
                    </div>
                    <div class="col-md-4">
                      <a href="#" v-on:click="getGraficoPie()" class="btn btn-info"><i class="fa fa-pie-chart"></i> Pizza</a>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col">
        <div class="card">
          <div  v-show="graficoBar" id="grafico_bar"></div>
          <div  v-show="graficoPie" id="grafico_pie"></div>
        </div>

        <div class="card" v-for="(value, key, index) in items" v-show="relatorio">
          <div class="card-body">
            <h5 class="card-title"><i class="fa fa-user"></i> @{{ value.name }}</h5>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Periodo</th>
                  <th scope="col">Receita Líquida <strong class="color-red">(Ganancias Netas)</strong></th>
                  <th scope="col">Custo Fixo <strong class="color-red">(Costo Fijo)</strong></th>
                  <th scope="col">Comissão <strong class="color-red">(comisión)</strong></th>
                  <th scope="col">Lucro</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="receita in value.value">
                  <th scope="row"> @{{moment(receita.periodo).format('MMMM-YYYY')}}</th>
                  <td>@{{receita.receita_liquida}} R$</td>
                  <td>@{{receita.custo_fixo}} R$</td>
                  <td>@{{receita.comissao}} R$</td>
                  <td>@{{lucro(receita.receita_liquida,receita.custo_fixo,receita.comissao)}} R$</td>
                </tr>

                <tr class="alert alert-danger">
                  <td class="color-red">SALDO</td>
                  <td>@{{value.totalReceita}} R$</td>
                  <td>@{{value.totalCustoFixo}} R$</td>
                  <td>@{{value.totalComissao}} R$</td>
                  <td>@{{value.totalLucro}} R$</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      

      </div>
    </div>
  </main>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/vue.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/vue-resource.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
</script>
@endsection