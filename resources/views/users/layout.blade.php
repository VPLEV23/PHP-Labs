<!DOCTYPE html>
<html>
<head>
    <title>Vlad Bulhakov</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    body{
        font-family: 'Montserrat', sans-serif;
        box-sizing: border-box;
        padding: 3rem;
       
    }
    html{
        font-size: 62.5%;
    }
   .main-title{
        text-align:center;
        font-size: 3.5rem;
    }
    table{
        margin: 0 auto;
    }
    th{
        font-size: 3rem;
        padding: 1rem 2.5rem;
    }
    td{
        text-align:center;
        font-size:1.5rem;
        padding: .5rem 7rem;
    }
    td a:not(:last-child){
        margin-right: 1rem;
        border-right: 1px solid #000;
        padding: 0 13px;
    }
    a{
        color: #000;
        text-decoration: none;  
    }
    a:hover{
       color: blue;
    }
    .inline{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    h3{
        font-weight: 300;
        font-size: 2rem;
        margin-left: 2rem;
    }
    .btn-cr{
        font-size: 3rem;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px solid #000;
        border-radius: 25px;
        background: #333;
        color: #fff;
        text-decoration: none;
        max-width: 420px;
        margin: 0 auto;
    }
    .form__wrap{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .form-row{
        display: flex;
        flex-direction: column;
        max-width: 400px;
        width: 100%;
    }
    .form-row:not(:last-child){
        margin-bottom: 3.5rem;
    }
    input:focus:focus:invalid{
        border-bottom: 3px solid orangered;
    }
    .sbm-btn{
        background: #333;
        border: none;
        border-radius: 35px;
        font-size: 3rem;
        color: #fff;
    }
    strong{
        font-size: 2rem;
    }
    input{
        border: none;
        background: transparent;
        border-bottom: 3px solid #FF6A3D;
        transition: all 0.4s;
        color: #000;
        font-size: 2rem;
        margon-left: 2rem;
}
    input:focus{
        outline: none;
        background: transparent;
        border-bottom: 3px solid green;
        font-size: 2rem;
    }   
    .container {
         width: 100%;

         padding-right: 15px;
         padding-left: 15px;
         margin-right: auto;
         margin-left: auto; }
     @media (min-width: 576px) {
     .container {
      max-width: 540px; } }
     @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
     @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
     @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }
</style>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>