<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Snippets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="snippets form large-10 medium-9 columns">
    <?= $this->Form->create($snippet); ?>
    <fieldset>
        <legend><?= __('Add Snippet') ?></legend>
        <?php
            echo $this->Form->input('subcategory_id', ['options' => $subcategories, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('snippet');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
