<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 >Usuários</h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="shadow p-3 mb-5 bg-white rounded">
    <form method="POST">
        <div class="box">
        <div class="box-header">
            <h4 class="box-title" align="center">Editar Usuário</h4>
            <div class="box-tools" align="right">
                <a href="<?php echo BASE_URL . 'users'; ?>" class="btn btn-primary"> <i class="nav-icon fas fa-reply"></i> Voltar</a>
                <input type="submit" class="btn btn-success" value="Salvar" />
            </div>
        </div><br>
        <div class="box-body">       
            
            <div class="form-group">
                <label for="name">Nome do Usuário</label>
                <input type="text" class="form-control" id="name" name="name" required value="<?php echo $user_info['name']; ?>" />
            </div>
            <br>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required value="<?php echo $user_info['email']; ?>" />
            </div>
            <br>
            <div class="form-group">						
                <label for="group">Grupo de Permissões</label>
                <select class="form-control" id="group" name="group" required>
                    <?php foreach($permissions_groups_list as $g): ?>
                    <option value="<?php echo $g['id']; ?>" <?php echo ($g['id']==$user_info['id_group'])? 'selected="selected"':''; ?>><?php echo $g['name']; ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Deixar em branco caso não queira alterar." />
            </div>
            <br>
    
        </div>
    </form>  
    </div>  

</section>
<!-- /.content -->
