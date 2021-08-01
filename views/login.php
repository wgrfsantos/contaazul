<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WVsoft | Sistemas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="imagem/png" href="<?= BASE_URL; ?>/assets/images/logo_sem_fundo.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
        <a href="#"><b><strong> WVsoft</strong> Sistemas</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
        <p class="login-box-msg">Área restrita</p>
            <!--Avisos de Login-->
            <?php if(isset($error) && !empty($error)) : ?>
                <div class="btn btn-danger btn-block text-center">
                    <p><?php echo $error; ?></p>
                </div>
            <?php endif; ?>
            <br>
        <form action="<?php echo BASE_URL; ?>login/index_action" method="post">
            <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required="Preenchimento obrigatório">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                </div>
            </div>
            </div>
            <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Senha" required="Preenchimento obrigatório">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </div>                
        </form>     
        <!-- 
        <p class="mb-1">
            <a href="#">Esqueci a minha senha</a>
        </p>
        -->

        </div>
        <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->
<br><br><br><br>
    <footer>
        <p>
            ATENÇÃO! <br>
            Bem-Vindos aos recursos tecnológicos da WVSOFT.<br>
            Informamos que todos os sistemas são monitorados. A utilização não autorizada ou o acesso indevido de informações privilegiada serão considrados violações de segurança.<br>
            Com isso, os infratores estarão sujeitos a punições administrativas, civis e criminais.<br>
            Atenciosamente, Área de Segurança da Informação. 
        </p>
    </footer>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

</body>
</html>


