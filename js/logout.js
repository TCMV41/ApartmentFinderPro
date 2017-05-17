(function() {

    // Initialize Firebase
    const config = {
        apiKey: "AIzaSyAY-XIbb4FXlwIhBIo56sJqPPC9hl40QVY",
        authDomain: "test-829cf.firebaseapp.com",
        databaseURL: "https://test-829cf.firebaseio.com",
        storageBucket: "test-829cf.appspot.com",
    };
    firebase.initializeApp(config);

    const btnLogout = document.getElementById('btnLogout');
    const reg = document.getElementById('reg');
    const txtName = document.getElementById('txtName');

    btnLogout.addEventListener('click', e => {
        firebase.auth().signOut();
    });


    firebase.auth().onAuthStateChanged(firebaseUser => {
        var user = firebase.auth().currentUser;

        // user.updateProfile({
        //     displayName: "AJARC Systems Innovators"
        // });

        // if (user != null) {
        //     user.providerData.forEach(function(profile) {
        //         console.log("  Sign-in provider: " + profile.providerId);
        //         console.log("  Name: " + profile.displayName);
        //         console.log("  Email: " + profile.email);
        //         // console.log("  Photo URL: " + profile.photoURL);
        //     });
        // }

        if (firebaseUser) {
            var profile = firebase.auth().currentUser;
            console.log("  Sign-in provider: " + profile.providerId);
            console.log("  Name: " + profile.displayName);
            console.log("  Email: " + profile.email);
        }


        if (firebaseUser) {
            console.log(user.displayName + " HELLO");
            btnLogout.classList.remove('hide');
            reg.classList.add('hide');
        } else {


            btnLogout.classList.add('hide');
            swal({
                    title: "Authentication Issue",
                    text: "You are not logged in, Please do so now!",
                    type: "warning",

                },

                // Redirect the user
                function(isConfirm) {
                    window.location.href = '/3490/libs/login.php';

                });

        }
    });


}());