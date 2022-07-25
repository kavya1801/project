var images = ['image/img2.jpeg','image/img6.jpeg','image/img3.jpeg','image/img4.jpeg','image/img5.jpeg'];

var i =0;

function slideShow() {

    document.getElementById("image").src=images[i];



    if(i<images.length-1){

        i++;

    }

    else {

        i=0;

    }

    setTimeout("slideShow()" , 2000);

}

window.onload = slideShow;