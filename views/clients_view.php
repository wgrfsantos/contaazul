<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 >Clientes</h1>
</section>

<!-- Main content -->
<section class="content container-fluid">

    <div class="shadow p-3 mb-5 bg-white rounded">
    <form method="POST">
        <div class="box">
        <div class="box-header">
            <h4 class="box-title" align="center">Visualização de Cliente</h4>
            <div class="box-tools" align="right">
                <a href="<?php echo BASE_URL . '/clients'; ?>" class="btn btn-primary"> <i class="nav-icon fas fa-reply"></i> Voltar</a>
            </div>
        </div><br>
        <div class="box-body">          
        <div class="row">
                    <div class="col-sm-6">
                        <form method="POST" action="<?php echo BASE_URL; ?>request/checkout1">
                                <div class="form-group">
                                    <label for="name">Nome completo:</label>
                                    <input type="text" name="name" id="name" class="form-control" required placeholder="Obrigatório." value="<?php echo $client_info['name'];?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="cpf">CPF - <small>Somente números:</small></label>
                                    <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Opcional." value="<?php echo $client_info['cpf'];?>" disabled />
                                </div>                               
                                              
                                <div class="form-group">
                                    <label for="phone">Telefone:</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Opcional." value="<?php echo $client_info['phone'];?>" disabled />
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">E-mail:</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Opcional." value="<?php echo $client_info['email'];?>" disabled />
                                </div>

                                <div class="form-group">						
                                    <label for="stars">Estrelas</label>
                                    <select class="form-control" id="stars" name="stars" disabled>
                                        <option></option>
                                        <option value="1" <?php echo ($client_info['stars']==1)?'selected="selected"':'';?> >1 Estrela</option>
                                        <option value="2" <?php echo ($client_info['stars']==2)?'selected="selected"':'';?> >2 Estrelas</option>
                                        <option value="3" <?php echo ($client_info['stars']==3)?'selected="selected"':'';?> >3 Estrelas</option>
                                        <option value="4" <?php echo ($client_info['stars']==4)?'selected="selected"':'';?> >4 Estrelas</option>
                                        <option value="5" <?php echo ($client_info['stars']==5)?'selected="selected"':'';?> >5 Estrelas</option>
                                    </select>
                                </div>

                                 <div class="form-group">
                                    <label for="internal_obs">Observações Internas:</label>
                                    <textarea name="internal_obs" id="internal_obs" class="form-control" placeholder="Opcional." disabled><?php echo $client_info['internal_obs'];?></textarea>
                                </div>
                                                     
                                
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="address_zipcode">CEP:</label>
                                    <input type="text" name="address_zipcode" id="address_zipcode" class="form-control" placeholder="Obrigatório." value="<?php echo $client_info['address_zipcode'];?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="address">Endereço:</label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="Opcional." value="<?php echo $client_info['address'];?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="address_number">Número:</label>
                                    <input type="text" name="address_number" id="address_number" class="form-control" placeholder="Opcional." value="<?php echo $client_info['address_number'];?>" disabled />
                                </div>                                  
                                <div class="form-group">
                                    <label for="address2">Complemento:</label>
                                    <input type="text" name="address2" id="address2" class="form-control"  placeholder="Opcional." value="<?php echo $client_info['address2'];?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="address_neighb">Bairro:</label>
                                    <input type="text" name="address_neighb" id="address_neighb" class="form-control" placeholder="Opcional." value="<?php echo $client_info['address_neighb'];?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="address_city">Cidade:</label>
                                    <input type="text" name="address_city" id="address_city" class="form-control" placeholder="Opcional." value="<?php echo $client_info['address_city'];?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="address_state">Estado:</label>
                                    <input type="text" name="address_state" id="address_state" class="form-control" placeholder="Opcional." value="<?php echo $client_info['address_state'];?>" disabled />
                                </div>
                                <div class="form-group">
                                    <label for="address_country">Pais:</label>
                                    <input type="text" name="address_country" id="address_country" class="form-control" placeholder="Opcional" value="<?php echo $client_info['address_country'];?>" disabled />
                                </div>
                            </div>                    
                        </form>
                        
                        
            </div>
            
    
        </div>
    </form>  
    </div>  

</section>
<!-- /.content -->

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>