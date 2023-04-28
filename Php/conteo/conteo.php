<!DOCTYPE html>
<html>
    <head >
        <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Coneto</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       <script src="https://kit.fontawesome.com/d43f4bbf1e.js" crossorigin="anonymous"></script>

       <script src="http://localhost/proyecto%20final/MIPF/js/java.js"></script>
       <link rel="stylesheet" href="http://localhost/Proyecto%20Final/MIPF/css/style_Conteo1.css">
    

    </head>

    <body >
    
        <div class="container">
            <div class="login-container">
            <div class="register">
                <h1>Conteo de Productos</h1>    

                <form id="usuActivos_conteo" class="form1" action="" method="post">
                    <td><input type="number" id="id" name="id" placeholder="Id"></td>
                </form>
                <button class="btn btn-sm btn-primary" type="submit" onclick="captura()" style="cursor: pointer;"><i class="fa-solid fa-calculator"></i></button>
                <button class="btn btn-sm btn-primary" type="submit" onclick=" navigate()" style="cursor: pointer;"><i class="fa-solid fa-calculator"></i></button>
               

               
                            
			<section >
				
				<div class="IframeConteo">
				<iframe class="mainIframe" style='display:none' id='frameConteo' frameborder='0' name="mainframe"  src="https://maps.google.com/maps?f=q&source=s_q&q=buenos+aires&sll=37.0625,-95.677068&sspn=38.638819,80.859375&t=h&hnear=Buenos+Aires,+Argentina&z=11&ll=-34.603723,-58.381593&output=embed"> ></iframe>
				</div>

			</section>
        
        
        </div>      
        </div>
        </div>  
      </body>
</html>