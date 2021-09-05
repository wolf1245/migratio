<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateProducts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up(): void
    {
			$products = $this->table('products');
			$products->addColumn('name', 'string')
			->addColumn('count', 'integer')
			->addColumn('price', 'integer')
			->create();
    }

		public function down(): void
		{
			$this->table('products')->drop()->save();
		}
}
