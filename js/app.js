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
    const txtPassword = document.getElementById('txtPassword');
    const btnLogin = document.getElementById('btnLogin');
    const btnSignUp = document.getElementById('btnSignUp');
    const btnLogout = document.getElementById('btnLogout');
    const googleLogin = document.getElementById('googleLogin');


    //Add Login Event
    btnLogin.addEventListener('click', e => {
        //Get Email and txtPassword
        const email = txtEmail.value;
        const pass = txtPassword.value;
        const auth = firebase.auth();

        //Sign in  
        const promise = auth.signInWithEmailAndPassword(email, pass);
        promise.catch(e => swal(e.message));


        //After successful login, user will be redirected Homepage
        firebase.auth().onAuthStateChanged(firebaseUser => {
            if (firebaseUser) {
                window.location = '../index.php';
                //firebase.auth().signOut();
            }
        });
    });

    googleLogin.addEventListener('click', e => {
        // Instantiate the Google authentication provider
        var provider = new firebase.auth.GoogleAuthProvider();
        // Handle the authentication request using the Popup method
        firebase.auth().signInWithPopup(provider).then(function(result) {
            var user = result.user;
        }).catch(function(error) {
            console.log(error);
        });
    })

    fbLogin.addEventListener('click', e => {
        var provider = new firebase.auth.FacebookAuthProvider();

        firebase.auth().signInWithPopup(provider).then(function(result) {
            // This gives you a Facebook Access Token. You can use it to access the Facebook API.
            var token = result.credential.accessToken;
            // The signed-in user info.
            var user = result.user;
            // ...
        }).catch(function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // The email of the user's account used.
            var email = error.email;
            // The firebase.auth.AuthCredential type that was used.
            var credential = error.credential;
            swal(errorMessage);
            swal(errorCode);

        });

    })

    btnLogout.addEventListener('click', e => {
        firebase.auth().signOut();
    });

    //Auth state change
    firebase.auth().onAuthStateChanged(firebaseUser => {
        var user = firebase.auth().currentUser;
        if (firebaseUser) {
            btnLogout.classList.remove('hide');
            swal({
                    title: "Welcome " + user.displayName,
                    text: "You have successfully logged in!",
                    type: "success",
                },
                function(isConfirm) {
                    // Redirect the user
                    window.location = '/3490';
                });

        } else {
            console.log('Not Logged In');
            btnLogout.classList.add('hide');
            googleLogin.classList.remove('hide');
        }
    });



}());