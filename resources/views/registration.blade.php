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

                    <form action="" method="post" enctype="multipart/form-data">
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
                            <label class="text-danger">{{ $errors->first('image') }}</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn_submit">সাবমিট করুন </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- registration section end -->


@endsection

@section('script')
<script>
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
  //end
  
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

<script>
   function autocomplete(inp, arr) {
     /*the autocomplete function takes two arguments,
     the text field element and an array of possible autocompleted values:*/
     var currentFocus;
     /*execute a function when someone writes in the text field:*/
     inp.addEventListener("input", function(e) {
         var a, b, i, val = this.value;
         /*close any already open lists of autocompleted values*/
         closeAllLists();
         if (!val) { return false;}
         currentFocus = -1;
         /*create a DIV element that will contain the items (values):*/
         a = document.createElement("DIV");
         a.setAttribute("id", this.id + "autocomplete-list");
         a.setAttribute("class", "autocomplete-items");
         /*append the DIV element as a child of the autocomplete container:*/
         this.parentNode.appendChild(a);
         /*for each item in the array...*/
         for (i = 0; i < arr.length; i++) {
           /*check if the item starts with the same letters as the text field value:*/
           if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
             /*create a DIV element for each matching element:*/
             b = document.createElement("DIV");
             /*make the matching letters bold:*/
             b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
             b.innerHTML += arr[i].substr(val.length);
             /*insert a input field that will hold the current array item's value:*/
             b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
             /*execute a function when someone clicks on the item value (DIV element):*/
             b.addEventListener("click", function(e) {
                 /*insert the value for the autocomplete text field:*/
                 inp.value = this.getElementsByTagName("input")[0].value;
                 /*close the list of autocompleted values,
                 (or any other open lists of autocompleted values:*/
                 closeAllLists();
             });
             a.appendChild(b);
           }
         }
     });
     /*execute a function presses a key on the keyboard:*/
     inp.addEventListener("keydown", function(e) {
         var x = document.getElementById(this.id + "autocomplete-list");
         if (x) x = x.getElementsByTagName("div");
         if (e.keyCode == 40) {
           /*If the arrow DOWN key is pressed,
           increase the currentFocus variable:*/
           currentFocus++;
           /*and and make the current item more visible:*/
           addActive(x);
         } else if (e.keyCode == 38) { //up
           /*If the arrow UP key is pressed,
           decrease the currentFocus variable:*/
           currentFocus--;
           /*and and make the current item more visible:*/
           addActive(x);
         } else if (e.keyCode == 13) {
           /*If the ENTER key is pressed, prevent the form from being submitted,*/
           e.preventDefault();
           if (currentFocus > -1) {
             /*and simulate a click on the "active" item:*/
             if (x) x[currentFocus].click();
           }
         }
     });
     function addActive(x) {
       /*a function to classify an item as "active":*/
       if (!x) return false;
       /*start by removing the "active" class on all items:*/
       removeActive(x);
       if (currentFocus >= x.length) currentFocus = 0;
       if (currentFocus < 0) currentFocus = (x.length - 1);
       /*add class "autocomplete-active":*/
       x[currentFocus].classList.add("autocomplete-active");
     }
     function removeActive(x) {
       /*a function to remove the "active" class from all autocomplete items:*/
       for (var i = 0; i < x.length; i++) {
         x[i].classList.remove("autocomplete-active");
       }
     }
     function closeAllLists(elmnt) {
       /*close all autocomplete lists in the document,
       except the one passed as an argument:*/
       var x = document.getElementsByClassName("autocomplete-items");
       for (var i = 0; i < x.length; i++) {
         if (elmnt != x[i] && elmnt != inp) {
           x[i].parentNode.removeChild(x[i]);
         }
       }
     }
     /*execute a function when someone clicks in the document:*/
     document.addEventListener("click", function (e) {
         closeAllLists(e.target);
     });
   }
   
   /*An array containing all the country names in the world:*/
   var batchs = [
               "1950",
               "1951",
               "1952",
               "1953",
               "1954",
               "1955",
               "1956",
               "1957",
               "1958",
               "1959",
               "1960",
               "1961",
               "1962",
               "1963",
               "1964",
               "1965",
               "1966",
               "1967",
               "1968",
               "1969",
               "1970",
               "1971",
               "1972",
               "1973",
               "1974",
               "1975",
               "1976",
               "1977",
               "1978",
               "1979",
               "1980",
               "1981",
               "1982",
               "1983",
               "1984",
               "1985",
               "1986",
               "1987",
               "1988",
               "1989",
               "1990",
               "1991",
               "1992",
               "1993",
               "1994",
               "1995",
               "1996",
               "1997",
               "1998",
               "1999",
               "2000",
               "2001",
               "2002",
               "2003",
               "2004",
               "2005",
               "2006",
               "2007",
               "2008",
               "2009",
               "2010",
               "2011",
               "2012",
               "2013",
               "2014",
               "2015",
               "2016",
               "2017",
               "2018",
               "2019",
               "2020",
               "2021"
];
   /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
   autocomplete(document.getElementById("batch"), batchs);
   </script>
@endsection