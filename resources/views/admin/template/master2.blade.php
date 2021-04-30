<!DOCTYPE html>
<html lang="en">
<head>
 @include('admin.template.partials.upper-links')
</head>
<body>

<!-- PRELOADER -->
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="/akuns" class="nav-link active">Accounts</a></li>
        </ul>
    </header>
</div>

@yield('main-content')

@include('admin.template.partials.lower-links')
</body>
</html>
