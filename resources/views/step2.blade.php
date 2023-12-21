@extends('layouts.index')
@section('dashboard-title', 'Ready')
@section('dashboard-content')

    
        @php
$imagePath = asset('uploads/' . $memberDetails['profile']);
            // $imagePath = public_path() . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . $memberDetails['profile'];
        @endphp
            <div class="head_row row">
                <div class="logo">
                    <img src="{{ asset('assets/logo/logo.png') }}" alt="logo" width="140" height="84">
                </div>
                <div class="adv_top adv"></div>
            </div>
            <div class="membership_row row">
                <div class="adv_left adv_middle adv"></div>
                <div class="generator_form ready_form">
                    <div class="background_hide">
                        <div class="membership_ready">
                            <h2 class="form_title black_title">Fake Membership is Ready</h2>
                            <div class="membership_info">
                                <div class="row">
                                    <div class="name_info">
                                        <h3 class="black_title">
                                            {{ isset($memberDetails['firstname_text']) && isset($memberDetails['lastname'])
                                                ? ucfirst($memberDetails['firstname_text']) . ' ' . $memberDetails['lastname']
                                                : '' }}
                                        </h3>
                                        <span>Membership</span>
                                        <span>#{{ isset($memberDetails['code']) ? $memberDetails['code'] : '' }}</span>
                                        <div class="member_img img_box">
                                            <img src="{{ $imagePath }}" id="memberimg" alt="!img not found">
                                        </div>
                                    </div>
                                    <div class="qr_code">
                                        @if (isset($memberDetails['account_style']) && $memberDetails['account_style'] == 2)
                                            <h4 class="red_title"><span>Personal</span><br><span>Executive Member</span>
                                            @else
                                                <h4 class="red_title"><span>Buisness</span><br><span>Executive Member</span>
                                        @endif
                                        </h4>
                                        <div class="qr_img img_box">
                                            <img src="{{ asset('assets/logo/barcode.jpg') }}" width="150" height="150" alt="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="action_btn">
                                    <button class="submit payment_btn" type="button">Add Payment</button>
                                </div>
                            </div>
                            <p>This membership is for entertainment purpose only. this will not work to buy anything</p>
                        </div>
                    </div>
                    <form class="form" method="POST" id="emailForm" action="{{ url('/membership/save') }}">
                        @csrf
                        <div class="input_group">
                            <label class="label">Enter your email to unlock the membership image.</label>
                            <div class="input_field">
                                <input type='text' class="input" id="email" name="email" placeholder="Enter your Email" />
                                {{-- <span class="error">First name is required*</span> --}}
                            </div>
                        </div>
                        <div class="action_btn">
                            <button class="submit" type="submit">Unlock</button>
                        </div>
                    </form>
                </div>
                <div class="adv_right adv_middle adv"></div>
            </div>
            <div class="adv_footer adv"></div>


@endsection
@section('dashboard-footer')
    <script>
        $(document).ready(function(){
            $("#emailForm").validate({
                rules: {
                    email: "required",
                },
                messages: {
                    email: "Please enter your email",
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        })
    </script>
@endsection
