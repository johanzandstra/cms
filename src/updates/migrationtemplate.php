<?php
/**
 * @link      http://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   http://craftcms.com/license
 */

namespace craft\app\migrations;

/**
 * This view is used by app/console/controllers/MigrateController.php.
 *
 * The following variables are available in this view:
 */
/** @var $namespace         string The namespace of the generated migration. */
/** @var $className         string The new migration class name. */
/** @var $migrationNameDesc string The format of the migration class name. */

echo "<?php\n";
?>

namespace <?= $namespace ?>;

use Craft;
use craft\app\db\Migration;
use craft\app\helpers\Migration as MigrationHelper;
use yii\db\Schema;

/**
 * <?= $className ?> migration.
 */
class <?= $className ?> extends Migration
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        // Place migration code here...
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "<?= $className ?> cannot be reverted.\n";
        return false;
    }
}