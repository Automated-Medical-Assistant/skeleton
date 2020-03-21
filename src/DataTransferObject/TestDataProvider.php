<?php
declare(strict_types=1);
namespace App\DataTransferObject;

/**
 * Auto generated data provider
 */
final class TestDataProvider extends \Xervice\DataProvider\Business\Model\DataProvider\AbstractDataProvider implements \Xervice\DataProvider\Business\Model\DataProvider\DataProviderInterface
{
    /** @var int */
    protected $testInt;

    /** @var string */
    protected $testString;


    /**
     * @return int
     */
    public function getTestInt(): int
    {
        return $this->testInt;
    }


    /**
     * @param int $testInt
     * @return TestDataProvider
     */
    public function setTestInt(int $testInt)
    {
        $this->testInt = $testInt;

        return $this;
    }


    /**
     * @return TestDataProvider
     */
    public function unsetTestInt()
    {
        $this->testInt = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasTestInt()
    {
        return ($this->testInt !== null && $this->testInt !== []);
    }


    /**
     * @return string
     */
    public function getTestString(): string
    {
        return $this->testString;
    }


    /**
     * @param string $testString
     * @return TestDataProvider
     */
    public function setTestString(string $testString)
    {
        $this->testString = $testString;

        return $this;
    }


    /**
     * @return TestDataProvider
     */
    public function unsetTestString()
    {
        $this->testString = null;

        return $this;
    }


    /**
     * @return bool
     */
    public function hasTestString()
    {
        return ($this->testString !== null && $this->testString !== []);
    }


    /**
     * @return array
     */
    protected function getElements(): array
    {
        return array (
          'testInt' =>
          array (
            'name' => 'testInt',
            'allownull' => false,
            'default' => '',
            'type' => 'int',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
          'testString' =>
          array (
            'name' => 'testString',
            'allownull' => false,
            'default' => '',
            'type' => 'string',
            'is_collection' => false,
            'is_dataprovider' => false,
            'isCamelCase' => false,
          ),
        );
    }
}
