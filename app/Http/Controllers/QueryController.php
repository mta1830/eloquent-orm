<?php

namespace EloquentORM\Http\Controllers;

use EloquentORM\User;

use Illuminate\Http\Request;
use EloquentORM\Http\Requests;
use EloquentORM\Http\Controllers\Controller;

class QueryController extends Controller
{
    public function eloquentAll(){
        $users = User::All();
        $title = "Todos los usuarios (ALL)";
        return view('query.methods', compact('title','users'));
    }

    public function eloquentGet($gender){
        $users = User::where('gender', $gender)
                ->get();
        $title = "Lista de usuarios (GET)";

        return view('query.methods', compact('title','users'));
    }

    public function eloquentGetCustom(){
        $users = User::where('id','>',0)
                ->get(['id', 'name', 'biography']);

        $title = "Lista de usuarios (GET Custom - con Array)";

        return view('query.methods', compact('title','users'));
    }

    public function eloquentDelete($id){
        $user = User::find($id);

        $user->delete();

        return view('pages.delete');
    }

    public function eloquentLists(){
        $users = User::orderBy('name', 'ASC')
                ->lists('name','id');

        $title = "Lista de usuarios en select (LISTS)";

        return view('query.lists',compact('users','title'));
    }

    public function eloquentFirstLast(){
        $first = User::first();
        $last = User::all()->last();

        $title = "First & Last";

        return view('query.first-last',compact('first','last','title'));
    }

    public function eloquentPaginate(){
        $users = User::orderBy('id','DESC')
                ->paginate();

        $title = "Eloquent Paginate";

        return view('query.paginate',compact('users','title'));
    }
}
