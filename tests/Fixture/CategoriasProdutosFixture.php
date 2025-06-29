<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriasProdutosFixture
 */
class CategoriasProdutosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'int' => 1,
                'nome_categoria' => 'Lorem ipsum dolor sit amet',
                'created' => 1750103225,
                'modified' => 1750103225,
            ],
        ];
        parent::init();
    }
}
