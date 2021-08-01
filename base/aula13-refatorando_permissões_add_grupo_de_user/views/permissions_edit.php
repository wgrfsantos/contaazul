<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 >
    Permissões de Usuários
  </h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="shadow p-3 mb-5 bg-white rounded">
    <form method="POST">
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>" />
        <div class="box">
        <div class="box-header">
            <h4 class="box-title" align="center">Editar Permissão</h4>
            <div class="box-tools" align="right">
                <a href="<?php echo BASE_URL . 'permissions'; ?>" class="btn btn-primary"> <i class="nav-icon fas fa-reply"></i> Voltar</a>
                <input type="submit" class="btn btn-success" value="Salvar Alterações" />
            </div>
        </div><br>
        <div class="box-body">          
        
            <div class="form-group">
                <label for="name">Nome da Permissão</label>
                <input type="text" class="form-control" id="frist_name" name="frist_name" required value="<?php echo $info['frist_name']; ?>" />
            </div>
            <br>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Exemplo: cliente_view" value="<?php echo $info['name']; ?>" />
            </div>
            <br>
            <div class="form-group">						
                <label for="type">Tipo</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="1" <?php echo ($info['type']=='1')?'selected="selected"':''; ?>>Visualização</option>
                    <option value="2" <?php echo ($info['type']=='2')?'selected="selected"':''; ?>>Adição</option>
                    <option value="3" <?php echo ($info['type']=='3')?'selected="selected"':''; ?>>Edição</option>
                    <option value="4" <?php echo ($info['type']=='4')?'selected="selected"':''; ?>>Exclusão</option>
                </select>
            </div>
        </div>
    </form>  
    </div>  

</section>
<!-- /.content -->
