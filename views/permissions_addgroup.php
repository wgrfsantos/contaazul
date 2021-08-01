<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 >
    Grupos de Usuários
  </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="shadow p-3 mb-5 bg-white rounded">
    <form method="POST">
        <div class="box">
        <div class="box-header">
            <h4 class="box-title" align="center">Adicionar Grupo</h4>
            <div class="box-tools" align="right">
                <a href="<?php echo BASE_URL . '/permissions'; ?>" class="btn btn-primary"> <i class="nav-icon fas fa-reply"></i> Voltar</a>
                <input type="submit" class="btn btn-success" value="Salvar" />
            </div>
        </div><br>
        <div class="box-body"> 
        
            <div class="form-group">
                <label for="name">Nome do Grupo</label>
                <input type="text" class="form-control" id="name" name="name" required />
            </div><br>

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <br>
                <table class="table">
                    <thead class="thead-light">                        
                            <tr>
                                <th>Visualizar</th>
                                <th>Adicionar</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>                        
                    </thead>                
                    <tbody>                    
                        <tr>                        
                            <td>
                                <?php foreach($permissions_list_view as $view):?>
                                    <div class="form-group">
                                        <input type="checkbox" name="permissions[]" value="<?php echo $view['id']; ?>" id="view-<?php echo $view['id']; ?>" />
                                        <label for="view-<?php echo $view['id']; ?>"><?php echo $view['frist_name']; ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </td>                            
                            <td>
                                <?php foreach($permissions_list_add as $add):?>
                                    <div class="form-group">
                                        <input type="checkbox" name="permissions[]" value="<?php echo $add['id']; ?>" id="add-<?php echo $add['id']; ?>" />
                                        <label for="add-<?php echo $add['id']; ?>"><?php echo $add['frist_name']; ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </td>
                            <td>
                                <?php foreach($permissions_list_edit as $edit):?>
                                    <div class="form-group">
                                        <input type="checkbox" name="permissions[]" value="<?php echo $edit['id']; ?>" id="edit-<?php echo $edit['id']; ?>" />
                                        <label for="edit-<?php echo $edit['id']; ?>"><?php echo $edit['frist_name']; ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </td>
                            <td>
                                <?php foreach($permissions_list_del as $del):?>
                                    <div class="form-group">
                                        <input type="checkbox" name="permissions[]" value="<?php echo $del['id']; ?>" id="del-<?php echo $del['id']; ?>" />
                                        <label for="del-<?php echo $del['id']; ?>"><?php echo $del['frist_name']; ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </td>                            
                        </tr>
                    </tbody>

                </table>
            </div>
            
        
        </div>
    </form>  
    </div>  

</section>
<!-- /.content -->
