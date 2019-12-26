@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($member as $allMember)
                                <tr>
                                    <td>{{$allMember->id}}</td>
                                    <td>{{$allMember->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($memberPicked as $allMemberPicked)
                                <tr>
                                    <td>{{$allMemberPicked->member_id}}</td>
                                    <td>{{$allMemberPicked->member_id_picked}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection