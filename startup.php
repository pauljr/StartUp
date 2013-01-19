<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta property="og:title" content="DefWiz StartUP"/>
<meta property="og:type" content="school"/>
<meta property="og:image" content="http://definingwizard.com/wp-content/uploads/2012/10/icon-series.031.png"/>
<meta property="og:url" content="http://www.definingwizard.com/tstart/startupTeams5.php"/>
<meta property="og:site_name" content="DEFINING WIZARD"/>
<meta property="fb:admins" content="pjpdub"/>
<meta property="fb:app_id" content="483629355014712"/>
<title>Go DEFWIZ StartUP</title>

<style>
    html, body { 
        margin: 0px;
        padding: 0px;
        color: #fff;
		font: 300 100.1% "Helvetica Neue", Helvetica, "Arial Unicode MS", Arial, sans-serif;
    }
    
    /*
body {
        background: center;
	}
*/

    h1 a {
        text-decoration: none;
        color: #3b5998;
    }

    h1 a:hover {
        text-decoration: underline;
    }

    #begin {
        text-align:center;
        margin: 10px;
        width: 20%;
        float:left;
        background-color: #FEE;
        color:#476BB2;
        opacity:1.0;
        border:3px groove #65A5D1;
    }
    
    #formsuccess {
    	background-color:#F00;
    }
    
    #begin p {
        font-weight:700;
        font-size:15px;
    }

    #myteamfontsize {
        font-size:25px;
        margin: 10px;
    }

    div {
        display: inline;
    }

    #background {
        position: absolute;
        margin: 0 auto;
        width: 90%;
        height: 90%;
        background:url("dwlogo.jpg") no-repeat;
        background-position: 20% 80%;
        background-size: contain;
        background-color: #A8A8A8;
        border:7px solid #65A5D1;
        text-align: center;
        opacity: 0.9;
    }

    #holder {
    	margin-left: 30px;
    	width: 25%;
        display:inline-block;
       /* position: static;*/
    }

	#wizard {
		display:inline;
		background-size:contain;
	}
	
	#dwstartupimage {
		margin-left: 0px;
		display: block;
		clear: both;
		border:15px solid #65A5D1;

	}
	
	#googleads {
		float: left;
		z-index:1;
	}
	
	#googleads2 {
		float:right;
		margin-right:30px;
	}
	
    #teamheader {
        display: inline-block;
        margin-top:5px;
        text-align:left;
        width: 35%;
    }

    .button {
        font: 1em Arial, Helvetica, sans-serif;
        color: #EEE;
        background: #444;
        text-align: center;
        margin: 4px;
        padding: 4px;
        height: auto;
        width: 10pc;
        border: 3px outset;
    }
    
    div.dialog1 {
                background:url("images/border_greenRect.png") no-repeat;
                background-size:cover;
                background-position:left;
                display:none;
                position:absolute;
                z-index:2;
                width:50%;
                top:70px;
                right:600px;
                text-align: center;
                line-height:90%;
    }
    
    div.dialog2 {
                background:url("images/border_greenRect.png") no-repeat;
                background-size:cover;
                background-position:right;
                display:none;
                background-color:red;
                position:absolute;
                z-index:2;
                width:50%;
                height:50%;
                top:30px;
                right:60px;
                text-align: center;
                line-height:90%;
    }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.21/themes/base/jquery-ui.css" type="text/css" media="all" />
