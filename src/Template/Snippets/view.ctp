<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Snippet'), ['action' => 'edit', $snippet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Snippet'), ['action' => 'delete', $snippet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $snippet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Snippets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Snippet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="snippets view large-10 medium-9 columns">
    <h2><?= h($snippet->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($snippet->name) ?></p>
            
            <h6 class="subheader"><?= __('Category_ID') ?></h6>
            <p><?= $snippet->has('subcategory') ? $this->Html->link($snippet->subcategory->category_id, ['controller' => 'Categories', 'action' => 'view', $snippet->subcategory->category_id]) : '' ?></p>
            <h6 class="subheader"><?= __('Subcategory') ?></h6>
            <p><?= $snippet->has('subcategory') ? $this->Html->link($snippet->subcategory->subcategory, ['controller' => 'Subcategories', 'action' => 'view', $snippet->subcategory->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($snippet->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($snippet->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($snippet->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Snippet') ?></h6>
            <code><?= h($snippet->name) ?>.php
            <pre><?= $snippet->snippet ?></pre></code>

        </div>
    </div>
</div>
