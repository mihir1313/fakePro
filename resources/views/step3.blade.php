@extends('layouts.index')
@section('dashboard-title', 'Unlocked')
@section('dashboard-content')


        <div class="head_row row">
            <div class="logo">
                <img src="{{  asset('assets/logo/logo.png') }}" alt="logo" width="140" height="84">
            </div>
            <div class="adv_top adv"></div>
        </div>
        <div class="membership_row row">
            <div class="adv_left adv_middle adv"></div>
            <div class="generator_form unlocked_form">
                <div class="unlocked_Wrap">
                    <div class="icon">
                        <img src="{{ asset('assets/logo/icon-right.png') }}" width="120" height="120" alt="img">
                    </div>
                    <p>Unlocked</p>
                    <p>Thank you for your submission, check your email.</p>
                </div>
                <div class="action_btn">
                    <button class="submit ok_btn" type="button">OK</button>
                </div>
            </div>
            <div class="adv_right adv_middle adv"></div>
        </div>
        <div class="adv_footer adv"></div>
    

@endsection
@section('dashboard-footer')
    <script>
        // $(document).ready(function(){
        //     $("#emailForm").validate({
        //         rules: {
        //             email: "required",
        //         },
        //         messages: {
        //             email: "Please enter your email",
        //         },
        //         submitHandler: function(form) {
        //             form.submit();
        //         }
        //     });
        // })
    </script>
@endsection
