<?php

namespace Panoscape\LaraTracker;

trait Agent
{
    /**
     * Get all of the agent's records.
     */
    public function records()
    {
        return $this->morphMany(Record::class, 'agent');
    }
}
