<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Subcategory'), ['action' => 'edit', $subcategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subcategory'), ['action' => 'delete', $subcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subcategories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Snippets'), ['controller' => 'Snippets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Snippet'), ['controller' => 'Snippets', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="subcategories view large-10 medium-9 columns">
    <h2><?= h($subcategory->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $subcategory->has('category') ? $this->Html->link($subcategory->category->id, ['controller' => 'Categories', 'action' => 'view', $subcategory->category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Subcategory') ?></h6>
            <p><?= h($subcategory->subcategory) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($subcategory->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($subcategory->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($subcategory->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($subcategory->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Snippets') ?></h4>
    <?php if (!empty($subcategory->snippets)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($subcategory->snippets as $snippets): ?>
        <tr>
            <td><?= h($snippets->id) ?></td>
            <td><?= h($snippets->name) ?></td>
            
            <td><?= h($snippets->created) ?></td>
            <td><?= h($snippets->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Snippets', 'action' => 'view', $snippets->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Snippets', 'action' => 'edit', $snippets->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Snippets', 'action' => 'delete', $snippets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $snippets->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
