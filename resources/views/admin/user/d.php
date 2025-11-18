<form action="{{route('user-update')}}" method="POST" enctype="multipart/form-data">

    @csrf
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Basic</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Education</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Experience</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >About</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >Skill</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >Social Media</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div class="d-flex align-items-center gap-3">


                <img  src="" alt="" width="120" height="90" class="rounded-circle border">


                <div class="p-3 border rounded" style="width: 280px;">

                    <input type="file" class="form-control p-1" name ="image">
                </div>

            </div>


            <div class="">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="name" class="form-control" name="name" placeholder="enter your name">
            </div>

            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="name" class="form-control" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">Mobile </label>
                <input type="text" class="form-control" name="mobile" placeholder="enter mobile">
            </div>

            <div class="">

                <input type="button" style="width: 200px;background:green; margin-top:5px!important;border:none;padding: 10px; border-radius:40px;font-size: 20px; color: white;padding: 10px;border-radius: 6px;" class="p-2" value="Save"/>
            </div>

        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
    </div>

</form>
