<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="categories view large-10 medium-9 columns">
    <h2><?= h($category->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Codelanguage') ?></h6>
            <p><?= h($category->codelanguage) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($category->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($category->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($category->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($category->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Subcategories') ?></h4>
    <?php if (!empty($category->subcategories)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Subcategory') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($category->subcategories as $subcategories): ?>
        <tr>
            <td><?= h($subcategories->id) ?></td>
            <td><?= $this->Html->link(h($subcategories->subcategory), ['controller' => 'Subcategories', 'action' => 'view', $subcategories->id]) ?></td>
            <td><?= h($subcategories->description) ?></td>
            <td><?= h($subcategories->created) ?></td>
            <td><?= h($subcategories->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('Edit'), ['controller' => 'Subcategories', 'action' => 'edit', $subcategories->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subcategories', 'action' => 'delete', $subcategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subcategories->id)]) ?>

            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
