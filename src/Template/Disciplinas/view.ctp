<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disciplina $disciplina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disciplina'), ['action' => 'edit', $disciplina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disciplina'), ['action' => 'delete', $disciplina->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplina->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Disciplinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disciplina'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="disciplinas view large-9 medium-8 columns content">
    <h3><?= h($disciplina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($disciplina->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($disciplina->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materias') ?></h4>
        <?php if (!empty($disciplina->materias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Disciplina Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Texto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($disciplina->materias as $materias): ?>
            <tr>
                <td><?= h($materias->id) ?></td>
                <td><?= h($materias->disciplina_id) ?></td>
                <td><?= h($materias->titulo) ?></td>
                <td><?= h($materias->texto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materias', 'action' => 'view', $materias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materias', 'action' => 'edit', $materias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materias', 'action' => 'delete', $materias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
