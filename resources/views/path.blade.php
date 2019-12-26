@extends('layout')

@section('content')
<form class="form-format" id="path_create">
    @csrf
    <select name="member" id="member">
        @foreach ($member as $allMember)
            <option value="{{$allMember->id}}">{{$allMember->name}}</option>
        @endforeach
    </select>
    <input type="text" name="pathName" id="pathName">
    <button type="submit" form="path_create"><b> Save </b></button>
</form>
@endsection

@push('script')
    <script src="{{asset('js/member.js')}}"></script>
@endpush