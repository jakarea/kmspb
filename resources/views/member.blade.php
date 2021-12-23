@extends('layout.app')
@section('content')

<!-- team section start -->
<section class="team_section">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="teammembar_head">
               <h2>ইতিমধ্যে রেজিস্টার করেছেন </h2>
            </div>
         </div>
      </div>
      <div class="row mt-3">

      
         @foreach($members as $member)
         <!-- single membar item start -->
         <div class="col-lg-4">
            <div class="membar_item_wrap">
               <div class="media">
                  <img src="{{ asset('public/assets/images/avatar_1.png') }}" alt="a" class="img-fluid">
                  <div class="media-body">
                     <h5>নাম: {{ $member->name }} </h5>
                     <h6>ব্যাচ: {{ $member->batch }} </h6>
                     <div class="membar_ftr_txt">
                        <h6><i class="fa fa-phone"></i>+৮৮ {{ $member->phone }} </h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- single membar item end -->

         @endforeach

          
        </div>
        <div class="row">
           <div class="col-12 text-center mb-3">
                {{ $members->links("pagination::bootstrap-4") }}
           </div>
        </div>
        <div class="row">
        <div class="col-12 text-center home_regis_btn">
            <a href="{{ url('/registation')}}"> রেজিস্ট্রেশন করুন</a>

            <p class="text-danger mt-5">* একক বা দলগত ভাবে সাংস্কৃতিক অনুষ্ঠানে অংশগ্রহনের জন্য আব্দুল কুদ্দুস স্যার এর সাথে যোগাযোগ করুন ।  </p>
        </div>
        </div>
        
     </div>
  </section>
  <!-- team section end -->
         </div>
         <!-- single membar item end -->


         

      </div>
   </div>

   
</section>
<!-- team section end -->

@endsection