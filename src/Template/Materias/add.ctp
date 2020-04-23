<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materia $materia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['controller' => 'Disciplinas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disciplina'), ['controller' => 'Disciplinas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materias form large-9 medium-8 columns content">
    <?= $this->Form->create($materia) ?>
    <fieldset>
        <legend><?= __('Add Materia') ?></legend>
        <?php
            echo $this->Form->control('disciplina_id', ['options' => $disciplinas]);
            echo $this->Form->control('titulo');
            echo $this->Form->control('texto');
            echo $this->Form->control('video');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
