<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    
      @include('admin.css')
      @yield('css')
  
</head>

<body>

    @include('admin.sidebar')
    <!-- /# sidebar -->

    @include('admin.header')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                  <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>


               
                @yield('content')

             
                 @include('admin.footer')
                </section>


            </div>
        </div>
    </div>

    <!-- jquery vendor -->
  @include('admin.js')
  @yield('js')
</body>

</html>