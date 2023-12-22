@auth
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

    <style type="text/css">
        .title_deg
        {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }

        .table_deg
        {
            border: 2px solid white ;
            width: 100%;
            margin: auto;
            text-align: center;

        }

        .th_deg
        {
            background-color: skyblue;
        }

        th
        {
            padding: 10px;
        }
        img{
            height: 50px;
        }
    </style>
  </head>
  <body>
  
    <div class="container-scroller">
         <!-- partial:partials/_sidebar.html -->
         @include('admin.sidebar')
                <!-- partial -->
                <!-- partial:partials/_navbar.html -->
                    @include('admin.header_fiance')
                    <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


                
               
    

                <table class="table_deg">
                    <tr class="th_deg">
                        <th>ID</th>
                        <th>Type</th>
                        <th>Full Name</th>
                        <th>Second Name</th>
                        <th>Birthday</th>
                        <th>Description</th>
                        <th>Photo</th>
                   
                    </tr>

                    @forelse($fiances as $fiance)
                    <tr>
                        <td>{{$fiance->id}}</td>
                        <td>{{$fiance->type}}</td>
                        <td>{{$fiance->full_name}}</td>
                        <td>{{$fiance->second_name}}</td>
                        <td>{{$fiance->birthday}}</td>
                        <td>{{$fiance->description}}</td>
                        <td class="img-td"><img src="{{ asset('storage/'. $fiance->photo) }}" alt=""></td>
                    
                    </tr>
                    @empty
                    <tr>
                        <td colspan="16">
                            No Data Found
                        </td>
                    </tr>
                    @endforelse
                </table>

            </div>
        </div>
        </div>
        </div>
    </div>
<!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
@endauth