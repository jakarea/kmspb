@extends('layout.app')

@section('content')
<div class="js-container">
   </div>
<!-- home section start -->
<section class="home_section">
     <div class="container">
        <div class="row">
           <div class="col-12 main_title">
              <h2>প্রস্তুতি </h2>
           </div>
           <div class="col-lg-12">
              <div class="home_header_txt">
              <p>
                  কাহালু মডেল সরকারি প্রাথমিক বিদ্যালয় <span> ১৯২১</span> সালে প্রতিষ্ঠিত হয় এবং  <span>২০২১</span> সালে <span>১০০</span> বছর পূর্ণ হয়,  বিদ্যালয়টি শতবর্ষ পুর্তি উপলক্ষে <span>আগামী ৩০ শে ডিসেম্বর</span> ২০২১ তারিখ আয়োজন করেছে <span>আনন্দ রালি,</span> প্রাক্তন <span>শিক্ষার্থীর মিলনমেলা</span> এবং সাংস্কৃতিক অনুষ্ঠান। বৃহস্পতিবার  সকাল <span> ৯ টায়</span> বিদ্যালয় মাঠ থেকে বের হয় একটি বর্ণাঢ্য শোভাযাত্রা। এতে অংশ নেবেন  <span>বিদ্যালয়ের প্রাক্তন ও বর্তমান শিক্ষার্থী ও শিক্ষকেরা।</span>   অংশগ্রহণকারী সবার জন্য থাকছে <span>টিশার্ট।</span>  অনুষ্ঠানে যোগ দিতে আগ্রহীদের <span>নিবন্ধন</span> কার্যক্রম চলছে, এর শেষ সময় ১৫ ফেব্রুয়ারি। <span>নিবন্ধনে ইচ্ছুক</span> প্রাক্তন শিক্ষার্থীদের প্রতি <a href="{{ url('/registation')}}" target="_blank"><span><i class="fa fa-hand-o-right"></i> রেজিস্ট্রেশন</span></a> করার জন্য অনুরোধ করা হল।  
                 </p>

                 <h6>রেজিস্ট্রেশনের নিয়ম</h6>

                 <ul>
                     <li><strong>১.</strong> রেজিস্ট্রেশনের পূর্বে বিকাশের মাধ্যমে শুভেচ্ছা ফি <span>৩০০ টাকা</span> জমা দিতে হবে। </li>
                     <li><strong>২.</strong> বিকাশ পার্সোনাল নাম্বার, <strong>০১৭১২ ০২১৯২৪  আব্দুল কুদ্দুস স্যার,</strong> সহকারী শিক্ষক, কাহালু মডেল সরকারি প্রাথমিক বিদ্যালয়। </li>
                     <li><strong>৩.</strong> বিকাশে টাকা পাঠানোর পর, আপনার <span>ট্রান্সেকশন আইডি</span> দিয়ে ফর্ম ফিলাপ করতে হবে। </li>
                     <li><strong>৪.</strong> রেজিস্ট্রেশন ভেরিফাই হলে <a target="_blank" href="{{ url('/members')}}"><span>রেজিস্টার্ড সদস্য পেজে</span></a> আপনার নাম দেখতে পারবেন </li>
                     <li> <strong> ৫.</strong> <span>১ ঘন্টার ভিতর</span> রেজিস্ট্রেশন ভেরিফাই না হলে বা রেজিস্টার্ড সদস্য পেজে <span>আপনার নাম</span> দেখতে না পারলে,০১৭১২ ০২ ১৯২৪  আব্দুল কুদ্দুস স্যার এর  সাথে যোগাযোগ করবেন </li>

                     <li><strong>৬.</strong> যে কোনো টেকনিক্যাল সমস্যা ফেস করলে <a target="_blank" href="https://facebook.com/jakarea.io"><span>জাকারিয়া পারভেজ</span></a> এর যোগাযোগ করবেন।</li>
                     
                  </ul>
              </div>
           </div>
           <div class="col-12 text-center home_regis_btn">
               <a href="{{ url('/registation')}}"> রেজিস্ট্রেশন করুন</a>

               <p class="text-danger mt-5">* একক বা দলগত ভাবে সাংস্কৃতিক অনুষ্ঠানে অংশগ্রহনের জন্য আব্দুল কুদ্দুস স্যার এর সাথে যোগাযোগ করুন ।  </p>
           </div>
        </div>
     </div>
  </section>
  <!-- home section end -->

@endsection

@section('script')
<script>

const Confettiful = function(el) {
  this.el = el;
  this.containerEl = null;
  
  this.confettiFrequency = 3;
  this.confettiColors = ['#EF2964', '#00C09D', '#2D87B0', '#48485E','#EFFF1D'];
  this.confettiAnimations = ['slow', 'medium', 'fast'];
  
  this._setupElements();
  this._renderConfetti();
};

Confettiful.prototype._setupElements = function() {
  const containerEl = document.createElement('div');
  const elPosition = this.el.style.position;
  
  
  
  containerEl.classList.add('confetti-container');
  
  this.el.appendChild(containerEl);
  
  this.containerEl = containerEl;
};

Confettiful.prototype._renderConfetti = function() {
  this.confettiInterval = setInterval(() => {
    const confettiEl = document.createElement('div');
    const confettiSize = (Math.floor(Math.random() * 3) + 7) + 'px';
    const confettiBackground = this.confettiColors[Math.floor(Math.random() * this.confettiColors.length)];
    const confettiLeft = (Math.floor(Math.random() * this.el.offsetWidth)) + 'px';
    const confettiAnimation = this.confettiAnimations[Math.floor(Math.random() * this.confettiAnimations.length)];
    
    confettiEl.classList.add('confetti', 'confetti--animation-' + confettiAnimation);
    confettiEl.style.left = confettiLeft;
    confettiEl.style.width = confettiSize;
    confettiEl.style.height = confettiSize;
    confettiEl.style.backgroundColor = confettiBackground;
    
    confettiEl.removeTimeout = setTimeout(function() {
      confettiEl.parentNode.removeChild(confettiEl);
    }, 1500);
    
    this.containerEl.appendChild(confettiEl);
  }, 15);
};

window.confettiful = new Confettiful(document.querySelector('.js-container'));



   </script>
@endsection