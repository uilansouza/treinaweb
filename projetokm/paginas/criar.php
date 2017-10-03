<div class="page-header">
    <h3>Criar</h3>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-1">
        <div class="well well-sm col-sm-6" >
            <form class="form-horizontal" action="gravarKm.php" method="post" novalidate>
                <fieldset>
                    <legend class="text-center">Criar cobrança</legend>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Cliente</label>
                        <div class="col-md-9">
                            <input id="cliente" name="cliente" type="text" placeholder="Cliente" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">KMh consumidos/Mês</label>
                        <div class="col-md-9">
                            <input id="km_consumido" name="km_consumido" type="number" placeholder="Km Consumido" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Tipo de consumidor</label>
                        <div class="col-md-9">
                          <select id="consumidor" name="consumidor" type="text" placeholder="consumidor" class="form-control" required>
                            <option value="residencial" >Residencial</option>
                                <option value="comercial" >Comercial</option>
                                <option value="industrial">Industrial</option>
                                <option value="vazio" selected="" ></option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Gravar</button>
                        </div>
                    </div>
                    <?php 
                    $sucesso= isset($_GET['sucesso'])?$_GET['sucesso']:'';
                    if($sucesso):
                    ?>

                    <div class="alert alert-success" role="alert">
                        <strong>Sucesso!</strong>
                        Orçamento gravado com sucesso.
                    </div>
                    <?php endif; ?>

                    <?php 
                    $erro= isset($_GET['erro'])?$_GET['erro']:'';
                    if($erro):
                    ?>
                    
                    <div class="alert alert-danger" role="alert">
                        <strong>Erro!</strong>
                        Erro nos dados verifique o formulário.
                    </div>
                <?php endif; ?>
                </fieldset>
            </form>
        </div>
    </div>
</div>

