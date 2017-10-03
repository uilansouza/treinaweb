<?php
$con = conecta();

$res = mysqli_query($con, 'SELECT * FROM cliente');
?>
<div class="page-header">
    <h3>Orçamentos</h3>
</div>
<div class="row">
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de Clientes</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="Codigo cliente" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Nome do Cliente" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Km Consumido" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Tipo de consumidor" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Total" disabled></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($orc = mysqli_fetch_assoc($res)): ?>
                <tr>
                    <td align="center"><?php echo $orc['cod_cli']; ?></td>
                    <td><?php echo $orc['nome_cli']; ?></td>
                    <td align="center"><?php echo $orc['qtd_cli']; ?></td>
                    <td align="center"><?php echo ($orc['tipo_cli']); ?></td>
                    <td><?php echo formata_reais(valorBase($orc['qtd_cli'],$orc['tipo_cli'])); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <a href="?pagina=criar">
        <button class="btn btn-primary">Novo Cliente</button>
    </a>
</div>
