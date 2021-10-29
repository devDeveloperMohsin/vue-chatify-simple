<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>

	<!-- Bootstrap Css -->
	<link href="{{ asset('chat_assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="{{ asset('chat_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="{{ asset('chat_assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="app">
        <chat-app />
    </div>


    <!-- JAVASCRIPT -->
	<script src="{{ asset("chat_assets/libs/simplebar/simplebar.min.js") }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>