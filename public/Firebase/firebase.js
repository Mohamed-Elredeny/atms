var firebaseConfig = {
    apiKey: "AIzaSyByWh7V3_vXzs_Dcuj0_6qJjv7JTQbiFNo",
    authDomain: "atmssystem-c910d.firebaseapp.com",
    databaseURL: "https://atmssystem-c910d.firebaseio.com",
    projectId: "atmssystem-c910d",
    storageBucket: "atmssystem-c910d.appspot.com",
    messagingSenderId: "686408548705",
    appId: "1:686408548705:web:92dcb5e67996daaddd8520"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
var database = firebase.database();
var db = firebase.firestore();

//Real Time
function RealTimeAdd(userId, name, email, imageUrl) {
    firebase.database().ref('users/' + userId).set({
        username: name,
        email: email,
        profile_picture : imageUrl
    });
}
function RealTimeRemove(userId, name, email, imageUrl) {
    firebase.database().ref('users/' + userId).remove();
}
//FireStore
function FirestoreAdd(){
    db.collection("cities").doc("LA").set({
        name: "Los Angeles",
        state: "CA",
        country: "USA"
    })
        .then(function() {
            alert("Data successfully Added!");
        })
        .catch(function(error) {
            alert("Error While Adding Data");
        });

}
function FirestoreRemove(){
    db.collection("cities").doc("LA").delete();
}

