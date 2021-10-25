
@extends('base')

@section('content')

<style>
    body, html {
  height: 100%;
}

* {
  box-sizing:
}


/* Position text in the middle of the page/image */
.bg-text {
  color: dark;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 50%;
  padding: 20px;
  text-align: center;
}
</style>

<div class="bg-text">
    <h1>Get Vaccinated</h1>
    <p>Click here to <a class="text-blue" href="/register">register!</a></p>
  </div>