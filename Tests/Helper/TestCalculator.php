<?php


use PHPUnit\Framework\TestCase;
use Tringuyen\Unlock\Helper\CalculatorHelper;

class TestCalculator extends TestCase
{
//    public function testCalculator()
//    {
//        $a = 2;
//        $b = 4;
//        $object = new CalculatorHelper();
//        $result = $object->add($a, $b);
//        $expected = 7;
//        $this->assertEquals($expected, $result, "YOU WIN");
//    }
    /**
     * @param $params
     * @param $expected
     * @dataProvider calculatorDataProvider
     * @return void
     */
    public function testCal($params, $expected): void
    {
        $object = new CalculatorHelper();
        $result = $object->add($params['number1'], $params['number2']);

        $this->assertEquals($expected, $result);
    }

    /**
     * @return array[]
     */
    public function calculatorDataProvider(): array
    {
        return [
            'case-1' => [
                'params' => [
                    'number1' => 1,
                    'number2' => 2
                ],
                'expected' => 3
            ],
            'case-2' => [
                'params' => [
                    'number1' => 3,
                    'number2' => 2
                ],
                'expected' => 5
            ],
            'case-3' => [
                'params' => [
                    'number1' => 2,
                    'number2' => 2
                ],
                'expected' => 4
            ]
        ];
    }
}
