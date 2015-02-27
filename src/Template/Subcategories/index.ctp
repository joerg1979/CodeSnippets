<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Subcategory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Snippets'), ['controller' => 'Snippets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Snippet'), ['controller' => 'Snippets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="subcategories index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('category_id') ?></th>
            <th><?= $this->Paginator->sort('subcategory') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($subcategories as $subcategory): ?>
        <tr>
            <td><?= $this->Number->format($subcategory->id) ?></td>
            <td>
                <?= $subcategory->has('category') ? $this->Html->link($subcategory->category->codelanguage, ['controller' => 'Categories', 'action' => 'view', $subcategory->category->id]) : '' ?>
            </td>
            <td><?= h($subcategory->subcategory) ?></td>
            <td><?= h($subcategory->description) ?></td>
            <td><?= h($subcategory->created) ?></td>
            <td><?= h($subcategory->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $subcategory->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subcategory->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategory->id)]) ?>
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
