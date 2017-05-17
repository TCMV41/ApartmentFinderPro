(function() {

    // Initialize Firebase
    const config = {
        apiKey: "AIzaSyAY-XIbb4FXlwIhBIo56sJqPPC9hl40QVY",
        authDomain: "test-829cf.firebaseapp.com",
        databaseURL: "https://test-829cf.firebaseio.com",
        storageBucket: "test-829cf.appspot.com",
    };
    firebase.initializeApp(config);

    //Get elements
    const txtEmail = document.getElementById('txtEmail');
    const txtName = document.getElementById('txtName');
    const txtPassword = document.getElementById('txtPassword');
    const btnSignUp = document.getElementById('btnSignUp');
    const btnLogout = document.getElementById('btnLogout');

    //Add signup event
    btnSignUp.addEventListener('click', e => {
        //Get Email and txtPassword
        const email = txtEmail.value;
        const pass = txtPassword.value;
        const auth = firebase.auth();
        const name = txtName.value;

        //Sign up 
        // const promise = auth.createUserWithEmailAndPassword(email, pass);
        // promise.catch(e => alert(e.message));
        firebase.auth().createUserWithEmailAndPassword(email, pass).then(function(user) {
            user.updateProfile({
                displayName: name
            }).then(function() {
                // Update successful.
            }, function(error) {
                // An error happened.
            });

            user.sendEmailVerification().then(function() {
                console.log("Verifiication email sent!");
                window.location = '/3490';
            }, function(error) {
                // An error happened.
            });

        }, function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            swal({
                title: "Error Encountered!",
                text: errorMessage,
                type: "error",
            })

        });
    });

    btnLogout.addEventListener('click', e => {
        firebase.auth().signOut();
    });

    //Adding a real time signup listener
    firebase.auth().onAuthStateChanged(firebaseUser => {

        if (firebaseUser) {
            btnLogout.classList.remove('hide');
            swal({
                    title: "Welcome, Succesfully Registered",
                    text: "Verifiication email sent!",
                    type: "success"

                },
                function(isConfirm) {
                    // Redirect the user
                    window.location = '/3490';
                });
            // console.log(firebaseUser.displayName);
        } else {
            console.log('Not Logged In');
            btnLogout.classList.add('hide');
        }
    });

}());