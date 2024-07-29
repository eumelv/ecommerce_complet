<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
  </div>
  <!-- end hero area -->

  <!-- Produtc details start -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Product
        </h2>
      </div>
      <div class="row">

        <div class="col-md-10">
          <div class="box">

            <div class="img-box">
              <img src="../products/{{$data->image}}" alt="">
            </div>

            <div class="detail-box">
              <h6>
                {{$data->titulo}}
              </h6>
              <h6>
                Price
                <span>
                  ${{$data->preco}}
                </span>
              </h6>
            </div>

            <div class="detail-box">
              <h6>
                Categoria: {{$data->titulo}}
              </h6>
              <h6>
                Quantidade avaliada
                <span>
                  {{$data->quantidade}}
                </span>
              </h6>
            </div>

            <div class="detail-box">
              <p>{{$data->descricao}}</p>
            </div>

          </div>
        </div>

    </div>
  </section>

  <!-- Product details end -->

  <!-- info section -->
    @include('home.footer')
</body>

</html>