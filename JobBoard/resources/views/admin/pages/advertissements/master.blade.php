<!---
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 9 CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        
        <h1 class="text-primary mt-3 mb-4 text-center"><b>Nos Offres</b></h1>
        
        @yield('content')
        
    </div>
    
</body>
</html>
---->
<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.template.partials.entete')
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
       @include('admin.template.partials.sidebar')
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
           @include('admin.template.partials.nav')

            <div class="container-fluid px-4">
               @yield('content')
               <!--table-->

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    @include('admin.template.partials.script')
    <script src="https://kit.fontawesome.com/2d1cdb0a29.js" crossorigin="anonymous"></script>
</body>

</html>

