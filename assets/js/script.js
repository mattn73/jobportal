/**
 * Secure Hash Algorithm (SHA1)
 * http://www.webtoolkit.info/
 **/
function SHA1(msg) {
    function rotate_left(n, s) {
        var t4 = ( n << s ) | (n >>> (32 - s));
        return t4;
    };
    function lsb_hex(val) {
        var str = '';
        var i;
        var vh;
        var vl;
        for (i = 0; i <= 6; i += 2) {
            vh = (val >>> (i * 4 + 4)) & 0x0f;
            vl = (val >>> (i * 4)) & 0x0f;
            str += vh.toString(16) + vl.toString(16);
        }
        return str;
    };
    function cvt_hex(val) {
        var str = '';
        var i;
        var v;
        for (i = 7; i >= 0; i--) {
            v = (val >>> (i * 4)) & 0x0f;
            str += v.toString(16);
        }
        return str;
    };
    function Utf8Encode(string) {
        string = string.replace(/\r\n/g, '\n');
        var utftext = '';
        for (var n = 0; n < string.length; n++) {
            var c = string.charCodeAt(n);
            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if ((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }
        }
        return utftext;
    };
    var blockstart;
    var i, j;
    var W = new Array(80);
    var H0 = 0x67452301;
    var H1 = 0xEFCDAB89;
    var H2 = 0x98BADCFE;
    var H3 = 0x10325476;
    var H4 = 0xC3D2E1F0;
    var A, B, C, D, E;
    var temp;
    msg = Utf8Encode(msg);
    var msg_len = msg.length;
    var word_array = new Array();
    for (i = 0; i < msg_len - 3; i += 4) {
        j = msg.charCodeAt(i) << 24 | msg.charCodeAt(i + 1) << 16 |
            msg.charCodeAt(i + 2) << 8 | msg.charCodeAt(i + 3);
        word_array.push(j);
    }
    switch (msg_len % 4) {
        case 0:
            i = 0x080000000;
            break;
        case 1:
            i = msg.charCodeAt(msg_len - 1) << 24 | 0x0800000;
            break;
        case 2:
            i = msg.charCodeAt(msg_len - 2) << 24 | msg.charCodeAt(msg_len - 1) << 16 | 0x08000;
            break;
        case 3:
            i = msg.charCodeAt(msg_len - 3) << 24 | msg.charCodeAt(msg_len - 2) << 16 | msg.charCodeAt(msg_len - 1) << 8 | 0x80;
            break;
    }
    word_array.push(i);
    while ((word_array.length % 16) != 14) word_array.push(0);
    word_array.push(msg_len >>> 29);
    word_array.push((msg_len << 3) & 0x0ffffffff);
    for (blockstart = 0; blockstart < word_array.length; blockstart += 16) {
        for (i = 0; i < 16; i++) W[i] = word_array[blockstart + i];
        for (i = 16; i <= 79; i++) W[i] = rotate_left(W[i - 3] ^ W[i - 8] ^ W[i - 14] ^ W[i - 16], 1);
        A = H0;
        B = H1;
        C = H2;
        D = H3;
        E = H4;
        for (i = 0; i <= 19; i++) {
            temp = (rotate_left(A, 5) + ((B & C) | (~B & D)) + E + W[i] + 0x5A827999) & 0x0ffffffff;
            E = D;
            D = C;
            C = rotate_left(B, 30);
            B = A;
            A = temp;
        }
        for (i = 20; i <= 39; i++) {
            temp = (rotate_left(A, 5) + (B ^ C ^ D) + E + W[i] + 0x6ED9EBA1) & 0x0ffffffff;
            E = D;
            D = C;
            C = rotate_left(B, 30);
            B = A;
            A = temp;
        }
        for (i = 40; i <= 59; i++) {
            temp = (rotate_left(A, 5) + ((B & C) | (B & D) | (C & D)) + E + W[i] + 0x8F1BBCDC) & 0x0ffffffff;
            E = D;
            D = C;
            C = rotate_left(B, 30);
            B = A;
            A = temp;
        }
        for (i = 60; i <= 79; i++) {
            temp = (rotate_left(A, 5) + (B ^ C ^ D) + E + W[i] + 0xCA62C1D6) & 0x0ffffffff;
            E = D;
            D = C;
            C = rotate_left(B, 30);
            B = A;
            A = temp;
        }
        H0 = (H0 + A) & 0x0ffffffff;
        H1 = (H1 + B) & 0x0ffffffff;
        H2 = (H2 + C) & 0x0ffffffff;
        H3 = (H3 + D) & 0x0ffffffff;
        H4 = (H4 + E) & 0x0ffffffff;
    }
    var temp = cvt_hex(H0) + cvt_hex(H1) + cvt_hex(H2) + cvt_hex(H3) + cvt_hex(H4);

    return temp.toLowerCase();
}


$('.hamburger').click(function () {
    $(this).toggleClass('responsive');
});


function addActive(id) {


    $("ul.components li").removeClass('active');

    $(id).parent().addClass("active");

    setTimeout(closeSidebar, 300);


}

function closeSidebar() {


    $('#sidebar').removeClass('active');
    $('.overlay').removeClass('active');


}

function updateProgress() {

    var bar = new ProgressBar.Circle(progress, {
        color: '#aaa',
        // This has to be the same size as the maximum width to
        // prevent clipping
        strokeWidth: 6,
        trailWidth: 0.2,
        easing: 'easeInOut',
        duration: 1400,
        text: {
            autoStyleContainer: false
        },
        from: {color: '#32a537', width: 2},
        to: {color: '#32a537', width: 6},
        // Set default step function for all animate calls
        step: function (state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);
            circle.path.setAttribute('fill-opacity', 0.7);

            var value = Math.round(circle.value() * 100);
            if (value === 0) {
                circle.setText('');
            } else {
                value = value + '%';
                circle.setText(value);
            }

        }
    });
    bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
    bar.text.style.fontSize = '2rem';

    bar.animate(0.8);

}


