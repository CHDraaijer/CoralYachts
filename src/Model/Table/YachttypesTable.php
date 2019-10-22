<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Yachttypes Model
 *
 * @method \App\Model\Entity\Yachttype get($primaryKey, $options = [])
 * @method \App\Model\Entity\Yachttype newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Yachttype[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Yachttype|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Yachttype saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Yachttype patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Yachttype[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Yachttype findOrCreate($search, callable $callback = null, $options = [])
 */
class YachttypesTable extends Table
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

        $this->setTable('yachttypes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('yachtTypeID');
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
            ->nonNegativeInteger('yachtTypeID')
            ->allowEmptyString('yachtTypeID', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('code')
            ->maxLength('code', 20)
            ->allowEmptyString('code');

        $validator
            ->scalar('type')
            ->allowEmptyString('type');

        $validator
            ->numeric('length')
            ->allowEmptyString('length');

        $validator
            ->numeric('depth')
            ->allowEmptyString('depth');

        $validator
            ->scalar('engine')
            ->maxLength('engine', 100)
            ->allowEmptyString('engine');

        $validator
            ->numeric('sail')
            ->allowEmptyString('sail');

        $validator
            ->integer('1pcabins')
            ->allowEmptyString('1pcabins');

        $validator
            ->integer('2pcabins')
            ->allowEmptyString('2pcabins');

        $validator
            ->integer('beds')
            ->allowEmptyString('beds');

        $validator
            ->integer('toilets')
            ->allowEmptyString('toilets');

        $validator
            ->integer('showers')
            ->allowEmptyString('showers');

        $validator
            ->scalar('gear')
            ->allowEmptyString('gear');

        $validator
            ->scalar('text')
            ->allowEmptyString('text');

        return $validator;
    }
}
