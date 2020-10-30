function FirestoreAddNewUser(uName,uPhone,uEmail,uPassword,uIsAdmin,uAddress){
    var ref =db.collection("users").doc("state").collection("pending").doc();
        ref.set({
        name: uName,
        phone: uPhone,
        email:uEmail,
        password:uPassword,
        isAdmin:uIsAdmin,
        address:uAddress,
        id:ref.id
    })
        .then(function() {
            alert("Data successfully Added!");
        })
        .catch(function(error) {
            alert("Error While Adding Data");
        });

}
function FirestoreAddNewDepartment(dName,dHead,dLocation,dPhone){
    var ref =db.collection("departments").doc();
    ref.set({
        name: dName,
        DepartmentHead: dHead,
        Location:dLocation,
        phone:dPhone,
        id:ref.id
    })
        .then(function() {
            alert("Data successfully Added!");
        })
        .catch(function(error) {
            alert("Error While Adding Data");
        });

}

FirestoreAddNewUser("mohamed",123123,"mohamed@yahoo.com",'123123',0,'damanhour');
FirestoreAddNewDepartment('D1','UserId','Damanhour',123123);
