<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Course Form</title>
  <style>
    table{

     border-collapse:collapse;
     text-align:center;

    }
    td,th{
   border: 1px solid;

    }
    .page-break {
        page-break-after: always;
    }
  </style>
<?php

foreach($course as $course)





?>
</head>

<body>
  <div class="container">
<div class="row">
  <h2 style="text-align:center;">Noakhali Science And Technology University</h2>
  <h4 style="text-align:center;">Noakhali-3814,Bangladesh</h4><br>
    <h3 style="text-align:center;">Bank Form</h3><br>
</div>
<div class="row">
  <div class="col-md-8 " style="padding-left:120px;">
<div class="col-md-2" style="text-align:left;"><strong>Session </strong>:{{Auth::User()->academicssn}}</div><br>
<div class="col-md-2" style="text-align:center;padding-top:-40px;padding-right:250px;"><strong>Year </strong>:{{$registered->year}}</div><br>
<div class="col-md-2" style="text-align:right;padding-top:-60px;padding-right:300px;"><strong>Term </strong>:{{$registered->term}}</div>
<div class="col-md-2" style="text-align:left;padding-top:-20px;"><strong>Bank form number</strong>:{{$registered->id}}</div><br>
<div class="col-md-2"style="text-align:right;padding-top:-40px;padding-right:200px;"><strong>Date </strong>:......................</div>
<div class="col-md-2"style="text-align:left;"><strong>Bank Account Number </strong>:38713</div><br>

</div>
</div>
<div class="row">
    <h3 style="text-align:center;">Exam Controller's Part/Student's Part/Account Manager's Part/Bank's Part</h3><br>
</div>
    <div class="row">
      <div class="col-md-8 " style="padding-left:120px;">
<div class="col-md-2" style="text-align:left;"><strong>Student Name </strong>:{{Auth::User()->name}}</div><br>
<div class="col-md-2"style="text-align:center;padding-top:-40px;padding-right:10px;"><strong>Session </strong>:{{Auth::User()->academicssn}}</div>
<div class="col-md-2"><strong>Department Name </strong>:{{Auth::User()->department->name}}</div><br>
<div class="col-md-2"><strong>Hall :</strong>..........................</div><br>
<div class="col-md-2"><strong>Roll </strong>:{{Auth::User()->studentid}}</div><br>

</div>
</div>

<br><br>
<div style="padding-left:50px;">
<div style="padding-left:50px;">


  <table class="table" style="border:1px solid;width:80%">

<tr>
      <th style="text-align:center;">Field</th>
      <th>Taka</th>

</tr>


          <tr>
              <td>Admission Fee</td>
              <td></td>
          </tr>
          <tr>

              <td>Credit fee</td>
<td></td>
          </tr>
          <tr>

              <td>Total Credit fee</td>
              <td></td>
          </tr>

          <div class="col-md-3 col-md-offset-9" style="text-align:left;">

              <h3><strong>Total payment :........
          </strong> Tk </h3>
          <h3>Total Payment in Word...................................................</h3></br>
          <h3>Cash Receiption Scroll Number:.................................</h3>
          </div>





  </table>

</div>

<br>
<div style="padding-left:50px;">
  <div class="col-md-2" style=" padding-left:500px;padding-bottom:-100px;">
    <div style="padding-top:50px;">
<p>---------------------</p>
      <strong>Officer's Signature And Seal </strong>
    </div>
  </div>
<div style="padding-bottom:-100px;">
<p>---------------------</p>
<strong>Cashier</strong>
</div>

</div>

 </div>


</div>

</body>

</html>
