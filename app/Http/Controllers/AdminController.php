<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ActionController;
use App\Action;
use App\User;
use App\Comment;
use App\Proposal;
use App\Work;
use App\Rating;
use App\SocialAccount;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function getSettings(){
        $banned_users = User::whereNotNull('ban_reason')->select('name', 'id')->get();
        $reported_comments = Comment::where('reported', '>', 0)->select('comment', 'id', 'proposal_id')->get();
        $data = [
            'actions'       => Action::all()->count(),
            'users'         => User::all()->count(),
            'social_users'  => SocialAccount::all()->count(),
            'banned_users'  => $banned_users->count(),
            'comments'      => Comment::all()->count(),
            'proposals'     => Proposal::all()->count(),
            'works'         => Work::all()->count()
        ];
        return view('admin.settings', compact('data', 'banned_users', 'reported_comments'));
    }

    public function info_months($months)
    {
        $data = [];    
        for ($i=0; $i < $months; $i++) {
            $sub = Carbon::today()->subMonths($i);

            array_push($data, ["y"              => $sub->format('Y-m'),
                               "propuestas"     => Proposal::whereMonth('created_at', '=', $sub->month)->count(),
                               "comentarios"    => Comment::whereMonth('created_at', '=', $sub->month)->count(),
                               "obras"          => Work::whereMonth('created_at', '=', $sub->month)->count(),
                               "calificaciones" => Rating::whereMonth('created_at', '=', $sub->month)->count()]);
        }

        return json_encode($data);
    }

}
