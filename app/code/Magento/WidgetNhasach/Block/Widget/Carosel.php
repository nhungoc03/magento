<?php

declare(strict_types=1);

namespace Magento\WidgetNhasach\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Carosel extends Template implements BlockInterface
{
    protected $_template = "widget/carosel.phtml";
}
