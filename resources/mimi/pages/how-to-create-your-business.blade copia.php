<link href="../../css/app.css" rel="stylesheet" type="text/css">
@extends('layouts.buyer')
@section('content')
    <section class="">
        <div class="ventages">
            <div class="ven-img">
                <img src="{{asset('images/ventajas.png')}}">
            </div>
            <div class="ven-con">
                <h2>Abre tu tienda Digital
                  <BR>  ¡Solo pagas por venta realizada!</h2>
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">


                    <div class="puedes-area">
                       <h2>Aprovecha la Promoción Pre Apertura</h2>
                    <h5> Los negocios (tiendas o restaurantes) que se registren hasta el 15 de Noviembre, tendrán una condición especial en nuestras comisiones. <h5>
                        <h2>Ventajas</h2>
                        <h5>Puedes crear tu negocio digital
                            <br>Añadir tus productos o menús
                           <br> Administrar tus pedidos y enviar pedidos
                            <br>Conocer quienes son tus clientes</h5>
                        <h3>¡Llegar a más clientes!</h3>
                        <h3>¿Cómo abrir tu negocio digital?</h3>
                        <div class="register-btn">
                            <a href="{{route('bus/signup')}}">Registrate</a>
                        </div>
                        <p>Tendrás acceso a tu negocio digital después de tu registro
                           y ¡Empieza a añadir productos o tu menú!</p>
                        <h3>¡Asi de sencillo!</h3>
                        <p>Si no tienes tiempo para crear tu negocio digital y estás interesado puedes contactarnos a:</p>
                        <p>Telefono: <a href="tel:+34 673 74 74 46">+34 673 74 74 46</a></p>
                        <p>Email: <a href="mailto:info@cercademi.me">info@cercademi.me</a></p>
                        <h2>Precios</h2>
                        <p>Tiendas de Electrodomesticos, Móviles, Ordenadores, Etc
                          <br>Comisón 10% del precio del producto
                           <br> Otros Productos, Ropa, Juguetes, Perfumeria, etc.
                          <br>Comisión 20% del precio del producto
                          <br>  Restaurantes Reservas<br>Comisión: 2€ por persona
                          <br>  Restaurantes Pedidos <br> Comisión: 20% del total del pedido</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
