@extends('layouts.buyer')
@section('content')

<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__=	"dreamweaver"</script><script src="http://use.edgefonts.net/actor:n4:default;acme:n4:default.js" type="text/javascript"></script>
<main class="contenido ">
    <section class="imagenprincipal">
        <div class="imagenprincipal">
          <div class="textoimagenprincipal">
            <h1>Abre tu negocio online<br>
              ¡Sólo pagas por venta realizada!<br>
            </h1>
          </div>
          {{--<img src="../../../assets/images/ventajas.png" alt=""/>    </div>--}}
          <img src="{{ URL::asset('assets/images/ventajas.png') }}" alt=""/>
        </div>
    </section>
    <div class="textoventajas">
        <h3>Ventajas</h3>
        <p>Crea tu negocio online</p>
        <p>Gestiona tus productos o menús</p>
        <p>Administra tus pedidos y entregas</p>
        <p>Conoce a tus clientes</p>
        <p>Paga solo por venta</p>
        <p>¡Vende más!  </p>
    </div>

    <div class="imagenventajas">
        {{-- <img src="../../../assets/images/Ventajas-Cerca-DE-MI.jpg" alt="" width="479" height="266"/>--}}
            <img src="{{ URL::asset('assets/images/Ventajas-Cerca-DE-MI.jpg') }}" alt="" width="479" height="266"/>
    </div>

    <div class="espacio"> </div>

    <div class="ejemploportal">
        <h3>¿Cómo será tu portal digital?</h3>
        <div class="imgejemploportal"><a href="{{URL::asset('assets/images/EjemploPortal.png')}}"><a href="{{URL::asset('assets/images/EjemploPortal.png')}}"></a></div>
    </div>

      <div class="abrirportaldigital">
        <h3>¿Cómo abrir tu portal digital?</h3>
    <section class="comoabrir">
        <div class="comoabrir1">
          <img src="{{URL::asset('assets/images/iconregistration.png')}}" alt=""/>
          <p>Regístrate</p>
         </div>
    <div class="comoabrir2"> <img src="{{URL::asset('assets/images/icondescribebusiness.png')}}" alt=""/>
          <p>Describe tu Negocio</p>
        </div>
        <div class="comoabrir3">
          <p><img src="{{URL::asset('assets/images/iconaddproducts.png')}}" alt=""/></p>
          <p>Añade tus productos o Menú</p>
        </div>
        <div class="comoabrir4">
          <img src="{{URL::asset('assets/images/iconpublbusiness.png')}}" alt=""/>

          <p>Publicita tu Negocio</p>
        </div>
              </section>
        <div class="espacio"> </div>
        <div class="TextoRegistrate">
          <p>s</p>
        </div>
        <div class="buttonregistrate">
          <p><a href="{{route('bus/signup')}}">Regístrate</a></p>
        </div>
    <div class="Precios">
      <p>Si no tienes tiempo para crear tu negocio online, nosotros lo hacemos por ti, puedes contactarnos a:</p>
      <p>Teléfono: +34 673 74 74 46</p>
      <p>Email: <a href="mailto:info@cercademi.me">info@cercademi.me</a></p>
      <h1>¡Así de sencillo!</h1>
      <h2>Precios Pre Apertura</h2>
      <p>Esta oferta durará hasta el día del lanzamiento del portal al público. </p>
      <p>Descuentos en las comisiones durante un año entero.</p>
      <p>Tiendas de Electrodomésticos, Tecnología y electrónicos (Móviles, Ordenadores, etc)</p>
      <h5>Comisión 10% del precio del producto</h5>
      <p>Comisión para tiendas de Perfumes, Cosméticos, Ropa, Juguetes, Relojes y otros</p>
      <h5>Comisión 15% del precio del producto</h5>
      <p>Restaurantes Reservas</p>
      <h5>Comisión 1,50 € por persona</h5>
      <p>Restaurantes Pedidos </p>
      <h5>Comisión 15% del total del pedido</h5>
      <h2>Precios Post Apertura</h2>
      <p>Tiendas de Electrodomésticos, Tecnología y electrónicos (Móviles, Ordenadores, etc)</p>
      <h5>Comisión 15% del precio del producto</h5>
      <p>Comisión para tiendas de Perfumes, Cosméticos, Ropa, Juguetes, Relojes y otros</p>
      <h5>Comisión 20% del precio del producto</h5>
      <p>Restaurantes Reservas</p>
      <h5>Comisión 2 € por persona</h5>
      <p>Restaurantes Pedidos </p>
      <h5>Comisión 20% del total del pedido</h5>
      <p>&nbsp;</p>
    </div>
      </div>
    </main>
<p>@endsection</p>
