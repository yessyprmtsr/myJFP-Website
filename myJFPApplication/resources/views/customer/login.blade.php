@extends('customer.template.layout')
@section('content')
<div class="wrapper">
    <div class="title-text">
        <div class="title login">LogIn / SignUp</div>
        <!-- <div class="title signup">Welcom! SignUp</div> -->
    </div>
    <div class="form-container">
        <div class="slide-controls">
            <input type="radio" name="slider" id="login" checked>
            <input type="radio" name="slider" id="signup" checked>
            <label for="login" class="slide login">LogIn</label>
            <label for="signup" class="slide signup">SignUp</label>
            <div class="slide-tab">

            </div>
        </div>
        <div class="form-inner">
            <form action="#" class="login">
                <div class="field">
                    <input type="text" placeholder="email address / phone" required>
                </div>
                <div class="field">
                    <input type="password" placeholder="password" required>
                </div>
                <div class="pass-link"><a href="#">Forget password?</a></div>
                <div class="field">
                    <input type="submit" value="LogIn">
                </div>
                <div class="signup-link">Not a Member yet? <a href="#">SignUp now</a></div>
            </form>
            <form action="#" class="signup">
                <div class="field">
                    <input type="text" placeholder="email address / phone" required>
                </div>
                <div class="field">
                    <input type="password" placeholder="password" required>
                </div>
                <div class="field">
                    <input type="password" placeholder="confirm password" required>
                </div>
                <div class="field">
                    <input type="submit" value="SignUp">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    const loginForm = document.querySelector("form.login");
    const signupForm = document.querySelector("form.signup");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector(".signup-link a");
    signupBtn.onclick = (() => {
        loginForm.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (() => {
        loginForm.style.marginLeft = "0%";
    });
    signupLink.onclick = (()=>{
        signupBtn.onclick();
        return false;
    });
</script> 
@endsection