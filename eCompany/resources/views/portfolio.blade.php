@extends('layouts.header')
@section('content')
@section('title','Portfolio')
<div class="container mt-5">
  <!-- Control buttons -->
  <div class="mt-5">
    <div class="mt-5 text-center">
      <div id="myBtnContainer text-center">
        <button class="btn active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn" onclick="filterSelection('app')"> App</button>
        <button class="btn" onclick="filterSelection('web')"> Web</button>
        <button class="btn" onclick="filterSelection('card')"> Card</button>
        {{-- <button class="btn" onclick="filterSelection('colors')"> Colors</button> --}}
      </div>
      
      <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
      <div class="container text-center">
        @foreach($gallery as $gallery)
        <div class="filterDiv {{$gallery->category}} text-center" style="height: 250px; width:360px;">
          <img class="img-fluid" src="{{asset('uploads/'. $gallery->image)}}" style="height: 100%; width:100%;"alt="">
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<style>
  .container {
  overflow: hidden;
}

.filterDiv {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none; /* Hidden by default */
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

/* Add a light grey background on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background to the active button */
.btn.active {
  background-color: #666;
  color: white;
}
</style>
<script>
  filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
@endsection