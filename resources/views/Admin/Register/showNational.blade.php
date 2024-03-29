@extends('Admin.Layout.master')

@section('contentBlock')
    <div class="card">
        <div class="card-header">
            <h5 class="m-0"><a href="/admins/registers">Back</a></h5>

        </div>
        <div class="card-body">
            {{-- @foreach ($register as $item) --}}

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h3>Student Details</h3>
                                <h6><b>Image</b></h6>
                                <img src="{{ asset('img/' . $register->img) }}" width="100px" alt="Image">
                                <br /><br>
                                <h6><b>User Name</b></h6>
                                <div>{{ $register->firstName . ' ' . $register->lastName }}</div>
                                <br />
                                <h6><b>DOB</b></h6>
                                <div>{{ $register->dateOfBirth }}</div>
                                <br />
                                <h6><b>Gender</b></h6>
                                @if ($register->gender == 'm')
                                    <div>Male</div>
                                @else
                                    <div>Female</div>
                                @endif
                                <br />
                                <h6><b>Register</b></h6>
                                @if ($register->registerType == 1)
                                    <h6>National</h6>
                                @elseif ($register->registerType == 2)
                                    <h6>International</h6>
                                @else
                                    <h6>Transfer</h6>
                                @endif
                                <div></div>
                                <br />
                                <h6><b>Email</b></h6>
                                <div>{{ $register->email }}</div>
                                <br />
                                <h6><b>Current Address</b></h6>
                                <div>{{ $register->currentAddress }}</div>
                                <br />
                                <h6><b>Status</b></h6>
                                @if ($register->status == 0)
                                    <div>Cancelled</div>
                                @else
                                    <div>Enroll</div>
                                @endif
                                <br />
                                <!-- <h6><b>Gender</b></h6>
                                                                    <div>{{ $register->gender }}</div>
                                                                    <br /> -->
                            </div>
                            <div class="col">
                                <h3>Emergency Details</h3>
                                <div class="row">
                                    <div class="col">
                                        <h6><b>Name</b></h6>
                                        <div>{{ $register->emergencyName }}</div>
                                        <br />
                                        <h6><b>Relationship</b></h6>
                                        <div>{{ $register->emergencyRelationship }}</div>
                                        <br />
                                        <h6><b>Phone Number</b></h6>
                                        <div>{{ $register->emergencyPh }}</div>
                                        <br />
                                        <h6><b>Email</b></h6>
                                        <div>{{ $register->emergencyEmail }}</div>
                                        <br />
                                        <h6><b>Current Address</b></h6>
                                        <div>{{ $register->emergencyAddress }}</div>
                                        <br />
                                    </div>
                                </div>
                                <div class="col">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">

                            <div class="col">
                                <h3>Academic Details</h3>
                                <h6><b>Major Preference</b></h6>
                                <div>{{ $register->majorPreference }}</div>
                                <br />
                                <h6><b>Register Date</b></h6>
                                <div>{{ $register->created_at }}</div>
                                <br />
                            </div>

                        </div>
                        <h6><b>Identity Card</b></h6>
                        <img src="{{ asset('img/' . $register->img) }}" width="500px" alt="Image" margin="0 auto">
                        <br /><br>
                        <h6><b>English Proficiency</b></h6>
                        <img src="{{ asset('img/' . $register->englishProficient) }}" width="500px" alt="Image"
                            margin="0 auto">
                        <br /><br>
                    </div>


                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </div>

    </div>
@endsection
