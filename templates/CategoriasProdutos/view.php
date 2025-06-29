<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edita Categorias Produto'), ['action' => 'edit', $categoriasProduto->int], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categorias Produto'), ['action' => 'delete', $categoriasProduto->int], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasProduto->int), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista Categorias Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Categorias Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categoriasProdutos view content">
            <h3><?= h($categoriasProduto->int) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Categoria') ?></th>
                    <td><?= h($categoriasProduto->nome_categoria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Int') ?></th>
                    <td><?= $this->Number->format($categoriasProduto->int) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($categoriasProduto->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($categoriasProduto->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Produtos Relacionados') ?></h4>
                <?php if (!empty($categoriasProduto->produtos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome Produto') ?></th>
                            <th><?= __('Categorias Produto Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($categoriasProduto->produtos as $produtos) : ?>
                        <tr>
                            <td><?= h($produtos->id) ?></td>
                            <td><?= h($produtos->nome_produto) ?></td>
                            <td><?= h($produtos->categorias_produto_id) ?></td>
                            <td><?= h($produtos->created) ?></td>
                            <td><?= h($produtos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produtos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
