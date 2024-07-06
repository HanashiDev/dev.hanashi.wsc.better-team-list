<?php

namespace wcf\system\event\listener;

use wcf\page\TeamPage;

final class BetterTeamPageListener extends AbstractEventListener
{
    protected function onShow(TeamPage $eventObj)
    {
        $eventObj->templateName = 'betterTeam';
    }
}
