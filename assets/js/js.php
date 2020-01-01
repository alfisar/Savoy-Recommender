<script type="text/javascript">
$(document).ready(function(){
	var i = 0;
	var j = 0;
	var penampung = [];
	var idxpenampung = 0;
	var ceek = false;
    var card = 1;
    var sumproduk = 0;
    alert('HAHAH');
    // $.getJSON("js/Data.json", function (jd) {
        alert('HA');
        // localStorage.removeItem("nama");
        var nama = localStorage.getItem("nama");
        // alert(nama);
        // if (nama != null) {
            $("#In").append("My Profile");
            $("#In").attr("href","profilpage.html");
            $("#ul2").append("<li class='nav-item'><a class='nav-link' href='landingpage.html' id='logout'>Log Out</a></li>");
            
        // }
        // else{
           $("#In").append("Sign In"); 
        // }

        while (card <= 20) {
            ceek = false;
            idxpenampung = 0;
            j = penampung.length;
            i = Math.floor(Math.random() * 20);
            // alert(i);
            while ((ceek == false) && (idxpenampung <= j - 1)) {
                if (penampung[idxpenampung] == i) {
                    ceek = true
                }
                idxpenampung++;
            }
            if (ceek != true) {
                if (jd.gambar[i].nama == "Door Bumper") {
                    $("#product" + card + " a").attr("href", "descriptionpage.html");
                }
                $("#product" + card + " img").attr("src", jd.gambar[i].url);
                $("#product" + card + " div h4").append(jd.gambar[i].nama);
                $("#product" + card + " div a p").append(jd.gambar[i].price);
            }
            if (ceek != true) {
                if (jd.gambar[i].nama == "Door Bumper") {
                    $("#productt" + card + " a").attr("href", "descriptionpage.html");
                }
                $("#productt" + card + " img").attr("src", jd.gambar[i].url);
                $("#productt" + card + " div h4").append(jd.gambar[i].nama);
                $("#productt" + card + " div a p").append(jd.gambar[i].price);
                card++;
                penampung.push(i);
            }
        }

	// for (var temp2 = 1; temp2<=20; temp2++) {
	// 	if (jd.gambar[temp3].nama == "Door Bumper") {
	// 		$("#product"+temp2+" a").attr("href","descriptionpage.html");
	// 	}
	// 	$("#product"+temp2+" img").attr("src",jd.gambar[temp3].url);
	// 	$("#product"+temp2+" div h4").append(jd.gambar[temp3].nama);
	// 	$("#product"+temp2+" div a p").append(jd.gambar[temp3].price);
	// 	temp3++;
	// }
	// temp3 = 12;
	// for (var temp2 = 1; temp2<=4; temp2++) {
	// 	$("#productt"+temp2+" img").attr("src",jd.gambar[temp3].url);
	// 	$("#productt"+temp2+" div h4").append(jd.gambar[temp3].nama);
	// 	$("#productt"+temp2+" div a p").append(jd.gambar[temp3].price);
	// 	temp3++;
	// }
		//fungsi Logout
        $("#logout").click(function(){
            localStorage.removeItem("nama");
        });

        // Fungsi pindah ke page billing
        $("#btnAddToCart").click(function () {
            window.location.href = "billingpage.html";
        });

        // Fungsi Sign In
        $("#signin").click(function () {
            var nama = document.getElementById("Email").value;
            var pass = document.getElementById("pass").value;
            // alert("hahah");
            // $.getJSON("../js/Data.json",function(jd){	
            i = jd.Admin.length;
            var temp = false;
            j = 0;
            while ((temp != true) && (j <= i - 1)) {
                if ((nama == jd.Admin[j].email) && (pass == jd.Admin[j].Pass)) {
                    temp = true;
                }
                j++;
            }
            if (temp == false) {
                j = 0;
                while ((temp != true) && (j <= i - 1)) {
                    if ((nama == jd.User[j].Nama) && (pass == jd.User[j].Pass)) {
                        temp = true;
                    }
                    j++;
                }
            }
            validasi(temp);
        });

        // Fungsi update jumlah produk dibeli
        $("#btnAddingProduct").click(function () {
            sumproduk++;
            $("#quantityProduct").html(sumproduk);
        });
        $("#btnSubtractProduct").click(function () {
            if (sumproduk > 0) {
                sumproduk--;
                $("#quantityProduct").html(sumproduk);
            }
        });
    });
// });

// fungsi validasi akun saat login
function validasi(temp) {
    if (temp == true) {
        localStorage.setItem("nama","Admin");
        window.location.href = "landingpage.html";
    }
    else {
        alert("Email Or Password not match!");
    }
}
</script>