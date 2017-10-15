<?php

namespace Gameap\Http\Controllers\Api;

use Gameap\Http\Controllers\AuthController;
use Gameap\Repositories\GameModRepository;
use Gameap\Models\GameMod;

class GameModsController extends AuthController
{
    /**
     * The GameModRepository instance.
     *
     * @var \Gameap\Repositories\GameModRepository
     */
    public $repository;

    /**
     * GameModsController constructor.
     * @param GameModRepository $repository
     */
    public function __construct(GameModRepository $repository)
    {
        parent::__construct();

        $this->repository = $repository;
    }

    public function getListForGame(string $gameCode)
    {
        return $this->repository->getIdNameListForGame($gameCode);
    }
}