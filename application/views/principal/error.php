<style>
        #bienvenida img {
            padding: 0;
    margin: 11px -9px 30px 28%;
    width: 50%;
    height: 40%;
    align-items: center;
    border-radius: 10px;
    margin-bottom: 10px;
    border: 7px solid #17a2b8;
    }
    body {
			background: #212529 ;
				display:flex;
				flex-direction:column;
				min-height :100vh;
			 
        }
    .error{
        font-size:70px;
        align-items:center;
        margin: -25px 39px 14px 36px;
       color:red;
    }
</style>
<div id="bienvenida">
  <img src="<?= base_url(); ?>assets/imagenes/error.jpg" alt="">
</div>
<div class="container" class="color">
        <br/><br/>
        <div class="error">
        <div class="row">
            
            
         <h2 class="error"> error ya existe el dni registrado </h2>
            
         
        </div>
    </div>
    </div>

