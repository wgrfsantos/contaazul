<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 >Usuários</h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="shadow p-3 mb-5 bg-white rounded">

        <div class="box">
            <div class="box-header">
                <h4 class="box-title" align="center">Gerenciamento de Usuários</h4>
                <div class="box-tools" align="right">
                    
                    <a href="<?php echo BASE_URL; ?>" class="btn btn-primary">Voltar</a>
                    <a href="<?php echo BASE_URL . 'users/add'; ?>" class="btn btn-success">Criar Usuários</a>
                    
                </div>
            </div><br>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th width="50">ID</th>
                            <th>Nome do Usuário</th>
                            <th>Email</th>
                            <th>Grupo</th>
                            <th width="130">Ações</th>
                        </tr>
                    </thead>                
                    <tbody>
                        <?php foreach($users_list as $item):?>
                        <tr>
                            <td><?php echo $item['id'] ;?></td>
                            <td><?php echo $item['name'] ;?></td>
                            <td><?php echo $item['email'] ;?></td>
                            <td><?php echo $item['name_group'] ;?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo BASE_URL . 'users/edit/' . $item['id']; ?>" class="btn btn-xs btn-primary">Editar</a>
                                    <a href="<?php echo BASE_URL . 'users/del/' . $item['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')" class="btn btn-xs btn-danger">Excluir</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
        </div>
    </div>

</section>
<!-- /.content -->
