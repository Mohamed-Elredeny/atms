@extends('Admin.includes.header')

<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@extends('Admin.includes.topnavbar')
@extends('Admin.includes.mainslider')
<br>

<center>
    <div class="card" style="height: 600px;width: 500px;display: inline-block;margin-top: 20px;text-align: center;padding-top: 20px;padding-bottom: 70px">
        اضافة موظف جديد
        <div class="card-body" >
            <form method="POST" action="{{route('employees.store')}}" enctype="multipart/form-data">
                @csrf
                <table class="table" style="text-align: right;direction: rtl">
                    <tbody>
                    <tr>
                        <th scope="row">اسم الموظف</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="Uname"  id="Uname" style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">رقم الهاتف</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="Uphone" id="Uphone"  style="text-align: right">
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">البريد الإلكتروني</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="Uemail" id="Uemail"  style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">كلمة المرور</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="Upassword" id="Upassword"  style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">المدينة</th>
                        <td>
                            <input class="btn btn-outline-primary" type="text" name="Ucity" id="Ucity"  style="text-align: right">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">مسئول</th>
                        <td>
                            <select class="btn btn-outline-primary" name="UisAdmin" id="UisAdmin" style="text-align: right">
                                <option value="false">لا</option>
                                <option value="true">نعم</option>

                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">الصوره</th>
                        <td>
                            <input type="file" class="form-control-file" id="photo1" onchange="uploadImage()"  class="btn btn-outline-primary" required >
                            <input type="hidden"  name="image" id="img1">
                            <meter class="disk_d"  id="disk_d1"></meter>
                        </td>

                    </tr>

                    </tbody>
                </table>

                <input type="submit" value="اضافة موظف جديد" class="btn btn-primary" name="AddNewCus" >
            </form>
        </div>
    </div>
</center>

</body>


@extends('Admin.includes.footer')

{{--<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>

<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-analytics.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-database.js"></script>--}}

<script>


   /* function Add() {
        var Ucity = document.querySelector("#Ucity").value;
        var Uemail =  document.querySelector("#Uemail").value;
        var Uimage =  document.querySelector("#img1").value;
        var UisAdmin =  document.querySelector("#UisAdmin").value;
        var Uname = document.querySelector("#Uname").value;
        var Upassword = document.querySelector("#Upassword").value;
        var Uphone =  document.querySelector("#Uphone").value;
        var Utype = 'SystemUsers';

        function AddNewUser(Ucity, Uimage, UisAdmin, Uname, Uphone, Uemail, Upassword, Utype) {
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
                    var database = firebase.database();
                    var db = firebase.firestore();


                    firebase.auth().createUserWithEmailAndPassword(Uemail, Upassword).catch(function (error) {
                        // Handle Errors here.
                        var errorCode = error.code;
                        var errorMessage = error.message;
                    });
                    firebase.auth().signInWithEmailAndPassword(Uemail, Upassword).catch(function (error) {
                        // Handle Errors here.
                        var errorCode = error.code;
                        var errorMessage = error.message;
                        // ...
                    });
                    firebase.auth().onAuthStateChanged(function (user) {
                    if (user) {
                        // User is signed in.
                        var displayName = user.displayName;
                        var email = user.email;
                        var emailVerified = user.emailVerified;
                        var photoURL = user.photoURL;
                        var isAnonymous = user.isAnonymous;
                        var uid = user.uid;
                        var providerData = user.providerData;

                        firebase.database().ref(Utype + '/' + uid).set({
                            city: Ucity,
                            email: Uemail,
                            image: Uimage,
                            isAdmin: UisAdmin,
                            name: Uname,
                            password: Upassword,
                            phone: Uphone,
                            userId: uid
                        });
                        db.collection(Utype).doc(uid).set({
                            city: Ucity,
                            email: Uemail,
                            image: Uimage,
                            isAdmin: UisAdmin,
                            name: Uname,
                            password: Upassword,
                            phone: Uphone,
                            userId: uid
                        });
                    }
                });
        }

        AddNewUser(Ucity, Uimage, UisAdmin, Uname, Uphone, Uemail, Upassword, Utype);
    }*/
</script>
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
