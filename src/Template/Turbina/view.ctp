<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turbina $turbina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Turbina'), ['action' => 'edit', $turbina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Turbina'), ['action' => 'delete', $turbina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $turbina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Turbina'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turbina'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="turbina view large-9 medium-8 columns content">
    <h3><?= h($turbina->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($turbina->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($turbina->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($turbina->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($turbina->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($turbina->modified) ?></td>
        </tr>
    </table>
</div>
