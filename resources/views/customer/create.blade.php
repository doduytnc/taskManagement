<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<body>
<style type="text/css">
    .form-style-6{
        font: 95% Arial, Helvetica, sans-serif;
        max-width: 400px;
        margin: 10px auto;
        padding: 16px;
        background: #F7F7F7;
    }
    .form-style-6 h1{
        background: #1d96b2;
        padding: 20px 0;
        font-size: 140%;
        font-weight: 300;
        text-align: center;
        color: #fff;
        margin: -16px -16px 16px -16px;
    }
    .form-style-6 input[type="text"],
    .form-style-6 input[type="date"],
    .form-style-6 input[type="datetime"],
    .form-style-6 input[type="email"],
    .form-style-6 input[type="number"],
    .form-style-6 input[type="search"],
    .form-style-6 input[type="time"],
    .form-style-6 input[type="url"],
    .form-style-6 textarea,
    .form-style-6 select
    {
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 100%;
        background: #fff;
        margin-bottom: 4%;
        border: 1px solid #ccc;
        padding: 3%;
        color: #555;
        font: 95% Arial, Helvetica, sans-serif;
    }
    .form-style-6 input[type="text"]:focus,
    .form-style-6 input[type="date"]:focus,
    .form-style-6 input[type="datetime"]:focus,
    .form-style-6 input[type="email"]:focus,
    .form-style-6 input[type="number"]:focus,
    .form-style-6 input[type="search"]:focus,
    .form-style-6 input[type="time"]:focus,
    .form-style-6 input[type="url"]:focus,
    .form-style-6 textarea:focus,
    .form-style-6 select:focus
    {
        box-shadow: 0 0 5px #42BEDB;
        padding: 3%;
        border: 1px solid #43D1AF;
    }

    .form-style-6 input[type="submit"],
    .form-style-6 input[type="button"]{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        width: 100%;
        padding: 3%;
        background: #1d96b2;
        border-bottom: 2px solid #42BEDB;
        border-top-style: none;
        border-right-style: none;
        border-left-style: none;
        color: #fff;
        font-size: 20px;
    }
    .form-style-6 input[type="submit"]:hover,
    .form-style-6 input[type="button"]:hover{
        background: #42BEDB;
    }
</style>

<div class="form-style-6">
    <h1>Add a new customer</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{route('store')}}">
        @csrf
        <input type="text" name="name" placeholder="Your Name" />
        <input type="text" name="phone" placeholder="Mobile phone number" />
        <input type="email" name="email" placeholder="Email Address" />

        <input type="submit" value="Confirm" />
    </form>
</div>
</body>
</html>