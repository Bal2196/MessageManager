<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Message Manager')</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="sticky-header">
	<a href="/"><h1>Message Manager</h1></a>
	<a href="/admin">Admin Login</a>
</div>
<div class="content">
@yield('content')
</div>
</body>
</html>