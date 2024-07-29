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

                <h1 style="color: white;">Adicionar produto</h1>

                <form action="{{url('upload_product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-4">
                        <label>Título</label>
                        <input class="form-control" type="text" name="titulo">
                    </div>

                    <div class="col-lg-4">
                        <label>Descrição</label>
                        <textarea class="form-control" name="descricao"></textarea>
                    </div>

                    <div class="col-lg-4">
                        <label>Preço</label>
                        <input class="form-control" type="number" name="preco">
                    </div>

                    <div class="col-lg-4">
                        <label>Quantidade</label>
                        <input class="form-control" type="text" name="quantidade">
                    </div>

                    <div class="col-lg-4">
                        <label>Categoria</label>
                        <select class="form-control" name="categoria">
                            <option>Sekecione uma opção</option>

                            @foreach($category as $category)

                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>    

                            @endforeach

                        </select>
                    </div>

                    <div class="col-lg-4">
                        <label>Imagem</label>
                        <input class="form-control" type="file" name="image">
                    </div>

                    <div class="col-lg-4">
                        <input class="btn btn-success" type="submit" value="Adicionar produto">
                    </div>

                </form>

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