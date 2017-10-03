<div class="page-header">
    <h3>Criar</h3>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-1">
        <div class="well well-sm">
            <form class="form-horizontal" action="gravaOrcs.php" method="post" novalidate>
                <fieldset>
                    <legend class="text-center">Criar Orçamento</legend>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Cliente</label>
                        <div class="col-md-9">
                            <input id="cliente" name="cliente" type="text" placeholder="Cliente" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="email">Total de horas</label>
                        <div class="col-md-9">
                            <input id="totaldehoras" name="totalhoras" type="number" placeholder="Total de horas" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Valor/Hora</label>
                        <div class="col-md-9">
                            <input id="valorhora" name="valorhora" type="number" placeholder="Valor/Hora" class="form-control" required>
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

