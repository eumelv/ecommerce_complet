<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
  </div>
  
    <br><br>

   <div class="container d-flex">

        <div class="col-lg-6">

            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Título do produto</th>
                        <th>Preço</th>
                        <th>Imagem</th>
                        <th>Deletar</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                    $value = 0;
                ?>

                    @foreach($cart as $cart)

                        <tr>
                            <td>{{$cart->product->titulo}}</td>
                            <td>{{$cart->product->preco}}</td>
                            <td>
                                <img width="60" src="/products/{{$cart->product->image}}" alt="">
                            </td>
                            <td>
                                <a href="{{url('delete_cart', $cart->id)}}" class="btn btn-danger">Deletar</a>
                            </td>
                        </tr>

                    <?php
                        $value = $value + $cart->product->preco;
                    ?>
                    @endforeach

                </tbody>

            </table>

        </div>

        <div>
            
            <div class="container">

                <div class="m-1">
                    <h5>Total a pagar: {{number_format($value)}}</h5>
                </div>

                <br>

                <form action="{{url('comfirm_order')}}" method="post">

                    @csrf

                    <div class="d-flex">
                        <div class="m-1">
                            <label>Nome do destinário</label>
                            <input type="text" class="form-control" name="nome" value="{{Auth::user()->name}}">
                        </div>
                        <div class="m-1">
                            <label for="">Endereço</label>
                            <input type="text" class="form-control" name="endereco" value="{{Auth::user()->address}}">
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="m-1">
                            <label for="">Telefone</label>
                            <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}">
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="m-2">
                            <input type="submit" class="btn btn-primary" value="Encomendar">
                        </div>
                    </div>

                </form>

            </div>
        </div>

   </div>
  <!-- info section -->
    @include('home.footer')
</body>

</html>