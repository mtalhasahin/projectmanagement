<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{URL::to('Backend/bootstrap/css/bootstrap.min.css')}}" media="screen">

        <!-- Uniform Stylesheet -->
        <link rel="stylesheet" href="{{URL::to('Backend/plugins/uniform/css/uniform.default.css')}}" media="screen">

            <!-- Plugin Stylsheets first to ease overrides -->

            <!-- End Plugin Stylesheets -->

            <!-- Main Layout Stylesheet -->
            <link rel="stylesheet" href="{{URL::to('Backend/assets/css/fonts/icomoon/style.css')}}" media="screen">
                <link rel="stylesheet" href="{{URL::to('Backend/assets/css/login.css')}}" media="screen">
                    <link rel="stylesheet" href="{{URL::to('Backend/plugins/zocial/zocial.css')}}" media="screen">
                        {{HTML::style('Backend/plugins/pnotify/jquery.pnotify.css')}}
                        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
                        <!--[if lt IE 9]>
                        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                        <![endif]-->
              
                        <title>Project Management Login Ekranı</title>

                        </head>

                        <body>


                        <div id="login-wrap">

                            <div id="login-ribbon"><i class="icon-lock"></i></div>

                            <div id="login-buttons">
                                <div class="btn-wrap">
                                    <button type="button" class="btn btn-inverse" data-target="#login-form"><i class="icon-key"></i></button>
                                </div>
                                
                                <div class="btn-wrap">
                                    <button type="button" class="btn btn-inverse" data-target="#forget-form"><i class="icon-question-sign"></i></button>
                                </div>
                            </div>

                            <div id="login-inner" class="login-inset">

                                <div id="login-circle">
                                    <section id="login-form" class="login-inner-form" data-angle="0">
                                        <h1>Giriş</h1>
                                        <form class="form-vertical" action="{{URL::to('loginpost')}}" method="post">
                                            <div class="control-group-merged">
                                                <div class="control-group">
                                                    <input type="text" placeholder="E-posta Adresiniz.." name="email" id="input-username" class="big required">
                                                </div>
                                                <div class="control-group">
                                                    <input type="password" placeholder="Şifrenizi giriniz.." name="password" id="input-password" class="big required">
                                                </div>
                                                <br>
                                                <div class="control-group">
                                                   <p class="cpt">
                                                       {{HTML::image(Captcha::img(),'Güvenlik Resmi')}}
                                                   </p>
                                                </div>
                                                <div class="control-group">
                                                    {{Form::text('captcha','',['class'=>'big required','placeholder'=>'Güvenlik Doğrulaması','id'=>'input-captcha'])}}
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="checkbox">
                                                    <input type="checkbox" name="remember" class="uniform"> Beni Hatırla
                                                </label>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-success btn-block btn-large">Giriş</button>
                                            </div>
                                           {{Form::token()}}
                                        </form>
                                    </section>
                                   
                                    <section id="forget-form" class="login-inner-form" data-angle="180">
                                        <h1>Şifreyi Sıfırla</h1>
                                        <form class="form-vertical" action="">
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="email" name="email" class="big required email" placeholder="E-posta Adresiniz..">
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-danger btn-block btn-large">Sıfırla</button>
                                            </div>
                                            {{Form::token()}}
                                        </form>
                                    </section>
                                </div>

                            </div>

                            <!-- <div id="login-social" class="login-inset">
                                <button class="zocial facebook">Connect with Facebook</button>
                                <button class="zocial twitter">Connect with Twitter</button>
                            </div> -->
                        </div>

                        <!-- Core Scripts -->
                        <script src="{{URL::to('Backend/assets/js/libs/jquery-1.8.3.min.js')}}"></script>
                        <script src="{{URL::to('Backend/assets/js/libs/jquery.placeholder.min.js')}}"></script>

                        <!-- Login Script -->
                        <script src="{{URL::to('Backend/assets/js/login.js')}}"></script>

                        <!-- Validation -->
                        <script src="{{URL::to('Backend/plugins/validate/jquery.validate.min.js')}}"></script>
                        <script src="{{URL::to('Backend/plugins/validate/localization/messages_tr.js')}}"></script>

                        <!-- Uniform Script -->
                        <script src="{{URL::to('Backend/plugins/uniform/jquery.uniform.min.js')}}"></script>
                        <!-- Pnotify Script -->
                        {{HTML::script('Backend/plugins/pnotify/jquery.pnotify.min.js')}}
                         
                        @if(Session::has('mesaj'))
                        <script type="text/javascript">
                        $.pnotify.defaults.history = false;
                            $.pnotify({
                                 title: '{{Session::get("title")}}',
                                 text:  '{{Session::get("text")}}',
                                 type:  '{{Session::get("type")}}'
                                    });
                        </script>
                        @endif

                        </body>

                        </html>
