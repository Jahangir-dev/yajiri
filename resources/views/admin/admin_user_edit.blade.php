@extends('template.partials.default')
@section('content')
<div class="main-content">
  <section class="section">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>
  @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


<form id="regForm" method="POST" action="{{route('admin-user-update')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" value="{{$edit->id}}">
  <h4 style="text-align:center">Login or registration:</h4>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Email:
    <p><input placeholder="Email" value="{{$edit->email}}" name="email"></p>
    
  </div>
  <div class="tab">Registration Info:
    <p><select class="form-control purpose" name="registration_type">
      <option value="{{Null}}">Choose</option>
      <option value="1" >Professional</option>
      <option value="2">Private</option>
      
    </select></p>

    <p><input class="private" value="{{$edit->first_name}}" style="display:none" placeholder="First Name..."  name="fname"></p>
    <p><input class="private" value="{{$edit->last_name}}" style="display:none" placeholder="Last Name ..."  name="lname"></p>
    <p><input class="professional" value="{{$edit->company_name}}" style="display:none" placeholder="Company Name..."  name="company_name"></p>
    <p><input class="professional" value="{{$edit->siret_number}}" style="display:none" placeholder="Siert Number ..."  name="siert_number"></p>
    <p><input value="{{$edit->phone_number}}" placeholder="Phone..." name="phone"></p>
    <p><input value="{{$edit->address}}" placeholder="Address..."  name="address"></p>
    <p><input  type="password" placeholder="Password..."  name="password"></p>
  </div>
  <div class="tab">Date of Birth:
    <p><input value="{{$edit->dob}}" type="Date" placeholder="Date Of Birth"  name="dob"></p>
    <p><input type="file" placeholder="Upload Image"  name="image"></p>
    
  </div>
  <div class="tab">Term and Condition:
    <div class="row" style="
    margin-top: 20px;">
      <div class="col-1">
       <input type="checkbox" checked name="term_condition" value="1" style="width: 1.5rem;
    height: 1rem;
    margin-top: 5px;">  
      </div>
      <div class="col-8">
       <p style="font-size: 15px;">I accept <strong style="color: #F82268;
    text-decoration: none;">general terms and conditions.</strong> </p>  
      </div>
      
    </div>
    <div class="row" style="
    margin-top: 10px;">
      <div class="col-1">
       <input type="checkbox" checked name="receive_information" value="1" style="width: 1.5rem;
    height: 1rem;
    margin-top: 5px;">  
      </div>
      <div class="col-8">
       <p style="font-size: 15px;">Receive information from our partners.</p>  
      </div>
      
    </div>
  
    
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>



      <script type="text/javascript">
      $(document).ready(function(){
      $('.purpose').on('change', function() {
      if ( this.value == '1')
      //.....................^.......
      {
      $(".professional").show();
      $(".private").hide();
      }
      else if( this.value=='2')
      {
      $(".private").show();
      $(".professional").hide();
      }
      else{
      $(".professional").hide();
      $(".private").hide();
      }
      });
      });
      </script>


</section>
</div>

@endsection()

