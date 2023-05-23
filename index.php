<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Send Mail</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    
    <div class="container"><!--INICIO CONTAINER PRINCIPAL -->

        <div class="py-3 text-center"><!--INICIO CABEÇALHO -->
            <img class="d-block mx-auto mb-2" src="logo.png" alt="desenho avião de envio" width="72" height="72">
            <h2>Send Mail</h2>
            <p class="lead">Seu app de envio de e-mails particular!</p>
        </div><!--FIM CABEÇALHO -->

        <div class="row">
            <div class="col-md-12">
                <div class="card-body font-weight-bold">
                    <form action="">
                        <div class="form-group">
                            <label for="para">Para</label>
                            <input type="text" class="form-control" id="para" placeholder="felipe@dominio.com.br">
                        </div>

                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <input type="text" class="form-control" id="assunto" placeholder="Assunto do e-mail">
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div><!--FIM CONTAINER PRINCIPAL -->

</body>
</html>