<script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js" type="text/javascript"></script>
<script src="raphael.js" type="text/javascript" charset="utf-8"></script>
<script language="javascript" runat="server" src="facebook-platform/php/jsonwrapper/JSON/JSON.php"></script>
<script type="text/javascript" charset="utf-8">

    var choices = "";

    window.onload = function () {
        var need_components = document.getElementById('need');
        var myNeed_ = need_components.value;
        var myNeed = $("#need");

        var r = Raphael("holder", 300, 450);
        var targets = r.set();
        targets.push(r.circle(60, 50, 15),
                r.circle(60, 90, 15),
                r.circle(60, 130, 15),
                r.circle(60, 170, 15),
                r.circle(60, 210, 15),
                r.circle(60, 250, 15));
                //r.circle(60, 290, 15),
                //r.circle(60, 330, 15),
                //r.circle(60, 370, 15));
        targets.attr({fill: "#000", stroke: "#fff", "stroke-dasharray": "- ", opacity: .2});
        var labels = r.set();
        labels.push(r.text(80, 50, "Co-Founder"),
                r.text(80, 90, "UX-UI Designer"),
                r.text(80, 130, "Engineer-Programmer"),
                r.text(80, 170, "Developer"),
                r.text(80, 210, "Educator"),
                r.text(80, 250, "Business-Marketing"));
                //r.text(80, 290, "Business Manager"),
                //r.text(80, 330, "Writers"),
                //r.text(80, 370, "Educators"));
        labels.attr({font: "19px Fontin-Sans, Arial", fill: "#fff", "text-anchor": "start"});
        var movers = r.set();
        movers.push(r.circle(20, 50, 15),
                r.circle(20, 90, 15),
                r.circle(20, 130, 15),
                r.circle(20, 170, 15),
                r.circle(20, 210, 15),
                r.circle(20, 250, 15));
                // r.circle(20, 290, 15),
                //r.circle(20, 330, 15),
                //r.circle(20, 370, 15));
        movers.attr({fill: "#000", stroke: "#fff", "fill-opacity": 0});
        movers[0].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(0, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000,
                    function() {
                        if (choices.indexOf('Co-Founder') > -1) {//if deselecting, remove choice
                            choices = choices.replace(/Co-Founder/gi, "");
                            document.getElementById('need').value = choices;
                        } else {
                            choices = choices+"Co-Founder";
                            document.getElementById('need').value = choices;
                        }
                    });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[1].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.1, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('UX-UI Designer') > -1) {
                    choices = choices.replace(/UX-UI Designe/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"UX-UI Designer";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[2].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.2, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Engineer-Programmer') > -1) {
                    choices = choices.replace(/Engineer-Programmer/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Engineer-Programmer";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[3].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.3, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Developer') > -1) {
                    choices = choices.replace(/Developer/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Developer";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[4].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.4, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Educator') > -1) {
                    choices = choices.replace(/Educator/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Educator";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[5].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.5, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Business-Marketing') > -1) {
                    choices = choices.replace(/Business-Marketing/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Business-Marketing";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        // movers[6].click(function () {
//             this.cx = this.cx || 60;
//             this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.6, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
//                 if (choices.indexOf('Business Managers') > -1) {
//                     choices = choices.replace(/Business Managers/gi, "");
//                     document.getElementById('need').value = choices;
//                 } else {
//                     choices = choices+"Business Managers";
//                     document.getElementById('need').value = choices;
//                 }
//             });
//             this.cx = this.cx == 60 ? 10 : 60;
//         });
//         movers[7].click(function () {
//             this.cx = this.cx || 60;
//             this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.7, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
//                 if (choices.indexOf('Writers') > -1) {
//                     choices = choices.replace(/Writers/gi, "");
//                     document.getElementById('need').value = choices;
//                 } else {
//                     choices = choices+"Writers";
//                     document.getElementById('need').value = choices;
//                 }
//             });
//             this.cx = this.cx == 60 ? 10 : 60;
//         });
//         movers[8].click(function () {
//             this.cx = this.cx || 60;
//             this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.8, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
//                 if (choices.indexOf('Educators') > -1) {
//                     choices = choices.replace(/Educators/gi, "");
//                     document.getElementById('need').value = choices;
//                 } else {
//                     choices = choices+"Educators";
//                     document.getElementById('need').value = choices;
//                 }
//             });
//             this.cx = this.cx == 60 ? 10 : 60;
//         });

    };

</script>


<script>window["_GOOG_TRANS_EXT_VER"] = "1";</script>

</head>
<body class=" hasGoogleVoiceExt">	
<div id="background">
	<div class="dialog2" id="primaryLink">
			<a href="http://definingwizard.com/ask-mr-defining-wizard-a-math-question">
				<img src="http://definingwizard.com/wp-content/uploads/2012/12/Homework-Campaign.004.png" width="100%" height="100%" border="0" alt="Homework Campaign"></img>
			</a> 
			
		</div>

	
	<div id="googleads2">
		<script type="text/javascript"><!--
		google_ad_client = "ca-pub-4202430025520186";
		/* DW-Startup2 */
		google_ad_slot = "9996828868";
		google_ad_width = 300;
		google_ad_height = 600;
		//-->
		</script>
		<script type="text/javascript"
		src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
		</script>
	</div>
	
    <div id="begin"> 
    	<script language="javascript" type="text/javascript" src="include/jquery-1.5.1.min.js"></script>
		<script language="javascript" type="text/javascript" src="include/jquery.validationEngine-en.js"></script>
		<script language="javascript" type="text/javascript" src="include/jquery.validationEngine.js"></script>
		<link rel="stylesheet" type="text/css" href="include/validationEngine.jquery.css" />
        <form id="target"  action="/gdform.php" method="post">
            <input type="hidden" name="subject" value="Newsletter Registration 2" />
            <input type="hidden" name="redirect" value="/">
            <input type="hidden" name="need" id="need" value="">
            <b id="myteamfontsize">My Team Requirements: </b> <br>
            <p>To the right, select the people you need on your team to build your idea, then click submit below</p>
            <b>First name: </b><input type="text" name="fname" id="fname"><br>
            <b>Last name : </b><input type="text" name="lname" id="lname"><br>
            <b>Email     : </b><input type="email" name="email" id="email" value="@"><br>
            <b>Description: </b><br>
            <textarea name="pitch" id="pitch" rows="6" cols="20">Consider this your 30 second pitch!  Make sure to mention what your skills are, as well. </textarea>
            <br><br>
            <b>Register for Newsletter and Replies: </b><br>
            <input type="radio" name="newletter1" id="newsyes" value="yesnews">
            <label for="yes">YES</label> <br>
            <input type="radio" name="newletter2" id="newsno" value="nonews">
            <label for="no">NO</label> <br><br>

            <b>Startup Method: </b><br>
            <input type="radio" name="bootstrap" id="bootstrap" value="bootstrap">
            <label for="bootstrap">Bootstrap (use own funds)</label> <br>
            <input type="radio" name="funded" id="funded" value="funded">
            <label for="funded">Funded (venture capitalist/angel funded)</label> <br><br>

            <input type="submit" value="Submit" class="button">

        </form>

        <div class="dialog1" id="wrapper">
			<div id="topPresentation">
				<div id="logo">
					<img src="http://definingwizard.com/wp-content/uploads/2012/11/wizardDW.gif" width="100%" height="100%" border="0" alt="logo"></img>
				</div>
			</div>
		</div>
			
		<script>
			$(".dialog1").fadeIn(1000).delay(2000).fadeOut(1000);
			$(".dialog2").fadeIn("fast").delay(10000).fadeOut(1000);
		</script>
		
        <script language="javascript" type="text/javascript">
            $(document).ready(function() {
                $(".button").click(function(event) {
                    $("#target").validationEngine();
                    event.preventDefault();
                    if($("#target").validationEngine({returnIsValid:true})) {
                        alert( $("#target").serialize());
                        $.ajax({
                            type: $("#target").attr("method"),
                            url: $("#target").attr("action"),
                            data: $("#target").serialize(),
                            success: function(data) {

                                $("#target").append("<div style='float:right;background-color:orange'><p>Successfully sent out this request to save the world!</p>" +
                                        "<p>Check <a href='https://www.facebook.com/defwizard'> our facebook page</a> and share your project with your network</p>" +
                                        "<p>Upon satisfactory submission, your request will be live on <a href='https://www.facebook.com/defwizard'> Facebook </a> for others to view</p>" +
                                        "<p>Just believe that Your Super Team is one step closer to assimulation!</p></div>");
                            }
                        });
                    }
                });
            });
        </script>

        <?
			if(isset($_POST['email'])) {
				if ( !check_email( trim($_POST['email']) )) {
					echo 'Please enter a valid email address<br />';
				}
			else send_email();
		}
		
        
        function check_email($emailAddress) {
            if (preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $emailAddress)){
                $emailArray = explode("@",$emailAddress);
                if (checkdnsrr($emailArray[1])){
                    return true;
                }
            }
            return false;
        }
        function send_email() {
            $need;
            $message = "\nName: " . $_POST['fname'] .
                "\nEmail: " . $_POST['email'] .
                "\nPitch: " . $_POST['pitch'] .
                "\nLooking For: " . $_POST['need'];

            $message .= "\n\nBrowser Info: " . $_SERVER["HTTP_USER_AGENT"] .
                "\nIP: " . $_SERVER["REMOTE_ADDR"] .
                "\n\nDate: " . date("Y-m-d h:i:s");

            $siteEmail = 'pwilliamsjr@gmail.com';
            $emailTitle = 'Request from definingwizard.com';
            $thankYouMessage = "Thank you for contacting us, we'll get back to you shortly.";

            if(! mail($siteEmail, $emailTitle, $message, 'From: ' . $_POST['fname'] . ' <' . $_POST['email'] . '>' . $thankYouMessage))
                'Mail can not sent.';
        }
        ?>
    </div>

    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fdefwizard&amp;width=292&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=false&amp;appId=483629355014712" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>

    <div id="teamheader">
        <!-- <b id="myteamfontsize">My Team Requirements: </b> <br> -->
        <em>Click <img src="http://definingwizard.com/wp-content/uploads/2012/12/circle.png" alt="circle"> circles to start building your team.</em>  <br>
        <em>Who do you need on your team to become successful?</em>


    </div>

    <div id="holder">
    </div>

	<div id="wizard">
		<a href="http://www.definingwizard.com">
			<img src="http://definingwizard.com/wp-content/uploads/2012/11/wizardDW.gif" alt="DEFWIZ"><br>
		</a>
	</div>
	
	<div id="dwstartupimage">
			<img src="http://definingwizard.com/wp-content/uploads/2012/12/defwizstartup.003.png" alt="DEFWIZ_image" width="100%" height="20%" />
	
	</div>

    <p id="copy">Demo of **SWAG</p>
</div>

</body>
</html>
