<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users'); // Nome da tabela no banco de dados
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator): Validator
    {

        $validator->integer('id')->allowEmptyString('id', 'create');

        $validator->scalar('nome')
            ->maxLength('nome', 220)
            //->requirePresence('nome', 'create')
            ->notEmptyString('nome', 'Necessário preencher o campo nome');

        $validator->scalar('email')
            ->maxLength('email', 220)
            //->requirePresence('email', 'create')
            ->notEmptyString('email', 'Necessário preencher o campo nome');
        return $validator;
    }
}
