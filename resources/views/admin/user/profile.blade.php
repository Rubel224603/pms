@extends('admin.master')

@section('body')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0 " style="color:white;">Profile Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4 mt-1">
                            <img src="{{asset('uploads/user/' . $user->profile_photo_path) }}"
                                 alt="Profile Image" class="rounded-circle border mt-2" width="120" height="120">
                            <div class="ms-5">
                                <h4 class="mb-1 fw-bold">{{ $user->name }}</h4>
                                <p class="mb-0"><strong>Email:</strong> {{ $user->email }}</p>
                                <p class="mb-0"><strong>Mobile:</strong> {{ $user->mobile }}</p>
                            </div>
                        </div>


                        <hr>

                        <h5 class="mb-3">Basic Information</h5>
                        <p><strong>Gender:</strong> {{ $user->gender ?? 'N/A' }}</p>
                        <p><strong>Date of Birth:</strong> {{ $user->dob ?? 'N/A' }}</p>
                        <p><strong>Address:</strong> {{ $user->address ?? 'N/A' }}</p>

                        <hr>

                        <h5 class="mb-3">Education</h5>
                        <p><strong>Degree:</strong> {{ $user->education->degree ?? 'N/A' }}</p>
                        <p><strong>University:</strong> {{ $user->education->university ?? 'N/A' }}</p>


                        <hr>

                        <h5 class="mb-3">Social Media</h5>
                        <p><strong>Facebook:</strong> {{ $user->facebook ?? 'N/A' }}</p>
                        <p><strong>LinkedIn:</strong> {{ $user->linkedin ?? 'N/A' }}</p>
                        <p><strong>Twitter:</strong> {{ $user->twitter ?? 'N/A' }}</p>

                        <div class="mt-4">
                            <a href="{{ url('admin/user/profile/edit/')}}" class="btn btn-success">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

