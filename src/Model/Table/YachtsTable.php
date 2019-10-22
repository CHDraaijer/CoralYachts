<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Yachts Model
 *
 * @method \App\Model\Entity\Yacht get($primaryKey, $options = [])
 * @method \App\Model\Entity\Yacht newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Yacht[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Yacht|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Yacht saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Yacht patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Yacht[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Yacht findOrCreate($search, callable $callback = null, $options = [])
 */
class YachtsTable extends Table
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

        $this->setTable('yachts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('yachtID');
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
            ->nonNegativeInteger('yachtID')
            ->allowEmptyString('yachtID', null, 'create');

        $validator
            ->nonNegativeInteger('Yachttypes_yachtTypeID')
            ->requirePresence('Yachttypes_yachtTypeID', 'create')
            ->notEmptyString('Yachttypes_yachtTypeID');

        $validator
            ->nonNegativeInteger('Ports_portID')
            ->requirePresence('Ports_portID', 'create')
            ->notEmptyString('Ports_portID');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->scalar('code')
            ->maxLength('code', 20)
            ->allowEmptyString('code');

        return $validator;
    }
}
