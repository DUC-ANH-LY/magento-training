<?php

namespace Magenest\Movie\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use RectorPrefix202308\SebastianBergmann\Diff\Exception;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
//        try {
        $installer = $setup;

        $installer->startSetup();
        $tableName = $setup->getTable('magenest_director');
        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table2 = $installer->getConnection()
                ->newTable($installer->getTable('magenest_director'))
                ->addColumn(
                    'director_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'nullable' => false, 'primary' => true, 'auto_increment' => true],
                    'ID'
                )
                ->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Director Name'
                );
            $installer->getConnection()->createTable($table2);
        }

        $tableName = $setup->getTable('magenest_actor');
        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table3 = $installer->getConnection()
                ->newTable($installer->getTable('magenest_actor'))
                ->addColumn(
                    'actor_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'nullable' => false, 'primary' => true, 'auto_increment' => true],
                    'ID'
                )
                ->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Actor Name'
                );
            $installer->getConnection()->createTable($table3);
        }


        $tableName = $setup->getTable('magenest_movie');
        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table1 = $installer->getConnection()
                ->newTable($installer->getTable('magenest_movie'))
                ->addColumn(
                    'movie_id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'nullable' => false, 'primary' => true, 'auto_increment' => true],
                    'ID'
                )
                ->addColumn(
                    'name',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Movie Name'
                )
                ->addColumn(
                    'description',
                    Table::TYPE_TEXT,
                    null,
                    ['nullable' => false, 'default' => ''],
                    'Movie description'
                )
                ->addColumn(
                    'rating',
                    Table::TYPE_INTEGER,
                    null,
                    ['nullable' => false],
                    'Movie rating'
                )->addColumn(
                    'director_id',
                    Table::TYPE_INTEGER,
                    null,
                    [],
                    'ID'
                );
//                ->addForeignKey(
//                    'magenest_director.director_id',
//                    'director_id',
//                    'magenest_director',
//                    'director_id',
//                );
            $installer->getConnection()->createTable($table1);
        }

        $tableName = $setup->getTable('magenest_movie_actor');
        if ($setup->getConnection()->isTableExists($tableName) != true) {
            $table4 = $installer->getConnection()
                ->newTable($installer->getTable('magenest_movie_actor'))->addColumn(
                    'director_id',
                    Table::TYPE_INTEGER,
                    null,
                    [],
                    'ID'
                )->addColumn(
                    'movie_id',
                    Table::TYPE_INTEGER,
                    null,
                    [],
                    'ID'
                );
//                ->addForeignKey(
//                    'magenest_movie.movie_id',
//                    'movie_id',
//                    'magenest_movie',
//                    'movie_id',
//                )->addForeignKey(
//                    'magenest_actor.actor_id',
//                    'actor_id',
//                    'magenest_actor',
//                    'actor_id',
//                );
            $installer->getConnection()->createTable($table4);
        }

//        add key column

        $setup->getConnection()->addForeignKey(
            $setup->getFkName('magenest_movie', 'director_id', $setup->getTable('magenest_director'), 'director_id'),
            $setup->getTable('magenest_movie'),
            'director_id',
            $setup->getTable('magenest_director'),
            'director_id',
        );

        $setup->getConnection()->addForeignKey(
            $setup->getFkName('magenest_movie_actor', 'director_id', $setup->getTable('magenest_director'), 'director_id'),
            $setup->getTable('magenest_movie_actor'),
            'director_id',
            $setup->getTable('magenest_director'),
            'director_id',
        );
        $setup->getConnection()->addForeignKey(
            $setup->getFkName('magenest_movie_actor', 'movie_id', $setup->getTable('magenest_movie'), 'movie_id'),
            $setup->getTable('magenest_movie_actor'),
            'movie_id',
            $setup->getTable('magenest_movie'),
            'movie_id',
        );


        $installer->endSetup();
    }
}
