

<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
   @include('admin.slidebar')

    @include('admin.header')
    <!-- partial -->
    @include('admin.body')
    <!-- page-body-wrapper ends -->
</div>
@include('admin.script')
</body>
</html>