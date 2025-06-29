<!-- table>thead>tr>th*4^^tbody>tr>th*4 -->
<div class="users index large-12 medium-12 columns content">
    <h3><?php echo 'Usuários'; ?></h3>
    <table>
        <thead>
            <tr>
                <th scope="col"><?php echo $this->Paginator->sort('id');?></th>
                <th><?php echo $this->Paginator->sort('nome');?></th>
                <th><?php echo $this->Paginator->sort('email');?></th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario->id; ?></td>
                    <td><?php echo $usuario->nome; ?></td>
                    <td><?php echo $usuario->email; ?></td>
                    <td>Ver Editar Apagar</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
        echo $this->Html->link(('Cadastrar Usuário'), ['controller' => 'users', 'action' => 'add']); 
    ?>
    <div class="paginator">
        <ul class="pagination">
            <?php echo $this->Paginator->first('<< ' . __('Primeira')); ?>
            <?php echo $this->Paginator->prev('< ' . __('Anterior')); ?>
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next(__('Próximo') . '> '); ?>
            <?php echo $this->Paginator->last(__('Última') . '>> '); ?>
        </ul>
        <p>
            <?php echo $this->Paginator->counter('Página {{page}} de {{pages}}, mostrado {{current}} registro(s) de {{count}} no total'); ?>
        </p>
    </div>
</div>