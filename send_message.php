<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MasterTecno | Envio de Mensaje</title>
	<!-- site icons -->
	<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
	<!-- bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Site css -->
	<link rel="stylesheet" href="css/style.css" />
	<!-- responsive css -->
	<link rel="stylesheet" href="css/responsive.css" />
	<!-- colors css -->
	<link rel="stylesheet" href="css/colors1.css" />
	<!-- custom css -->
	<link rel="stylesheet" href="css/custom.css" />
	<!-- wow Animation css -->
	<link rel="stylesheet" href="css/animate.css" />

	<style type="text/css" media="screen">
	  #miModal .contenido{
	  background-color: #3fdb88;
	  border-radius: 15px;
	  color: white;
	  width:300px;
	  height: 330px;
	  padding: 10px 20px;
	  margin: 16% auto;
	  position: relative;
	}
	#miModal .contenido a {
	    border: 2px solid white;
	    font-weight: bold;
	    border-radius: 6px;
	    color: white;
	    background-color: #3fdb88;
	    margin-top: 10px;
	    display: inline-block;
	    padding: 2px 7px 2px 7px;
	}
	#miModal .contenido a:hover {
	  transition: 0.5s;
	  cursor: pointer;
	  box-shadow: 0px 0px 1px white, 0px 0px 12px white;  
	}
	#miModal .contenido h2 {
	  text-align: center;
	  margin-top: 50px;
	  margin-bottom: 35px;
	  color: white;
	  text-transform: inherit;
	  font-size: 26px;
	}
	#miModal{
	  background-color: #595959d9;
	  position:fixed;
	  top:0;
	  right:0;
	  bottom:0;
	  left:0;
	  transition: all 1s;
	}
	#miModal:target{
	  opacity:1;
	  pointer-events:auto;
	}
	#miModal .error {
	  background-color: #FF2F2F !important;
	}
	#miModal #btn-cerrar {
		width: 40px;
		background-color: #ffbd1a;
    	margin: 0 auto;
	    display: inherit;
	}
	p {
		text-align: center;
	}
</style>
</head>
<body>
<!-- Modal exito -->
<div id="miModal">
      <div id="contenido" class="contenido">
        <a id="btn-contenido" href="it_contact.html" title="">X</a>
        <h2>Mensaje enviado con éxito !!</h2>
        <p>Gracias por tu mensaje, en breve nos ponemos en contacto contigo :)</p>        
        <a id="btn-cerrar" href="it_contact.html" class="btn btn-primary">Cerrar</a>
      </div>  
</div>
<!-- Modal exito -->
<script type="text/javascript">
  
      // document.getElementById("miModal").style.display = "block";
      
</script>
<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>
</html>