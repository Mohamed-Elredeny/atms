@extends('Admin.includes.header')

<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@extends('Admin.includes.topnavbar')
@extends('Admin.includes.mainslider')

<!-- Departments -->

    <div class="row">

        <div class="col-sm-12">
            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>

        </div>

    </div>


<!-- End Of Departments -->





@extends('Admin.includes.footer')

<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-storage.js"></script>
<script>

    function uploadImage() {

        var firebaseConfig = {
            apiKey: "AIzaSyBWJjSrvRtiKvbrK-SZA-ganUr2xs4mnWQ",
            authDomain: "swcc-housing.firebaseapp.com",
            databaseURL: "https://swcc-housing.firebaseio.com",
            projectId: "swcc-housing",
            storageBucket: "swcc-housing.appspot.com",
            appId: "1:188937858497:web:779337bcea1da1b3175340"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const ref = firebase.storage().ref("Employees/");
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
