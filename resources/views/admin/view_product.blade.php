<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .tt-products
        {
            margin-bottom: 4rem;
        }
    </style>

  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div>
                <h1 class="tt-products">Produtos cadastrados</h1>

                <table class="table table-striped">

                    <thead>
                            
                            <tr>
                                <th>Título do produto</th>
                                <th>Descrição</th>
                                <th>Categoria</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Imagem</th>
                                <th>Editar</th>
                                <th>Apagar</th>
                            </tr>

                    </thead>

                    <tbody>

                        @foreach($product as $products)

                            <tr>
                                <td>{{$products->titulo}}</td>
                                <td>{!!Str::limit($products->descricao, 50)!!}</td>
                                <td>{{$products->categoria}}</td>
                                <td>{{$products->preco}}</td>
                                <td>{{$products->quantidade}}</td>
                                <td><img height="40" width="40" src="products/{{$products->image}}" alt=""></td>
                                <td>
                                    <a href="{{url('update_product', $products->id)}}" class="btn btn-success">Editar</a>
                                </td>
                                <td>
                                    <a href="{{url('delete_product', $products->id)}}" class="btn btn-danger">Apagar</a>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>

                </table>
                <br>
                
                <div class="d-flex justify-content-center">
                    {{$product->onEachSide(1)->links()}}
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