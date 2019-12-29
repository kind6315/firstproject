@extends('app')
@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Laravel CRUD Table</div>        
            <div class="panel-body"> 
                <table class="table table-hover">
                    <a href="{{ url('account_info/create') }}" role="btn" class="btn btn-primary">新增</a>
                    <a href="{{ url('account_info/export') }}" role="btn" class="btn btn-success">匯出Excel</a>
                        <thead>
                            <tr>
                                <th>Account</th>
                                <th>Name</th>
                                <th>Sex</th>
                                <th>Birth</th>
                                <th>Email</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($query as $var)
                                <tr>
                                    <td>{{$var->account}}</td>
                                    <td>{{$var->name}}</td>
                                    <td>
                                        @if($var->sex==1)
                                            男
                                        @else
                                            女
                                        @endif
                                    </td>
                                    <td>{{$var->birth}}</td>
                                    <td>{{$var->mail}}</td>
                                    <td>{{$var->description}}</td>
                                    <td><a href="{{url('account_info/'.$var->id.'/edit')}}" role="btn" class="btn btn-warning">編輯</a></td>
                                    <td>
                                        <form action="{{ url('account_info/'.$var->id) }}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="submit" role="btn" class="btn btn-danger" value="刪除">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>                        
                </table>
                {{ $query->links() }} 
            </div>
        </div>
    </div>
@stop