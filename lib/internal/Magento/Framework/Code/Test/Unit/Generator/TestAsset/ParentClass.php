<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Code\Test\Unit\Generator\TestAsset;

use Laminas\Code\Generator\DocBlockGenerator;

/**
 * phpcs:ignoreFile
 */
class ParentClass
{
    /**
     * Public parent method
     *
     * @param DocBlockGenerator $docBlockGenerator
     * @param string $param1
     * @param string $param2
     * @param string $param3
     * @param array $array
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function publicParentMethod(
        DocBlockGenerator $docBlockGenerator,
        $param1 = '',
        $param2 = '\\',
        $param3 = '\'',
        array $array = []
    ) {
    }

    /**
     * Protected parent method
     *
     * @param DocBlockGenerator $docBlockGenerator
     * @param string $param1
     * @param string $param2
     * @param string $param3
     * @param array $array
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    protected function _protectedParentMethod(
        DocBlockGenerator $docBlockGenerator,
        $param1 = '',
        $param2 = '\\',
        $param3 = '\'',
        array $array = []
    ) {
    }

    /**
     * Private parent method
     *
     * @param DocBlockGenerator $docBlockGenerator
     * @param string $param1
     * @param string $param2
     * @param string $param3
     * @param array $array
     *
     * @SuppressWarnings(PHPMD.UnusedPrivateMethod)
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    private function _privateParentMethod(
        DocBlockGenerator $docBlockGenerator,
        $param1 = '',
        $param2 = '\\',
        $param3 = '\'',
        array $array = []
    ) {
    }

    public function publicParentWithoutParameters()
    {
    }

    public static function publicParentStatic()
    {
    }

    final public function publicParentFinal()
    {
    }
}
