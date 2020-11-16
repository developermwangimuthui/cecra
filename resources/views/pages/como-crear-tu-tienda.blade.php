<link href="../../../public/css/app.css" rel="stylesheet" type="text/css">

@extends('layouts.buyer')


@section('content')




<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__=	"dreamweaver"</script><script src="http://use.edgefonts.net/actor:n4:default;acme:n4:default.js" type="text/javascript"></script>
<main class="contenido">
  <section class="imagenprincipal">
    <div class="imagenprincipal">
      <div class="textoimagenprincipal">
        <h1>Abre tu tienda online<br>
          ¡Sólo pagas por venta realizada!<br>
        </h1>
      </div>
      <img src="../../../assets/images/ventajas.png" alt=""/>    </div>
</section>
  <div class="textoventajas">
    <h3>Ventajas    </h3>
    <p>Gestiona tus productos y pedidos</p>
    <p>Nos encargamos de las entregas*</p>
    <p>	Llega a  más clientes y conócelos</p>
    <p>Paga solo por venta</p>
    <p>Aprovecha de nuestras campañas de marketing</p>
    <p>¡Vende más!  </p>
  </div>
  <div class="imagenventajas"><img src="../../../assets/images/Ventajas-Cerca-DE-MI.jpg" alt="" width="479" height="266"/>  </div>
  <div class="espacio"> </div>
  <div class="ejemploportal">
    <h3>¿Cómo será tu portal digital?</h3>
    <div class="imgejemploportal"><a href="../../../assets/images/EjemploPortal.png"><img src="../../../assets/images/EjemploPortal.png" alt=""/></a></div>
</div>
  <div class="abrirportaldigital">
    <h3>¿Cómo abrir tu portal digital?</h3>
    <section class="comoabrir">
    <div class="comoabrir1">
      <img src="../../../assets/images/iconregistration.png" alt=""/>
      <p>Regístrate</p>
</div>
<div class="comoabrir2"> <img src="../../../assets/images/icondescribebusiness.png" alt=""/>
      <p>Describe tu Negocio</p>
    </div>
    <div class="comoabrir3">
      <p><img src="../../../assets/images/iconaddproducts.png" alt=""/></p>
      <p>Añade tus productos o Menú</p>
    </div>
    <div class="comoabrir4">
      <img src="../../../assets/images/iconpublbusiness.png" alt=""/>
      
      <p>Publicita tu Negocio</p>
    </div>
		  </section>
    <div class="espacio"> </div>
    
	  
	  <div class="ButtonRegister">
      <div class="reg-button">
        <p><a href="{{route('bus/signup')}}">
          <input type="submit" class="btn takfua-back btn-block radius-0 main-shadwo text-white" name="btnregister" value="Regístrate" />
        </a></p>
      </div>
</div>
<div class="Precios">
  <p>Si no tienes tiempo para crear tu negocio online, nosotros lo hacemos por ti, puedes contactarnos a:</p>
  <p>Teléfono: +34 673 74 74 46</p>
  <p>Email: <a href="mailto:info@cercademi.me">info@cercademi.me</a></p>
  <h1>¡Así de sencillo!</h1>
  <div id="tabla" style="text-align:center;">
    <h2>Comisiones</h2>
    <table width="200" border="0" style="margin: 0 auto; color: #000000;">
      <tbody>
        <tr>
          <td width="139"><h4>Negocios</h4></td>
          <td width="145"><h4>Pre Apertura**</h4></td>
          <td width="191"> <h4>Post Apertura</h4></td>
          </tr>
        <tr>
          <td height="82" style="text-align: left"><h6 style="text-decoration-color: black">Electrodomésticos, Tecnología y electrónicos </h6></td>
          <td style="text-align: center"><h6>10%</h6></td>
          <td style="text-align: center"><h6>15%</h6></td>
          </tr>
        <tr>
          <td height="79" style="text-align: left"><h6 style="text-decoration-color: black">Perfumes, Cosméticos, Ropa, Juguetes, Relojes y otros</h6></td>
          <td style="text-align: center"><h6>15%  </h6></td>
          <td style="text-align: center"><h6>20% </h6></td>
        </tr>
        </tbody>
    </table>
  </div>
  
  <p>**Esta oferta durará hasta el día del lanzamiento del portal al público. </p>
  <p>**Descuentos en las comisiones durante un año entero.  </p>
  <p>El porcentaje se aplica al precio de venta del producto.</p>
  <p>* Nos encargamos de las entregas de los productos con un peso máximo de hasta 31,5 Kg y dimensiones 120 cm x 60 cm x 60 cm</p>
</div>
  </div>
</main>
<p>@endsection</p>
