<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateResourcesTable extends AbstractMigration
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
    public function change(): void
    {
        $table = $this->table('resources', [
            'id' => 'resourceID'
        ]);

        $table->addColumn('title', 'string');
        $table->addColumn('author', 'string');
        $table->addColumn('publication_date', 'date' );
        $table->addColumn('summary', 'text');
        $table->addColumn('genre', 'string' );
        $table->addColumn('type', 'enum', ['book', 'article', 'journal']);
        $table->addColumn('isbn', 'string', ['null' => true]);

        $table->create();
    }
}
