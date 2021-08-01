<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row">
        <div class="col-sm-6">
            <h1 >Gerenciamento de Clientes</h1>
        </div>
        <div class="col-sm-6"> 
        <div class="box-tools" align="right">                    
            <a href="<?php echo BASE_URL; ?>" class="btn btn-primary" >Voltar</a>
            <?php if($add_permission): ?>
                <a href="<?php echo BASE_URL . '/clients/add'; ?>" class="btn btn-success">Cadastrar Clientes</a>
            <?php endif ;?>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="shadow p-3 mb-5 bg-white rounded">

        <div class="box">
            <div class="box-header">
            <div class="row">
                    <div class="col-sm-6">
                        <h6 class="box-title" align="left"><strong>Total de Clientes:</strong> <?php echo $client_count ;?> </h6>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text"  id="busca" data-type="search_clients" class="form-control" />
                        </div>
                    </div>
            </div>         
                
                

            </div><br>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th width="50">ID</th>
                            <th>Nome do Cliente</th>
                            <th>Telefone</th>
                            <th>Cidade</th>
                            <th>Estrelas</th>
                            <th width="130">Ações</th>
                        </tr>
                    </thead>                
                    <tbody>
                        <?php foreach($clients_list as $item):?>
                        <tr>
                            <td><?php echo $item['id'] ;?></td>
                            <td><?php echo $item['name'] ;?></td>
                            <td><?php echo $item['phone'] ;?></td>
                            <td><?php echo $item['address_city'] ;?></td>
                            <td><?php echo $item['stars'] ;?></td>                            
                            <td>
                                <div class="btn-group">
                                    <?php if($view_permission): ?>
                                        <a href="<?php echo BASE_URL . '/clients/view/' . $item['id']; ?>" class="btn btn-xs btn-info">Detalhes</a>
                                    <?php endif ;?>
                                    <?php if($edit_permission): ?>
                                        <a href="<?php echo BASE_URL . '/clients/edit/' . $item['id']; ?>" class="btn btn-xs btn-warning">Editar</a>
                                    <?php endif ;?>
                                    <?php if($del_permission): ?>
                                        <a href="<?php echo BASE_URL . '/clients/del/' . $item['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')" class="btn btn-xs btn-danger">Excluir</a>
                                    <?php endif ;?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
        </div>
        <div class="pagination">
            <?php for($q=1;$q<=$p_count;$q++):?>
                <div class="pag_item <?php echo ($q==$p)?'pag_ativo':'' ;?>"> <a href="<?php echo BASE_URL; ?>/clients?p=<?php echo $q ;?>"> <?php echo $q; ?> </a> </div>
            <?php endfor ;?>
        </div>
    </div>

</section>
<!-- /.content -->