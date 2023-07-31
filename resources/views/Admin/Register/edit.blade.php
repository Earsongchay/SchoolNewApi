@extends('Admin.Layout.master')

@section('contentBlock')
    <div class="card">
        <div class="card-header">
            <h5 class="m-0"><a href="/admins/registers">Back</a></h5>
        </div>
        <div class="card-body">
            <form action="/admins/registers/{{ $register->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}

                <div class="row">
                    <div class="col">
                        <input type="text" value="{{ $register->firstName }}" name="firstname" class="form-control"
                            placeholder="First Name">
                    </div>
                    <div class="col">
                        <input type="text" value="{{ $register->lastName }}" name="lastname" class="form-control"
                            placeholder="Last Name">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        @if ($register->gender == 'f')
                            <div class="form-check">
                                <input type="radio" name="gender" value="f" class="form-check-input" checked>Female
                            </div>
                            <div class="form-check">
                                <input type="radio" name="gender" value="m" class="form-check-input">Male
                            </div>
                        @else
                            <div class="form-check">
                                <input type="radio" name="gender" value="f" class="form-check-input">Female
                            </div>
                            <div class="form-check">
                                <input type="radio" name="gender" value="m" class="form-check-input" checked>Male
                            </div>
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <select class="form-control col" name="status" value="">
                        @if ($register->status == 1)
                            <option value="1" selected>Enroll</option>
                            <option value="0">Cancelled</option>
                        @else
                            <option value="1">Enroll</option>
                            <option value="0" selected>Cancelled</option>
                        @endif

                    </select>
                    <div class="col">
                        <input type="date" value="{{ $register->dateOfBirth }}" name="dateOfBirth" class="form-control">
                    </div>

                </div>
                <br>
                <div class="row">
                    <input type="submit" class="btn btn-info" value="Update">
                </div>

            </form>
        </div>
    </div>
@endsection
