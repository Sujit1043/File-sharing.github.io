function upload() {
    //get your select image
    var image=document.getElementById("fname").files[0];
    //now get your image name
    var imageName=image.name;
    //firebase  storage reference
    //it is the path where yyour image will store
    var storageRef=firebase.storage().ref('Files/'+imageName);
    //upload image to selected storage reference

    var uploadTask=storageRef.put(image);

    uploadTask.on('state_changed',function (snapshot) {
        //observe state change events such as progress , pause ,resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
        alert("upload is " + progress +" done");
    },function (error) {
        //handle error here
        alert(error.message);
    },function () {
       //handle successful uploads on complete

        uploadTask.snapshot.ref.getDownloadURL().then(function (downlaodURL) {
            //get your upload image url here...
            alert(downlaodURL);
        });
    });
}