<?php
/**
 * Server module for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-module-server
 * @package   hipanel-module-server
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2019, HiQDev (http://hiqdev.com/)
 */

namespace hipanel\modules\server\widgets;

use hipanel\modules\server\grid\HubGridLegend;

class HubNameBadge extends AbstractNameBadge
{
    /**
     * @var string
     */
    public $gridLegendClass = HubGridLegend::class;
}
