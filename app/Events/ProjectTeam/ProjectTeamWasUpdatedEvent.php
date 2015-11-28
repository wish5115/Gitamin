<?php

/*
 * This file is part of Gitamin.
 * 
 * Copyright (C) 2015-2016 The Gitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gitamin\Events\ProjectTeam;

use Gitamin\Models\ProjectTeam;

class ProjectTeamWasUpdatedEvent
{
    /**
     * The project team that was updated.
     *
     * @var \Gitamin\Models\ProjectTeam
     */
    public $team;

    /**
     * Create a new project team was updated event instance.
     *
     * @return void
     */
    public function __construct(ProjectTeam $team)
    {
        $this->team = $team;
    }
}
