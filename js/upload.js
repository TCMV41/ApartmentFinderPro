(function() {

        // Initialize Firebase
        const config = {
            apiKey: "AIzaSyAY-XIbb4FXlwIhBIo56sJqPPC9hl40QVY",
            authDomain: "test-829cf.firebaseapp.com",
            databaseURL: "https://test-829cf.firebaseio.com",
            storageBucket: "test-829cf.appspot.com",
        };
        firebase.initializeApp(config);

        // Get a reference to the storage service, which is used to create references in your storage bucket
        var storage = firebase.storage();

        var storageRef = firebase.storage().ref();
        var spaceRef = storageRef.child('apartment1/apt1.JPG');
        storageRef.child('apartment1/apt1.JPG').getDownloadURL().then(function(url) {
            var test = url;
            document.querySelector('img').src = test;

        }).catch(function(error) {

        });

    }
    ());