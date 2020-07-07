<?php
/**
 * Test for Index class
 */

declare(strict_types=1);

namespace PhpMyAdmin\Tests;

use PhpMyAdmin\Index;

/**
 * Test for Index class
 */
class IndexTest extends AbstractTestCase
{
    private $_params = [];

    /**
     * Configures parameters.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->_params['Schema'] = 'PMA_Schema';
        $this->_params['Table'] = 'PMA_Table';
        $this->_params['Key_name'] = 'PMA_Key_name';
        $this->_params['Index_choice'] = 'PMA_Index_choice';
        $this->_params['Comment'] = 'PMA_Comment';
        $this->_params['Index_comment'] = 'PMA_Index_comment';
        $this->_params['Non_unique'] = 'PMA_Non_unique';
        $this->_params['Packed'] = 'PMA_Packed';

        //test add columns
        $column1 = [
            'Column_name' => 'column1',
            'Seq_in_index' => 'index1',
            'Collation' => 'Collation1',
            'Cardinality' => 'Cardinality1',
            'Null' => 'null1',
        ];
        $column2 = [
            'Column_name' => 'column2',
            'Seq_in_index' => 'index2',
            'Collation' => 'Collation2',
            'Cardinality' => 'Cardinality2',
            'Null' => 'null2',
        ];
        $column3 = [
            'Column_name' => 'column3',
            'Seq_in_index' => 'index3',
            'Collation' => 'Collation3',
            'Cardinality' => 'Cardinality3',
            'Null' => 'null3',
        ];
        $this->_params['columns'][] = $column1;
        $this->_params['columns'][] = $column2;
        $this->_params['columns'][] = $column3;
    }

    /**
     * Test for Constructor
     */
    public function testConstructor(): void
    {
        $index = new Index($this->_params);
        $this->assertEquals(
            'PMA_Index_comment',
            $index->getComment()
        );
        $this->assertEquals(
            'PMA_Comment',
            $index->getRemarks()
        );
        $this->assertEquals(
            'PMA_Index_choice',
            $index->getChoice()
        );
        $this->assertEquals(
            'PMA_Packed',
            $index->getPacked()
        );
        $this->assertEquals(
            'PMA_Non_unique',
            $index->getNonUnique()
        );
        $this->assertStringContainsString(
            'PMA_Comment',
            $index->getComments()
        );
        $this->assertStringContainsString(
            'PMA_Index_comment',
            $index->getComments()
        );
        $this->assertEquals(
            'PMA_Index_choice',
            $index->getChoice()
        );
    }

    /**
     * Test for isUnique
     */
    public function testIsUniquer(): void
    {
        $this->_params['Non_unique'] = '0';
        $index = new Index($this->_params);
        $this->assertTrue(
            $index->isUnique()
        );
        $this->assertEquals(
            'Yes',
            $index->isUnique(true)
        );
    }

    /**
     * Test for add Columns
     */
    public function testAddColumns(): void
    {
        $index = new Index();
        $index->addColumns($this->_params['columns']);
        $this->assertTrue($index->hasColumn('column1'));
        $this->assertTrue($index->hasColumn('column2'));
        $this->assertTrue($index->hasColumn('column3'));
        $this->assertEquals(
            3,
            $index->getColumnCount()
        );
    }

    /**
     * Test for get Name & set Name
     */
    public function testName(): void
    {
        $index = new Index();
        $index->setName('PMA_name');
        $this->assertEquals(
            'PMA_name',
            $index->getName()
        );
    }

    /**
     * Test for PhpMyAdmin\Index Column
     */
    public function testColumns(): void
    {
        $index = new Index();
        $index->addColumns($this->_params['columns']);

        $index_columns = $index->getColumns();
        $index_column = $index_columns['column1'];
        $this->assertEquals(
            'column1',
            $index_column->getName()
        );
        $this->assertEquals(
            'index1',
            $index_column->getSeqInIndex()
        );
        $this->assertEquals(
            'Collation1',
            $index_column->getCollation()
        );
        $this->assertEquals(
            'Cardinality1',
            $index_column->getCardinality()
        );
    }
}
