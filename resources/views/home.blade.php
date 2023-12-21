@extends('layouts.index')
@section('dashboard-title', 'Dashboard')
@section('dashboard-content')

            <div class="head_row row">
                <div class="logo">
                    <img src="{{ asset('assets/logo/logo.png') }}" alt="logo" width="140" height="84">
                </div>
                <div class="adv_top adv"></div>
            </div>
            <div class="membership_row row">
                <div class="adv_left adv_middle adv"></div>
                <div class="generator_form">
                    <h2 class="form_title">Fake Membership Generator</h2>
                    <form class="form" id="infoForm" action="{{ url('/info/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3 class="sub_title">Enter Your Information</h3>
                        <div class="input_group photo_group">
                            <div class="input_field photo_field">
                                {{-- <input type='file' class="input_pic" id="profile" name="profile" accept=".png, .jpg, .jpeg"/>
                            <img id=" blah" src="#" alt="your image" style="display: none;" /> --}}
                                <input type='file' class="input_pic" id="profile" name="profile"
                                    accept=".png, .jpg, .jpeg" />
                                <img id="imagePreview" src="#" alt="your image"
                                    style="display: none; max-width: 100%; max-height: 200px;" />
                                <span class="cam_icn"><img src="" /></span>
                            </div>

                            <span class="take_photo">Take Photo <input type='file' class="input_pic" /></span>
                            {{-- <span class="error error_upload">Photo is required*</span> --}}
                        </div>
                        <div class="input_group">
                            <label class="label">First Name</label>
                            <div class="input_field">
                                <input type='text' class="input" id="firstname" name="firstname"
                                    placeholder="Enter your First Name" />
                                {{-- <span class="error">First name is required*</span> --}}
                            </div>
                        </div>
                        <div class="input_group">
                            <label class="label">Last Name</label>
                            <div class="input_field">
                                <input type='text' class="input" id="lastname" name="lastname"
                                    placeholder="Enter your Last Name" />
                                {{-- <span class="error">Last name is required*</span> --}}
                            </div>
                        </div>
                        <div class="input_group">
                            <label class="label">Account Style</label>
                            <div class="radio_group">
                                <div class="input_field">
                                    <input type="radio" id="accstyle" name="accstyle" value="1">
                                    <label for="business">Business</label>
                                </div>
                                <div class="input_field">
                                    <input type="radio" id="accstyle" name="accstyle" value="2">
                                    <label for="personal">Personal</label>
                                </div>
                            </div>
                            {{-- <span class="error">Please select one from above*</span> --}}
                        </div>
                        <div class="agree_tc">
                            <input type="checkbox" id="terms" name="terms">
                            <label for="checkbox" style="display: none;">Personal</label>
                            <p>I agree to the <a href="#" class="a_link">terms of service</a> and <a href="#"
                                    class="a_link">privacy policy</a></p>
                        </div>
                        <div class="action_btn">
                            <button class="submit" type="submit">Next</button>
                        </div>
                    </form>
                </div>
                <div class="adv_right adv_middle adv"></div>
            </div>
            <div class="adv_footer adv"></div>
   

@endsection
@section('dashboard-footer')
    <script>
        $(document).ready(function() {

            $('#profile').change(function() {
                readURL(this);
            });


            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#imagePreview').attr('src', e.target.result);
                        $('#imagePreview').show();
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#infoForm").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    accstyle: "required",
                    profile: {
                        required: true,
                        accept: "image/jpeg, image/png",
                        mimes: ["jpeg", "jpg", "png"] 
                    },
                    terms: "required" 

                    // Add more rules for other form fields
                },
                messages: {
                    firstname: "Please enter your first name",
                    lastname: "Please enter your last name",
                    accstyle: "Please select an account style",
                    profile: {
            required: "Please select an image",
            accept: "Only JPEG and PNG images are allowed",
            mimes: 'Only JPEG and PNG images are allowed' // Customize the error message
        },
        terms: "Please agree to the terms" // Customize the error message for terms checkbox

                    // Add more messages for other form fields
                },
                submitHandler: function(form) {
                    // This function will be called when the form is valid
                    form.submit();
                }
            });
        });
    </script>
@endsection
