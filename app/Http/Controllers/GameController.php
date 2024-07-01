<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Page;
use App\Services\GameService;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;

class GameController extends Controller
{

    public function index(Page $page)
    {
        $page->load(['games' => function ($query) {
            $query->orderByDesc('rolled_at')->limit(3);
        }]);

        return view('game.list', [
            'games' => $page->games
        ]);
    }

    public function roll(Page $page, Game $game, GameService $gameService)
    {
        $game->number = $gameService->rollNumber();
        $game->score = $gameService->getScore();
        $page->games()->save($game);

        return view('game.result', compact('game'));
    }
}
