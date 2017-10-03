<?php
$con = conecta();

$res = mysqli_query($con, 'SELECT * FROM tbl_orcamentos');
?>
<div class="page-header">
    <h3>Orçamentos</h3>
</div>
<div class="row">
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de Orçamentos</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Nome do Cliente" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Total de Horas" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Valor Hora" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Total" disabled></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($orc = mysqli_fetch_assoc($res)): ?>
                <tr>
                    <td><?php echo $orc['id']; ?></td>
                    <td><?php echo $orc['cliente']; ?></td>
                    <td><?php echo $orc['totalhoras']; ?></td>
                    <td><?php echo formata_reais($orc['valorhora']); ?></td>
                    <td><?php echo formata_reais($orc['totalhoras'] * $orc['valorhora']); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <a href="?pagina=criar">
        <button class="btn btn-primary">Novo Orçamento</button>
    </a>
</div>