function clearSignup() {

    $('#signupUname').clearable();
    $('#signupEmail').clearable();
    $('#signupPsw').clearable();
    $('#signupPsw-repeat').clearable();
}

/***database Function and configuration */

var config = {
    apiKey: "AIzaSyDU7fpi6b6XoFgRZQQeGlj1IKoCtiv_oxU",
    authDomain: "kardia-529a2.firebaseapp.com",
    databaseURL: "https://kardia-529a2.firebaseio.com",
    projectId: "kardia-529a2",
    storageBucket: "kardia-529a2.appspot.com",
    messagingSenderId: "816688482541"
};
firebase.initializeApp(config);


var database = firebase.database();

function writeUserData(userId, name, email, password) {

    firebase.database().ref('users/' + userId).update({
        username: name,
        email: email,
        password: password,
        id: userId,

    }, function (error) {
        if (error) {
            console.log('write FAil: ' + error);
        } else {
            console.log('write sucessful: ' + userId);
            location.replace("/");
        }
    });

}


/** end of database  */

/*******************************  AJAX ACTION  *******************************/


/** login Action*/

$("#loginButton").click(function (e) {

    var email = $('#loginForm').find('input[name="email"]').val();
    var password = $('#loginForm').find('input[name="psw"]').val();


    if (firebase.auth().currentUser) {
        // [START signout]
        firebase.auth().signOut();
        window.localStorage.clear();
        // [END signout]
    } else {

        if (email.length < 1) {
            alert('Please enter an email address.');
            return;
        }
        if (password.length < 1) {
            alert('Please enter a password.');
            return;
        }
        // Sign in with email and pass.
        // [START authwithemail]
        firebase.auth().signInWithEmailAndPassword(email, password).then(function () {

            $('#side-signIn').css("display", "none");


            $('#side-signOut').css("display", "block");

            var url = 'http://3.0.56.127/site/login/external/' + SHA1(email);

            $.ajax({
                type: "GET",
                url: url,
                success: function (data) {


                    var userObj = JSON.parse(data);
                    console.log(userObj.status);
                    if(userObj.status == true) {
                        console.log(userObj.result);
                        window.localStorage.setItem('userData', JSON.stringify(userObj.result));


                        fillProfile(data);

                    }
                }
            });


            window.localStorage.setItem('user', SHA1(email));


            window.location = '#profile';


        }).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // [START_EXCLUDE]
            if (errorCode === 'auth/wrong-password') {
                alert('Wrong password.');
            } else {
                alert(errorMessage);
            }
            console.log(error);
            //document.getElementById('quickstart-sign-in').disabled = false;
            // [END_EXCLUDE]
        });
        // [END authwithemail]
    }


    //stop form submission
    e.preventDefault();
});

/** Registration Action*/

$("#signupForm").on('submit', function (e) {


    var email = $('#signupForm').find('input[name="email"]').val();
    var password = $('#signupForm').find('input[name="password"]').val();
    var rePassword = $('#signupForm').find('input[name="psw-repeat"]').val();

    if (password == rePassword) {


        if (email.length < 4) {
            alert('Please enter an email address.');
            return;
        }
        if (password.length < 4) {
            alert('Please enter a password.');
            return;
        }

        // [START createwithemail]
        firebase.auth().createUserWithEmailAndPassword(email, password).then(function () {

            var formData = $('#signupForm').serializeArray();

            $.ajax({
                type: "POST",
                url: "http://3.0.56.127/site/signup/mobile",
                data: formData,
                success: function (data) {
                    alert(data)
                }
            });
            window.localStorage.setItem('user', email);

            window.location = '#myProfile';


        }).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // [START_EXCLUDE]
            if (errorCode == 'auth/weak-password') {
                alert('The password is too weak.');
            } else {
                alert(errorMessage);
            }
            console.log(error);
            // [END_EXCLUDE]
        });

    }


    e.preventDefault(); //stop form submission
});


