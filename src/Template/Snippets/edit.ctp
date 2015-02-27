<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $snippet->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $snippet->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Snippets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="snippets form large-10 medium-9 columns">
    <?= $this->Form->create($snippet); ?>
    <fieldset>
        <legend><?= __('Edit Snippet') ?></legend>
        <?php
            echo $this->Form->input('subcategory_id', ['options' => $subcategories, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('snippet');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
