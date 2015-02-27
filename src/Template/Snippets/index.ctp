<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Snippet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="snippets index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('category_id') ?></th>
            <th><?= $this->Paginator->sort('subcategory_id') ?></th>
            
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($snippets as $snippet): ?>
        <tr>
            <td><?= $this->Number->format($snippet->id) ?></td>
            <td><?= $this->Html->link(h($snippet->name), ['action' => 'view', $snippet->id]) ?></td>
            <td>
                <?= $snippet->has('subcategory') ? $this->Html->link($snippet->subcategory->category_id, ['controller' => 'Categories', 'action' => 'view', $snippet->subcategory->category_id]) : '' ?>
            </td>
            <td>
                <?= $snippet->has('subcategory') ? $this->Html->link($snippet->subcategory->subcategory, ['controller' => 'Subcategories', 'action' => 'view', $snippet->subcategory->id]) : '' ?>
            </td>
            
            <td><?= h($snippet->created) ?></td>
            <td><?= h($snippet->modified) ?></td>
            <td class="actions">                
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $snippet->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $snippet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $snippet->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
