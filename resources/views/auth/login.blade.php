<link rel="stylesheet" href="assets/css/login.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
<script type="text/javascript"> 
        function callbackThen(response){
            // read HTTP status
            console.log(response.status);
            
            // read Promise object
            response.json().then(function(data){
                console.log(data);
            });
        }
        function callbackCatch(error){
            console.error('Error:', error)
        }   
</script>
{!! htmlScriptTagJsApi([ 'callback_then' => 'callbackThen', 'callback_catch' => 'callbackCatch' ]) !!}

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <!-- The video -->
        <video autoplay muted loop id="myVideo">
            <source src="/assets/imgs/lugares/login.mp4" type="video/mp4">
        </video>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div>
            <div class='box'>
                <div class='box-form'>
                    <div class='box-login-tab'></div>
                    <div class='box-login-title'>
                        <div class='i i-login'></div>
                        <h2>Iniciar sesión</h2>
                    </div>
                    <div class='box-login'>
                        <form method="POST" action="{{ route('login') }}" class='fieldset-body' id='login_form'>
                            @csrf
                            <p class='field'>
                                <!-- Email Address -->
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="user" class="block mt-1 w-full" autocomplete="off" type="text" title="Username" name="email" :value="old('email')" required autofocus />
                                <span id='valida' class='i i-warning'></span>
                            </p>

                            <!-- Password -->
                            <p class='field'>
                                <x-label for="password" :value="__('Contraseña')" />

                                <input id="pass" class="block mt-1 w-full" title="Password" type="password" name="password" required autocomplete="current-password" />
                                <span id='valida' class='i i-close'></span>
                            </p>
                            <!-- Remember Me -->
                            <label class='checkbox'>
                                <input type='checkbox' value='TRUE' title='Remember me' /> Mantener la sesión iniciada
                            </label>
                            <label class='create'>
                                <a href="/register" title='Sign up now!'> Crear una cuenta</a>
                            </label>
                            <x-button class="ml-3" id='do_login' value='SIGN IN' title='Get Started'>
                                {{ __('SIGN IN') }}
                            </x-button>
                        </form>
                    </div>
                </div>
    </x-auth-card>
</x-guest-layout>

<script type="text/javascript">
    $(document).ready(function() {
    $("#do_login").click(function() { 
       closeLoginInfo();
       $(this).parent().find('span').css("display","none");
       $(this).parent().find('span').removeClass("i-save");
       $(this).parent().find('span').removeClass("i-warning");
       $(this).parent().find('span').removeClass("i-close");
       
        var proceed = true;
        $("#login_form input").each(function(){
            
            if(!$.trim($(this).val())){
                $(this).parent().find('span').addClass("i-warning");
            	$(this).parent().find('span').css("display","block");  
                proceed = false;
            }
        });
       
        if(proceed) //everything looks good! proceed...
        {
            $(this).parent().find('span').addClass("i-save");
            $(this).parent().find('span').css("display","block");
        }
    });
    
    //reset previously results and hide all message on .keyup()
    $("#login_form input").keyup(function() { 
        $(this).parent().find('span').css("display","none");
    });
 
  openLoginInfo();
  setTimeout(closeLoginInfo, 1000);
});

function openLoginInfo() {
    $(document).ready(function(){ 
    	$('.b-form').css("opacity","0.01");
      $('.box-form').css("left","-37%");
      $('.box-info').css("right","-37%");
    });
}

function closeLoginInfo() {
    $(document).ready(function(){ 
    	$('.b-form').css("opacity","1");
    	$('.box-form').css("left","0px");
      $('.box-info').css("right","-5px"); 
    });
}

$(window).on('resize', function(){
      closeLoginInfo();
});
</script>