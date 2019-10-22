<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bookings Model
 *
 * @method \App\Model\Entity\Booking get($primaryKey, $options = [])
 * @method \App\Model\Entity\Booking newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Booking[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Booking|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Booking saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Booking patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Booking[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Booking findOrCreate($search, callable $callback = null, $options = [])
 */
class BookingsTable extends Table
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

        $this->setTable('bookings');
        $this->setDisplayField('bookingID');
        $this->setPrimaryKey('bookingID');
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
            ->nonNegativeInteger('bookingID')
            ->allowEmptyString('bookingID', null, 'create');

        $validator
            ->nonNegativeInteger('Customers_customerID')
            ->requirePresence('Customers_customerID', 'create')
            ->notEmptyString('Customers_customerID');

        $validator
            ->nonNegativeInteger('Yachts_yachtID')
            ->requirePresence('Yachts_yachtID', 'create')
            ->notEmptyString('Yachts_yachtID');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('paymentStatus')
            ->allowEmptyString('paymentStatus');

        $validator
            ->scalar('paymentPreference')
            ->allowEmptyString('paymentPreference');

        $validator
            ->dateTime('date_start')
            ->allowEmptyDateTime('date_start');

        $validator
            ->dateTime('date_end')
            ->allowEmptyDateTime('date_end');

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

        $validator
            ->scalar('insurence')
            ->allowEmptyString('insurence');

        $validator
            ->scalar('childLifejackets')
            ->allowEmptyString('childLifejackets');

        $validator
            ->scalar('fishinggear')
            ->allowEmptyString('fishinggear');

        $validator
            ->scalar('paddleboard')
            ->allowEmptyString('paddleboard');

        $validator
            ->scalar('aggreedToTerms')
            ->allowEmptyString('aggreedToTerms');

        return $validator;
    }
}
