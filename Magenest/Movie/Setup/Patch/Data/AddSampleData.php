<?php

namespace Magenest\Movie\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\App\ResourceConnection;

class AddSampleData implements DataPatchInterface
{
    private $moduleDataSetup;
    private $resource;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        ResourceConnection $resource
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->resource = $resource;
    }

    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();

        $tableName = $this->resource->getTableName('magenest_movie');

        // Insert sample data
        $this->moduleDataSetup->getConnection()->insertMultiple($tableName, [
            ['name' => 'fdasfasf'],
            ['name' => 'dasfd'],
            ['name' => 'fsdafdsafas'],
            // Add more rows as needed
        ]);

        $this->moduleDataSetup->getConnection()->endSetup();
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
