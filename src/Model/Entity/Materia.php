<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Materia Entity
 *
 * @property int $id
 * @property int $disciplina_id
 * @property string|null $titulo
 * @property string|null $texto
 * @property string|null $video
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Disciplina $disciplina
 */
class Materia extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'disciplina_id' => true,
        'titulo' => true,
        'texto' => true,
        'video' => true,
        'created' => true,
        'modified' => true,
        'disciplina' => true,
    ];
}
