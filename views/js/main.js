$(document).ready(function(){
    $("#baf").prop("disabled", true);
    $("#bim").prop("disabled", true);
    $("#bms").prop("disabled", true);
    $("#bscit").prop("disabled", true);
    $("#bfm").prop("disabled", true);
    $("#bmm").prop("disabled", true);
    $("#bcom").prop("disabled", true);
    $("#comm").prop("disabled", true);

    $("#fy").prop("disabled", true);
    $("#sy").prop("disabled", true);
    $("#ty").prop("disabled", true);
    $("#all").prop("disabled", true);
    $(function() {
        $("#department").change(function() {
            if ($(this).val() == "degree") {
                $("#comm").prop("disabled", true);
            }
            else
                $("#comm").prop("disabled", false);
        });
        $("#department").change(function() {
            if ($(this).val() == "junior") {
                $("#baf").prop("disabled", true);
                $("#bim").prop("disabled", true);
                $("#bms").prop("disabled", true);
                $("#bscit").prop("disabled", true);
                $("#bfm").prop("disabled", true);
                $("#bmm").prop("disabled", true);
                $("#bcom").prop("disabled", true);
            }
            else {
                $("#baf").prop("disabled", false);
                $("#bim").prop("disabled", false);
                $("#bms").prop("disabled", false);
                $("#bscit").prop("disabled", false);
                $("#bfm").prop("disabled", false);
                $("#bmm").prop("disabled", false);
                $("#bcom").prop("disabled", false);

            }
        });
    });
    $(function(){
        $("#noticeType").change(function(){
            if($(this).val() == 'general'){
                $("#all").prop("disabled",false);
            }
            else{
                $("#fy").prop("disabled",false);
                $("#sy").prop("disabled",false);
                $("#ty").prop("disabled",false);
                $("#all").prop("disabled",true);
            }
        });
        $(".btn-danger").click(function(){
            var btnValue= "";
            btnValue = $(this).val();
            if(btnValue == ""){
                console.log("no value found");
            }
            else{
                $.ajax({
                    url:"../module/deleteNotice.php",
                    method: "POST",
                    data: {value: btnValue},
                    success:function(data){
                        console.log(data);
                        location.reload("../index.php");
                    },
                    error: function(){
                        console.log("Some Error");
                    }

                });
            }
        });

    }); 

    // window.onscroll = function(){
    //    var ele= document.getElementById('beforeScroll');
    //    ele.className = 'main-panel-cont-scroll';
    // }  
});
// let navbar=document.getElementById("navigation");
	// let sticky= navbar.offsetTop;
	// console.log(sticky);

	// function check(){
	// 	if(window.pageYOffset >= sticky){
	// 		navbar.classList.add("fix-nav");
	// 	}
	// 	else{
	// 		navbar.classList.remove("fix-nav");
	// 	}
    // }
    // window.onscroll = function(){
	// 	check();
	// }
// function getDepartment(){
//     var depart_value =$("#department").val().toUpperCase();
//     console.log(depart_value);
//     var text="Degree College";
//     text.toUpperCase();
//     if (depart_value == text){
//         $("#course").attr("disabled","disabled");
//     }
    
// }
// $("#btnValidateOtp").click(function(){
//     var email= $("#userEmail").val();
//     $.ajax({
//         method: "../module/forgotPassword.php",
//         data:{userEmail: email},
//         method: "POST",
//         success: function(data){
//             console.log(email);
//         }

//     });
// });

// function validate(){
//     var email= $("#userEmail").val();
//     $.ajax({
//         method: "../module/tem.php",
//         data:{userEmail: email},
//         method: "POST",
//         dataType: "json",
//         success: function(data){
//             alert(data);
//         }

//     });
//     console.log("Hii, shahad here..");    
// }
// function openSlideMenu(){
//     document.getElementById('menu').style.width='250px';
//     document.getElementById('content').style.marginLeft = '250px';
// }
// function closeSidebar(){
   
//     document.getElementById('menu').style.width='0';
//     document.getElementById('content').style.marginLeft = '0';
// }
