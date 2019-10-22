<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ports Model
 *
 * @method \App\Model\Entity\Port get($primaryKey, $options = [])
 * @method \App\Model\Entity\Port newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Port[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Port|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Port saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Port patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Port[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Port findOrCreate($search, callable $callback = null, $options = [])
 */
class PortsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('ports');
        $this->setDisplayField('name');
        $this->setPrimaryKey('portID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->nonNegativeInteger('portID')
            ->allowEmptyString('portID', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->allowEmptyString('city');

        $validator
            ->scalar('country')
            ->maxLength('country', 2)
            ->allowEmptyString('country');

        $validator
            ->scalar('contactperson')
            ->maxLength('contactperson', 255)
            ->allowEmptyString('contactperson');

        $validator
            ->scalar('contactphone')
            ->maxLength('contactphone', 20)
            ->allowEmptyString('contactphone');

        $validator
            ->scalar('contactemail')
            ->maxLength('contactemail', 100)
            ->allowEmptyString('contactemail');

        $validator
            ->scalar('facilities')
            ->allowEmptyString('facilities');

        $validator
            ->scalar('directions')
            ->allowEmptyString('directions');

        $validator
            ->scalar('parking')
            ->allowEmptyString('parking');

        $validator
            ->scalar('catering')
            ->allowEmptyString('catering');

        $validator
            ->scalar('skipper')
            ->allowEmptyString('skipper');

        $validator
            ->scalar('flottielje')
            ->allowEmptyString('flottielje');

        $validator
            ->scalar('groceries')
            ->allowEmptyString('groceries');

        $validator
            ->scalar('transfer')
            ->allowEmptyString('transfer');

        return $validator;
    }
}
