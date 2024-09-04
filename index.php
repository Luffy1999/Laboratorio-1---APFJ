<!DOCTYPE html>
<html Lang=es>
    <head>
        <title> Alejandra Patricia Figueroa Jarquín</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/jquery-3.7.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="contenedor">
                <div class="row aling-items-center h-100">
                    <div class="col"></div>
                    <div class="col">
                        <div class="row aling-items-center">
                            <p>Alejandra Patricia Figueroa Jarquín</p>
                            <form name="frm_login" id="frm_login" action="core/process.php">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="parrafo_centrado">Inicio de Sesion</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="txt_usuario">USUARIO:</label>
                                                        <input type="text" class="form-control" name="txt_usuario"  id="txt_usuario"maxlength="15" aria-describeby="txt_user_help" required />
                                                        <small id="txt_user_help" class="form-text text_muted"> El usuario es obligatorio</small>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="txt_password">CONTRASEÑA:</label>
                                                        <input tupe="password" class="form-control" name="txt_password" id="txt_password" maxlength="15" aria-describeby="txt_password_help" required/>
                                                        <small id="txt_password_hep" class="form-text-muted"> La contraseña es obligatoria </small>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <button type="button" class="btn btn-primaty" name="btn_entrar" id="bnt_entrar"></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
			function enviar_datos(u,p){
				$.post($("#frm_login").attr("action"),{
						txt_usuario: u,
						txt_password: p
					}).done(function(datos){
						//console.log(datos.data.url);
						window.location.replace(datos.data.url+"?token="+datos.data.token)
					}).fail(function(xhr, status, error){
						$(".mensaje").html(xhr.responseJSON.mensaje);
					});
			}
			$(document).ready(function(){
				$("#btn_entrar").click(function(){
					enviar_datos($("#txt_usuario").val(),$("#txt_password").val());
				});
				$("#txt_usuario").keypress(function(event){
					if(event.which == 13){
						enviar_datos($("#txt_usuario").val(),$("#txt_password").val());
					}
				});
				$("#txt_password").keypress(function(event){
					if(event.which == 13){
						enviar_datos($("#txt_usuario").val(),$("#txt_password").val());
					}
				});
			});
		</script>
    <body>
<html>   