<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 >
    Grupos de Usuários
  </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="shadow p-3 mb-5 bg-white rounded">

        <div class="box">
        <div class="box-header">
            <h4 class="box-title" align="center">Gerenciamento de Grupos e Permissões</h4>
            <div class="box-tools" align="right">
                
                <a href="<?php echo BASE_URL . 'permissions/group'; ?>" class="btn btn-primary">Criar Grupo</a>
                <a href="<?php echo BASE_URL . 'permissions/add'; ?>" class="btn btn-success">Criar Permissão</a>
                
            </div>
        </div><br>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Grupos</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Permissões</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <br>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th width="50">ID</th>
                            <th>Nome do Grupo</th>
                            <th width="150">Ativos</th>
                            <th width="150">Permissões</th>
                            <th width="130">Ações</th>
                        </tr>
                    </thead>                
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo BASE_URL . 'permissions/edit/' . $item['id']; ?>" class="btn btn-xs btn-primary">Editar</a>
                                    <a href="<?php echo BASE_URL . 'permissions/del/' . $item['id']; ?>" class="btn btn-xs btn-danger">Excluir</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <br>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th width="50">ID</th>
                            <th>Nome</th>
                            <th>Slug</th>
                            <th width="130">Ações</th>
                        </tr>
                    </thead>                
                    <tbody>
                        <?php foreach($permissions_list as $item):?>
                        <tr>
                            <td><?php echo $item['id'] ;?></td>
                            <td><?php echo $item['frist_name'] ;?></td>
                            <td><?php echo $item['name'] ;?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo BASE_URL . 'permissions/edit/' . $item['id']; ?>" class="btn btn-xs btn-primary">Editar</a>
                                    <a href="<?php echo BASE_URL . 'permissions/del/' . $item['id']; ?>" class="btn btn-xs btn-danger">Excluir</a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
