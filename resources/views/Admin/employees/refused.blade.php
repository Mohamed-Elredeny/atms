@extends('Admin.includes.header')

<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@extends('Admin.includes.topnavbar')
@extends('Admin.includes.mainslider')
<br>


<div style="width: 1000px;text-align: left;direction: ltr;position:relative;right: 250px">
    <center>
        <h3>Refused Employees</h3>
    </center>

    @if(@count($pending) > 0 )
        @foreach ($pending as $pend)
            <form action="{{route('employees.filter')}}" method="head" style="display: inline-block">
                <div class="card" style="height: auto;width: 300px;display: inline-block">
                    <br>
                    <center>{{$pend['name']}}</center>
                    <div class="card-body">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{$pend['img']}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$pend['name']}}</h5>
                                <table>
                                    <tr>
                                        <td>
                                            Age:
                                        </td>
                                        <td>
                                            {{$pend['age']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            City:
                                        </td>
                                        <td>
                                            {{$pend['city']}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Address:
                                        </td>
                                        <td>
                                            {{$pend['address']}}
                                        </td>
                                    </tr>
                                </table>
                                <p class="card-text">
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                    Some quick example text to build on the card title and make up the bulk of the card's content.
                                </p>
                            </div>

                            <ul class="list-group list-group-flush">
                                <input type="text" required name="message">
                            </ul>
                            <div class="card-body">
                                <input type="hidden" name="name" value="{{$pend['name']}}">
                                <input type="hidden" name="age" value="{{$pend['age']}}">
                                <input type="hidden" name="address" value="{{$pend['address']}}">
                                <input type="hidden" name="city" value="{{$pend['city']}}">
                                <input type="hidden" name="available" value="{{$pend['available']}}">
                                <input type="hidden" name="id" value="{{$pend['id']}}">
                                <input type="hidden" name="img" value="{{$pend['img']}}">
                                <input type="hidden" name="salary" value="{{$pend['salary']}}">
                                <input type="hidden" name="status" value="{{$pend['status']}}">
                                <input type="hidden" name="category" value="{{$pend['category']}}">

                                <center>
                                    <input type="submit" class="card-link btn btn-danger" name="filter" value="Refuse">
                                    <input type="submit" class="card-link btn btn-dark" name="filter" value="Accept">

                                </center>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @endforeach
    @else
        <center><h3>There is no Refused employees</h3></center>
    @endif


</div>













</body>


@extends('Admin.includes.footer')

<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>

<script>


    var firebaseConfig = {
        apiKey: "AIzaSyCumWJ-TGO8bFrpIvJmXc9U5ITxFZW81Pg",
        authDomain: "dashboard-4ec1a.firebaseapp.com",
        databaseURL: "https://dashboard-4ec1a.firebaseio.com",
        projectId: "dashboard-4ec1a",
        storageBucket: "dashboard-4ec1a.appspot.com",
        appId: "1:416589849085:web:e1932700fcdb03355c7994",
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);


    function uploadImage() {
        const ref = firebase.storage().ref('/Employees');
        const file = document.querySelector("#photo1").files[0];
        const name = +new Date() + "-" + file.name;
        const metadata = {
            contentType: file.type
        };
        const task = ref.child(name).put(file, metadata);
        task
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url => {
                console.log(url);
                document.querySelector("#img1").value = url;
                document.querySelector("#disk_d1").value = 1;
            })
            .catch(console.error);
    }

</script>
