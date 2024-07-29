<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <div>
                <h1 class="tt-products">Encomendas recebidas</h1>

                <table class="table table-striped">

                    <thead>
                            
                            <tr>
                                <th>Cliente</th>
                                <th>Endereço</th>
                                <th>Telefone</th>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Imagem</th>
                                <th>Status</th>
                                <th>Alterar status</th>
                            </tr>

                    </thead>

                    <tbody>

                        @foreach($data as $data)

                            <tr>
                                <td>{{$data->nome}}</td>
                                <td>{{$data->endereco}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->product->titulo}}</td>
                                <td>{{number_format($data->product->preco)}}</td>
                                <td><img height="40" width="40" src="/products/{{$data->product->image}}" alt=""></td>
                                <td>{{$data->status}}</td>
                                <td>
                                    <a href="{{url('on_the_way', $data->id)}}" class="btn btn-primary">On the way</a>
                                    <a href="{{url('delivered', $data->id)}}" class="btn btn-success">Delivered</a>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                    
                </table>
                <br>
                
                <div class="d-flex justify-content-center">
                    
                </div>

            </div>
            
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>