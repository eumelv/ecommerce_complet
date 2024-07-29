<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        input[type='text']
        {
            width: 400px;
            height: 44px;
        }
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }
        .table_deg
        {
            text-align: center;
            margin: auto;
            border: 2px solid yellowgreen;
            margin-top: 50px;
            width: 600px;
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

            <h1 style="color: white;">Adicionar categoria</h1>

            <div class="div_deg">

                <form action="{{url('add_category')}}" method="post">

                @csrf
                    
                    <div>
                        <input type="text" name="category">
                        <input type="submit" value="Adicionar categoria" class="btn btn-primary">
                    </div>

                </form>

            </div>

            <div>

                <table class="table table-striped">

                    <thead>

                        <tr>
                            <th>Nome da categoria</th>
                            <th>Editar</th>
                            <th>Apagar</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($data as $data)

                        <tr>
                            <td>{{$data->category_name}}</td>
                            <td>
                                <a class="btn btn-success" href="{{url('edit_category', $data->id)}}">Editar</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Apagar</a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>
            
      </div>
    </div>
    <!-- JavaScript files-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



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