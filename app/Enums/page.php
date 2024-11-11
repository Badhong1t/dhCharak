<?php

namespace App\Enums;


use Rexlabs\Enum\Enum;

class page extends Enum
{
    const HandlingFrozenGoods = 'Handling Frozen & Refregerator Goods';

    const Pickup = 'Pickup Instruction & Locations';

    const Delivery = 'Delivery Schedule';

    const HowItWorks = 'How It Works';

    const SpecialOrders = 'Special Orders';

}
