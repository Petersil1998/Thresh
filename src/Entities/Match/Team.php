<?php

namespace Thresh\Entities\Match;

use stdClass;

/**
 * This Class represents a Team in a Match
 * @package Thresh\Entities\Match
 */
class Team
{
    /**
     * @var int
     */
    private $teamId;

    /**
     * @var bool
     */
    private $win;

    /**
     * @var bool
     */
    private $firstBlood;

    /**
     * @var bool
     */
    private $firstTower;

    /**
     * @var bool
     */
    private $firstInhibitor;

    /**
     * @var bool
     */
    private $firstBaron;

    /**
     * @var bool
     */
    private $firstDragon;

    /**
     * @var bool
     */
    private $firstRiftHerald;

    /**
     * @var int
     */
    private $towerKills;

    /**
     * @var int
     */
    private $inhibitorKills;

    /**
     * @var int
     */
    private $baronKills;

    /**
     * @var int
     */
    private $dragonKills;

    /**
     * @var int
     */
    private $vilemawKills;

    /**
     * @var int
     */
    private $riftHeraldKills;

    /**
     * @var int
     */
    private $dominionVictoryScore;

    /**
     * @var array
     */
    private $bans;

    /**
     * Team constructor.
     * @param stdClass $data
     */
    public function __construct($data)
    {
        $this->teamId = $data->teamId;
        $this->win = $data->win === 'Win';
        $this->firstBlood = $data->firstBlood;
        $this->firstTower = $data->firstTower;
        $this->firstInhibitor = $data->firstInhibitor;
        $this->firstBaron = $data->firstBaron;
        $this->firstDragon = $data->firstDragon;
        $this->firstRiftHerald = $data->firstRiftHerald;
        $this->towerKills = $data->towerKills;
        $this->inhibitorKills = $data->inhibitorKills;
        $this->baronKills = $data->baronKills;
        $this->dragonKills = $data->dragonKills;
        $this->vilemawKills = $data->vilemawKills;
        $this->riftHeraldKills = $data->riftHeraldKills;
        $this->dominionVictoryScore = $data->dominionVictoryScore;
        $bans = array();
        foreach ($data->bans as $ban){
            $bans[$ban->pickTurn] = $ban->championId;
        }
        $this->bans = $bans;
    }

    /**
     * @return int
     */
    public function getTeamId(): int
    {
        return $this->teamId;
    }

    /**
     * @return bool
     */
    public function isWin(): bool
    {
        return $this->win;
    }

    /**
     * @return bool
     */
    public function isFirstBlood(): bool
    {
        return $this->firstBlood;
    }

    /**
     * @return bool
     */
    public function isFirstTower(): bool
    {
        return $this->firstTower;
    }

    /**
     * @return bool
     */
    public function isFirstInhibitor(): bool
    {
        return $this->firstInhibitor;
    }

    /**
     * @return bool
     */
    public function isFirstBaron(): bool
    {
        return $this->firstBaron;
    }

    /**
     * @return bool
     */
    public function isFirstDragon(): bool
    {
        return $this->firstDragon;
    }

    /**
     * @return bool
     */
    public function isFirstRiftHerald(): bool
    {
        return $this->firstRiftHerald;
    }

    /**
     * @return int
     */
    public function getTowerKills(): int
    {
        return $this->towerKills;
    }

    /**
     * @return int
     */
    public function getInhibitorKills(): int
    {
        return $this->inhibitorKills;
    }

    /**
     * @return int
     */
    public function getBaronKills(): int
    {
        return $this->baronKills;
    }

    /**
     * @return int
     */
    public function getDragonKills(): int
    {
        return $this->dragonKills;
    }

    /**
     * @return int
     */
    public function getVilemawKills(): int
    {
        return $this->vilemawKills;
    }

    /**
     * @return int
     */
    public function getRiftHeraldKills(): int
    {
        return $this->riftHeraldKills;
    }

    /**
     * @return int
     */
    public function getDominionVictoryScore(): int
    {
        return $this->dominionVictoryScore;
    }

    /**
     * @return array
     */
    public function getBans(): array
    {
        return $this->bans;
    }
}