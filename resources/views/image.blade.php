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
                                    <th scope="col">ID</th>
                                    <th scope="col">Path</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($image as $allImage)
                                <tr>
                                    <td>{{$allImage->member_id}}</td>
                                    <td>{{$allImage->member_image_path}}</td>
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