@extends('Admin.includes.header')

<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">

@extends('Admin.includes.topnavbar')


@extends('Admin.includes.mainslider')

<div class="app-content content" style="overflow: scroll">
    <div class="content-wrapper">
        <div class="content-body" >
             @if(@count($users) > 0 )

            <table class="table table-sm" style="text-align: left;direction: ltr;"  >

                <tr >
                    <td>
                        <center>
                            {{ __('cpanel.services_search') }}
                        </center>
                    </td>
                    <td >
                        <input type="text" class="btn btn-outline-primary" id="myInput" placeholder="بحث ">
                    </td>
                </tr>
            </table>
            <table class="table table-sm " style="text-align: center;direction: ltr;font-size: 13.5px;" id="myTable">
                <thead>
                <tr >
                    @csrf
                  <th scope="col">حذف</th>
                  <th scope="col">تعديل </th>
                   <th scope="col">مسئول</th>
                  <th scope="col">الباسورد</th>
                  <th scope="col">الايميل</th>
                  <th scope="col">الهاتف</th>
                  <th scope="col">مدينة</th>
                  <th scope="col">الاسم</th>
                   <th scope="col">الصوره</th>
                  <th scope="col">الرقم</th>

                </tr>
                </thead>
                <tbody>
                <?php
                    $i=1;
                ?>


        @foreach($users as $s)
                    <tr class="categories">
                        <td><input type="button" class="btn btn-danger" value="Delete"></td>
                        <td><input type="button" class="btn btn-blue" value="Modify"></td>
                        <td>{{$s['isAdmin']}}</td>
                        <td>{{$s['password']}}</td>
                        <td>{{$s['email']}}</td>
                        <td>{{$s['phone']}}</td>
                        <td>{{$s['city']}}</td>
                        <td>{{$s['name']}}</td>
                        <td><img src="{{$s['image']}}" style="height: 100px;width: 100px;"></td>
                        <td>{{$s['userId']}}</td>
                        <?php
                        $i++;
                        ?>
                    </tr>
        @endforeach



                </tbody>

            </table>
              @else
                    <center><h3>لا يوجد عملاء بعد !!</h3></center>
               @endif
            <br>
        </div>
    </div>
</div>

</body>


@extends('Admin.includes.footer')








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script>

    $(document).on('click','.deletebtn',function (e) {
        e.preventDefault();
        var category_id = $(this).attr('categoryid');


        $.ajax({
            type:'post',
            url:"",
            data:{
                '_token':"{{csrf_token()}}",
                'id':category_id
            },success: function (data) {
                if(data.status == true){
                    $('#success_msg').show();
                }
                $('.categories'+data.id).remove();
            },error: function (reject) {

            }

        });

    });


    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });





</script>
