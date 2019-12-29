<?php

namespace App\Http\Controllers;

use App\Account_info;
use Illuminate\Http\Request;
use App\Http\Requests\Account_infoRequest;
use App\Exports\Account_infoExport;
use Maatwebsite\Excel\Facades\Excel;


class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $query = Account_info::paginate(3);
        return view('account_info.index', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Account_infoRequest $request)
    {
        account_info::create($request->all());
        return redirect('account_info');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account_info  $account_info
     * @return \Illuminate\Http\Response
     */
    public function show(Account_info $account_info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account_info  $account_info
     * @return \Illuminate\Http\Response
     */
    public function edit(Account_info $account_info)
    {
        $query = Account_info::find($account_info->id);
        return view('account_info.edit', compact('query'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account_info  $account_info
     * @return \Illuminate\Http\Response
     */
    public function update(Account_infoRequest $request, Account_info $account_info)
    {
        Account_info::where('id', $account_info->id)->update($request->except(['_token','_method']));
        return redirect('account_info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account_info  $account_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account_info $account_info)
    {
        Account_info::destroy($account_info->id);
        return redirect('account_info');
    }

    /**
     * Download account_info.xlsx
     */
    public function export() 
    {
        return Excel::download(new Account_infoExport, 'account_info.xlsx');
    }
}
