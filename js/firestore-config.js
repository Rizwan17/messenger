// Initialize Firebase
var config = {
	apiKey: "AIzaSyDQdJLluamjJSzzOqiVm-Bujgd20vPYISk",
	authDomain: "my-test-app-91f99.firebaseapp.com",
	databaseURL: "https://my-test-app-91f99.firebaseio.com",
	projectId: "my-test-app-91f99",
	storageBucket: "my-test-app-91f99.appspot.com",
	messagingSenderId: "279160965485"
};

firebase.initializeApp(config);

// Initialize Cloud Firestore through Firebase
var db = firebase.firestore();

// Disable deprecated features
db.settings({
	timestampsInSnapshots: true
});