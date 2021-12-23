@extends('layout.app')
@section('content')
<!-- team section start -->
<div class="js-container">
   </div>
   
<section class="team_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="teammembar_head">
					<h2>ইতিমধ্যে রেজিস্টার করেছেন </h2>
					@if ($message = Session::get('success'))
					<div class="alert alert-success">
						<p>{{ $message }}</p>
					</div>
					@endif
				</div>
			</div>
		</div>
		<div class="row mt-3">
			@foreach($members as $member)
			<!-- single membar item start -->
			<div class="col-lg-4">
				<div class="membar_item_wrap">
					<div class="media">
						<img src="{{ asset('public/assets/uploads/members/'.$member->image) }}" alt="a" class="img-fluid">
						<div class="media-body">
							<h5>নাম: {{ $member->name }} </h5>
							<h6>ব্যাচ: {{ $member->batch }} </h6>
							<div class="membar_ftr_txt">
								<h6><i class="fa fa-phone"></i> {{ $member->phone }} </h6>
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


 (function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "12/30/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  
const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour))+9,
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
   </script>
@endsection