@extends('layout')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mt-3">
                        <table class="table table-bordered" id="tbl_member">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($member as $allMember)
                                <tr>
                                    <td>{{$allMember->name}}</td>
                                    <td>{{date('F d,Y H:i', strtotime($allMember->created_at))}}</td>
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

@push('script')
    <script src="{{asset('js/member-list.js')}}"></script>
@endpush