<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CategoriasProduto> $categoriasProdutos
 */
?>
<div class="categoriasProdutos index content">
    <?= $this->Html->link(__('Nova Categorias Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorias Produtos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('int') ?></th>
                    <th><?= $this->Paginator->sort('nome_categoria') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categoriasProdutos as $categoriasProduto): ?>
                <tr>
                    <td><?= $this->Number->format($categoriasProduto->int) ?></td>
                    <td><?= h($categoriasProduto->nome_categoria) ?></td>
                    <td><?= h($categoriasProduto->created) ?></td>
                    <td><?= h($categoriasProduto->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categoriasProduto->int]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoriasProduto->int]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoriasProduto->int], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasProduto->int)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
