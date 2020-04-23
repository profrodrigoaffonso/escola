<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materia $materia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materia'), ['action' => 'edit', $materia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materia'), ['action' => 'delete', $materia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materias view large-9 medium-8 columns content">
    <h3><?= h($materia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Disciplina') ?></th>
            <td><?= $materia->has('disciplina') ? $this->Html->link($materia->disciplina->id, ['controller' => 'Disciplinas', 'action' => 'view', $materia->disciplina->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($materia->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Video') ?></th>
            <td><?= h($materia->video) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($materia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($materia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($materia->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Texto') ?></h4>
        <?= $this->Text->autoParagraph(h($materia->texto)); ?>
    </div>
</div>
