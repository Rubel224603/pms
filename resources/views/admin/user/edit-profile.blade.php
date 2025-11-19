@extends('admin.master')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mb-6">
                    <div class="card-header ">
                        <h4>Update Profile</h4>
                        <span class="text-primary">   {{session('message')}}</span>

                    </div>

                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-basic-tab" data-bs-toggle="pill" data-bs-target="#basic" type="button" role="tab">Basic</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-education-tab" data-bs-toggle="pill" data-bs-target="#education" type="button" role="tab">Education</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-skills-tab" data-bs-toggle="pill" data-bs-target="#skills" type="button" role="tab">Skills</button>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" id="pills-tabContent">
                            <!-- Basic Tab -->
                            <div class="tab-pane fade show active" id="basic" role="tabpanel">
                                <form action={{ route('user-update-basic') }} method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <!-- Current Image -->
                                        @if($user->profile_photo_path)
                                            <img src="{{ asset('uploads/user/' . $user->profile_photo_path) }}" alt="Profile Image" width="120" height="120" class="rounded-circle border">
                                        @else
                                            <img src="{{ asset('uploads/profile/default.png') }}" alt="Profile Image" width="120" height="120" class="rounded-circle border">
                                        @endif
                                        <div>
                                            <label for="image" class="form-label">Change Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>

                                    <input type="text" name="name" value="{{ $user->name }}" placeholder="Name" class="form-control mb-2">
                                    <input type="email" name="email" value="{{ $user->email }}" placeholder="Email" class="form-control mb-2">
                                    <input type="text" name="mobile" value="{{ $user->mobile }}" placeholder="Mobile" class="form-control mb-2">
                                    <button type="submit" class="btn btn-primary">Save Basic</button>
                                </form>
                            </div>

                            <!-- Education Tab -->
                            <div class="tab-pane fade" id="education" role="tabpanel">
                                <form action="" method="POST">
                                    @csrf
                                    <input type="text" name="degree" value="{{ $user->education->degree ?? '' }}" placeholder="Degree" class="form-control mb-2">
                                    <input type="text" name="university" value="{{ $user->education->university ?? '' }}" placeholder="University" class="form-control mb-2">
                                    <button type="submit" class="btn btn-primary">Save Education</button>
                                </form>
                            </div>

                            <!-- Skills Tab -->
                            <div class="tab-pane fade" id="skills" role="tabpanel">
                                <form action="" method="POST">
                                    @csrf
                                    <input type="text" name="skills[]" value="{{ $user->skills[0]->skill_name ?? '' }}" placeholder="Skill 1" class="form-control mb-2">
                                    <input type="text" name="skills[]" value="{{ $user->skills[1]->skill_name ?? '' }}" placeholder="Skill 2" class="form-control mb-2">
                                    <button type="submit" class="btn btn-primary">Save Skills</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
