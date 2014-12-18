<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie6 ielt7 ielt8 ielt9"><![endif]--><!--[if IE 7 ]><html lang="en" class="ie7 ielt8 ielt9"><![endif]--><!--[if IE 8 ]><html lang="en" class="ie8 ielt9"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>@if(isset($title))Project Management-{{$title}} @else Project Management @endif</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
             
                <link href="Backend/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="{{URL::to('Backend/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{URL::to('Backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
		<link href="{{URL::to('Backend/css/site.css')}}" rel="stylesheet">
                    <!-- jquery-ui Stylesheets -->
                    <link rel="stylesheet" href="{{ URL::to('Backend/assets/jui/css/jquery-ui.css') }}" media="screen">

                        <link rel="stylesheet" href="{{ URL::to('Backend/assets/jui/jquery-ui.custom.css')}}" media="screen">
                            <link rel="stylesheet" href="{{ URL::to('Backend/assets/jui/timepicker/jquery-ui-timepicker.css')}}" media="screen">
                                <!-- Uniform Stylesheet -->
                                <link rel="stylesheet" href="{{URL::to('Backend/assets/css/fonts/icomoon/style.css')}}" media="screen">
                                    <link rel="stylesheet" href="{{ URL::to('Backend/plugins/uniform/css/uniform.default.css')}}" media="screen">
                                        <link rel="stylesheet" href="{{URL::to('Backend/assets/css/main-style.css')}}" media="screen">
                            {{HTML::style('//cdn.datatables.net/1.10.3/css/jquery.dataTables.css')}}
                             
                             
                           <!-- CSS -->
                            {{ HTML::style('Backend/assets/css/dashboard/style.css') }}
                            {{ HTML::style('Backend/assets/css/dashboard/custom.css') }}
                            {{ HTML::style('Backend/assets/css/dashboard/jquery.jscrollpane.css') }}
                            {{ HTML::style('Backend/assets/css/dashboard/sidebar.css') }}
                            {{ HTML::style('Backend/assets/css/notifications/iosOverlay.css') }}
                            {{ HTML::style('Backend/assets/css/dashboard/tooltipster.css') }}
                            
                           <!-- JS -->
                           {{ HTML::script('Backend/assets/js/jquery/jquery-1.9.1.min.js') }}
                           {{ HTML::script('Backend/assets/js/bootstrap/bootstrap.min.js') }}
                           {{ HTML::script('Backend/assets/js/dashboard/underscore.js') }}
                           {{ HTML::script('Backend/assets/js/dashboard/backbone.js') }}
                           {{ HTML::script('Backend/assets/js/jquery/jquery.jscrollpane.min.js') }}
                           {{ HTML::script('Backend/assets/js/jquery/jquery.cookie.min.js') }}
                           {{ HTML::script('Backend/assets/js/jquery/jquery.actual.min.js') }}
                           {{ HTML::script('Backend/assets/js/jquery/jquery.tooltipster.js') }}
                           {{ HTML::script('Backend/assets/js/dashboard/antiscroll.js') }}
                           {{ HTML::script('Backend/assets/js/dashboard/sidebar_common.js') }}
                           {{ HTML::script('Backend/assets/js/notifications/iosOverlay.js') }}
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
                           <style>
                               span.error{
                                   color:red;
                               }
                               form#completed{
                                   float:right;
                               }
                               .completed{
                                   background-color: #ddd;
                               }
                               
                           </style>
                           
	        @yield('css')
                </head>
	<body>
		
			@include('backend.admin.layout.header')
                        
                <section>
                          
                                @yield('content')
                                @include('backend.admin.layout.sidebar')
                                @include('backend.admin.layout.footer')
                                
		</section>	
                         
		
                    
                <!-- Core Scripts -->
                                <script src="{{ URL::to('Backend/assets/js/libs/jquery-1.8.3.min.js')}}"></script>
                                <script src="{{ URL::to('Backend/bootstrap/js/bootstrap.min.js')}}"></script>
                                <script src="{{ URL::to('Backend/assets/js/libs/jquery.placeholder.min.js')}}"></script>
                                <script src="{{ URL::to('Backend/assets/js/libs/jquery.mousewheel.min.js')}}"></script>
                  <!-- Uniform Script -->
                            <script src="{{ URL::to('Backend/plugins/uniform/jquery.uniform.min.js')}}"></script>
                             {{ HTML::style('Backend/plugins/pnotify/jquery.pnotify.css') }}
                     <!-- jquery-ui Scripts -->
                     
		<script src="{{URL::to('Backend/js/jquery.min.js')}}"></script>
		<script src="{{URL::to('Backend/js/bootstrap.min.js')}}"></script>
		<script src="{{URL::to('Backend/js/site.js')}}"></script>
                <script src="{{ URL::to('Backend/plugins/validate/jquery.validate.min.js') }}"></script>
                <script src="{{ URL::to('Backend/plugins/validate/localization/messages_tr.js') }}"></script>
                <!--Pnotitfy -->
                                {{ HTML::script('Backend/plugins/pnotify/jquery.pnotify.min.js') }}
                                <!--     Validation -->
                                <script src="{{ URL::to('Backend/plugins/validate/jquery.validate.min.js') }}"></script>
                                <script src="{{ URL::to('Backend/plugins/validate/localization/messages_tr.js') }}"></script>

                               
                <!-- jquery-ui Scripts -->
                <script src="{{ URL::to('Backend/assets/jui/js/jquery-ui-1.9.2.min.js')}}"></script>
                <script src="{{ URL::to('Backend/assets/jui/jquery-ui.custom.min.js')}}"></script>
                <script src="{{ URL::to('Backend/assets/jui/timepicker/jquery-ui-timepicker.min.js')}}"></script>
                <script src="{{ URL::to('Backend/assets/jui/jquery.ui.touch-punch.min.js')}}"></script>
                
               
                 @if(Session::has('mesaj'))
                                <script type="text/javascript">
                                        $.pnotify.defaults.history = false;
                                        $.pnotify({
                                                    title: '{{Session::get("title")}}',
                                                    text: '{{Session::get("text")}}',
                                                    type: '{{Session::get("type")}}'
                                                    });
                                </script>
                                @endif
                @yield('js')
                {{ HTML::script('js/dashboard/retina.min.js') }}
	</body>
</html>