/** dailyMeasure Action*/

$("#dailyMeasureForm").on('submit', function (e) {


    var formData = $('#dailyMeasureForm').serializeArray();

    $.ajax({
        type: "POST",
        url: "http://3.0.56.127/site/signup/mobile",
        data: formData,
        success: function (data) {
            alert(data)
        }
    });


    e.preventDefault(); //stop form submission
});

/** Add Data Action*/

var weightScale = 'kg';
var heightScale = 'cm';

$("#addDataForm").on('submit', function (e) {


    var user = window.localStorage.getItem('user');

    if (user != null) {

        var url = 'http://3.0.56.127/site/login/update_login/' + user;

        var formData = $('#addDataForm').serializeArray();

        console.log(formData[7].value);

        formData[7].value = convertWeight(parseInt(formData[7].value));

        console.log(formData[7].value);


        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            success: function (data) {
                alert(data)
            }
        });

    }

    e.preventDefault(); //stop form submission
});

/** Risk Assessment Action*/


$("#RiskAssForm").on('submit', function (e) {


    $('#loader').addClass('activeLoader');

    var user = window.localStorage.getItem('user');

    if (user != null) {

        var url = 'http://3.0.56.127/site/user/edit_external/' + user;

        $.ajax({
            type: "GET",
            url: url,
            success: function (data) {
                alert(data);
                $('#loader').removeClass('activeLoader');
            }
        });

    }

    e.preventDefault(); //stop form submission
});


/** Update Profile Action*/


$("#editProfileForm").on('submit', function (e) {


    $('#loader').addClass('activeLoader');

    var user = window.localStorage.getItem('user');

    if (user != null) {

        var url = ' http://3.0.56.127/site/user/edit_external/' + user;

        var formData = $('#editProfileForm').serializeArray();

        $.ajax({
            type: "POST",
            url: url,
            data: formData,
            success: function (data) {
                alert(data)
                $('#loader').removeClass('activeLoader');
            }
        });

    }

    e.preventDefault(); //stop form submission
});


function signOut() {

    var r = confirm("Confirm Signout");
    if (r == true) {

        firebase.auth().signOut().then(function () {

            window.localStorage.clear();

            $('#side-signOut').css("display", "none");
            $('#side-signIn').css("display", "block");

            window.location = '#login';

        }).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;

            alert(errorMessage);

            console.log(error);

        });


    }

}


$(document).ready(function () {


    var user = window.localStorage.getItem('user');

    if (user != null) {

        $('#side-signIn').css("display", "none");
        $('#side-signOut').css("display", "block");

        window.location = '#profile';


    }

    var userData = window.localStorage.getItem('userData');

    if (userData != null) {

        fillProfile(userData);

    }




});


function fillProfile(data) {


    var age = data.age;
    var blood = data.blood;
    var sex = data.gender;
    var height = data.height;
    var weight = data.weight;

    if (sex == 'm') {

        sex = 'male'
    } else if (sex == 'f') {

        sex = 'Female'

    }


    $('#profileAge').html('22');
    $('#profileBlood').html('B-');
    $('#profileGender').html('Male');
    $('#profileHeight').html('182');
    $('#profileWeight').html('120');
    $('#profileBMI').html('10');


    $("#editGender").val("m");
    $("#editBlood").val("b-");
    $("#editHeight").val("182");
    $("#editWeight").val("120");
    $("#editAge").val("22");


}


$('.my-profile-cm').click(function () {
    heightScale = 'cm';
    console.log('click cm');
    $('.height-profile').html('cm');
});

$('.my-profile-inch').click(function () {
    heightScale = 'inch';
    console.log('click inch');
    $('.height-profile').html('inch');
});

$('.my-profile-kg').click(function () {
    weightScale = 'kg';
    console.log('click kg');
    $('.weight-profile').html('kg');
});

$('.my-profile-pounds').click(function () {
    weightScale = 'pounds';
    console.log('click pound');
    $('.weight-profile').html('Pounds');

});

function convertWeight(w){

    if(weightScale == 'pounds'){

        var w = Math.ceil(w / 2.205);
        console.log(w);
       return (w);
    }

    return (w);

}

