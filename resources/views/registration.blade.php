@extends('layout.app')


@section('content')

<!-- registration section start -->
<section class="registration_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_head_wrap">
                    <h2>রেজিস্ট্রেশন </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="registration_frm">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <a href="#"><i class="fa fa-facebook-square"></i> Registration With Facebook</a>
                        </div>
                        <div class="form-group">
                            <label for="">নাম <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                            <label class="text-danger">{{ $errors->first('name') }}</label>
                        </div>
                        <div class="form-group autocomplete">
                            <label for="">ব্যাচ <sup class="text-danger">*</sup></label>
                            <input type="text" id="batch" class="form-control" name="batch" placeholder="Example: 2003">
                            <label class="text-danger">{{ $errors->first('batch') }}</label>
                        </div>
                        <div class="form-group">
                            <label for="">ফোন নাম্বার <sup class="text-danger">*</sup></label>
                            <input type="number" class="form-control" name="phone" placeholder="Enter Your Phone Number">
                            <label class="text-danger">{{ $errors->first('phone') }}</label>
                        </div>
                        <div class="form-group">
                            <label for="">ফোন নাম্বার sender <sup class="text-danger">*</sup></label>
                            <input type="number" class="form-control" name="bkash_number" placeholder="Enter Your Phone Number">
                            <label class="text-danger">{{ $errors->first('bkash_number') }}</label>
                        </div>
                        <div class="form-group">
                            <label for="">বিকাশ/ নগদ/ রকেট <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" name="trnx_id" placeholder="Transaction ID">
                            <label class="text-danger">{{ $errors->first('trnx_id') }}</label>
                        </div>

                        <div class="form-group">
                            <label for="">আপনার ছবি </label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn_submit">সাবমিট করুন </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
         <div class="col-12">
            <p class="text-danger mt-5 text-center">* একক বা দলগত ভাবে সাংস্কৃতিক অনুষ্ঠানে অংশগ্রহনের জন্য আব্দুল কুদ্দুস স্যার এর সাথে যোগাযোগ করুন । </p>
           </div>
        </div>
    </div>
</section>
<!-- registration section end -->


@endsection