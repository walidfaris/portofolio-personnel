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
               @include('admin.template.partials.container-fluid')

               <!--table-->

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    @include('admin.template.partials.script')
    
</body>

</html>