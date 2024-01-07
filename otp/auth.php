
<style>
    .scrollstop{
        width: 100%;
        height: 100%;
        overflow: hidden;
    }
    .container-otp{
        width: 400px;
        margin: 200px auto;
        /* height: 100vh;
        margin: 200px auto;
        background-color: #ccc; */

    }
    .rows{
        position: relative;
        text-align: center;
        height: 220px;
        margin: 40px auto;
        padding:15px;
        box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.4);
        background-color: #fff;
    }
    .rows input{
        width: 50%;
        padding: 10px;
    }
    .rows button{
        display: block;
        width: 30%;
        margin: 20px auto;
        padding: 10px;
        color: #fff;
        background: orangered;
        border: none;
        cursor: pointer;
    }
    ::placeholder{
        font-weight: bold;
    }
    /* input{
       width: 50%; 
       margin: 20px 0 0 100px;
       padding: 10px;
       border: 2px solid blue;
    } */
    p.verify-text{
        width: 80%;
        margin: 10px auto;
        color: #f00;
        font-weight: bold;
    }
    @media only screen and (min-width: 768px) {
        .container-otp{
            width: 500px;
        }
    }
    @media only screen and (min-width: 1200px) {
        .container-otp{
            width: 500px;
            box-sizing: border-box;
        }
        p.verify-text{
            width: 80%;
            font-size: 16px;
            margin: 10px auto;
            color: #f00;
            font-weight: bold;
        }

    }
    .spinner-background{
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(0,0,0,0);
        background-color: rgba(0,0,0,0.5);     
    }
    
    .text-center{
       margin-top: 200px;;
    }
</style>

<div class="container-otp">
    <div class="rows">
        <p class="verify-text">OTP code has been sent to your email for login verification(code last for 10min)</p>
        <form action="" method="post" autocomplete="off">
            <input type="hidden" id="userInput">
            <input type="password" name="otp_password" placeholder="Enter 6 digits OTP code" id="otp" class="form-control form-control-sm w-50 mx-auto" onkeydown="limit(this)" onkeyup="limit(this)" onkeypress="return (event.charCode !=8 && event.charCode ==0 ||(event.charCode == 46 ||(event.charCode >=48 && event.charCode <=57)))">
            <span id="otp_er" class="text-danger d-block"></span>
            <button type="submit" id="submit-otp" class="btn btn btn-primary w-50 my-3 mx-auto " onclick="">Login</button>
        </form>
        <div class="spinner-background">
            <div class="text-center" id="spiner" style="color:red;">
                <div class="spinner-border" role="status">
                    <span class="sr-only"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function limit(element) {
        var num_limit = 6;
        if(element.value.length > num_limit){
            element.value = element.value.substr(0, num_limit);
        }
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="./js//ajax.js"></script> -->

<script>
    // window.onscroll = function(){
    //     stopscrolling();
    // }

    // function stopscrolling(){
    //     document.body.classList.add('scrollstop');
    // }
</script>


