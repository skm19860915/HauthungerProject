<body style="background-color:#111111;margin-top:10px;">
<script src='js/jquery-1.9.1.min.js'></script>
	<script src='js/jquery-ui-1.10.2.custom.min.js'></script>
		<script src='js/jquery.fullcalendar.js'></script>
		<script type='text/javascript' src='js/jquery.qtip-1.0.0-rc3.min.js'></script>
		<link href='js/jquery.fullcalendar.css' rel='stylesheet' />
		<style type='text/css'>
			body{margin:0;padding:0;background-color:white;}
			.fc-event-title {font-weight:bold !important;}
			.fc-event-inner{font-size:12px !important;size:12px !important;}
			.fc-header-title{padding-top:0px !important;}
			.fc-header-left{padding-top:0px !important;padding-left:0px !important;}
			.fc-event {
				border:0px solid #111111 !important;
				padding:0px !important;
			}

			.event12{background-color:#A52A2A;color:white;font-color:white;border:1px solid #A52A2A !important;}
			.event13{background-color:#FF0000;color:white;font-color:white;border:1px solid #FF0000 !important;}
			.event14{background-color:#008000;color:white;font-color:white;border:1px solid #008000 !important;}
	
			table tr td{font-size:12px !important;size;12px !important;background-color:white !important;}
			table tr th{font-size:12px !important;size;12px !important;background-color:white !important;}
			#external-events {
				float: left;
				width: 120px;
				padding: 0 10px;
				border: 1px solid #ccc;
				background: #eee;
				text-align: left;
				}
				
			#external-events h4 {
				font-size: 15px;
				margin-top: 0;
				padding-top: 1em;
				}
				
			.external-event { /* try to mimick the look of a real event */
				margin: 10px 0;
				padding: 2px 4px;
				background: #3366CC;
				color: #fff;
				font-size: .85em;
				cursor: pointer;
				}
				
			#external-events p {
				margin: 1.5em 0;
				font-size: 11px;
				color: #666;
				}
				
			#external-events p input {
				margin: 0;
				vertical-align: middle;
				}
				.fc-event-time{
					cursor:pointer;
				}
				
			/*! qTip2 v2.0.1 (includes: svg ajax tips modal viewport imagemap ie6 / basic css3) | qtip2.com | Licensed MIT, GPL | Fri Jun 14 2013 10:32:39 */.qtip,.qtip{position:absolute;left:-28000px;top:-28000px;display:none;min-width:50px;font-size:10.5px;line-height:12px;direction:ltr}.qtip-content{position:relative;padding:0px;overflow:hidden;text-align:left;word-wrap:break-word}.qtip-titlebar{position:relative;padding:5px 35px 5px 10px;overflow:hidden;border-width:0 0 1px;font-weight:700}.qtip-titlebar+.qtip-content{border-top-width:0!important}.qtip-close{position:absolute;right:-9px;top:-9px;cursor:pointer;outline:medium none;border-width:1px;border-style:solid;border-color:transparent}.qtip-titlebar .qtip-close{right:4px;top:50%;margin-top:-9px}* html .qtip-titlebar .qtip-close{top:16px}.qtip-titlebar .ui-icon,.qtip-icon .ui-icon{display:block;text-indent:-1000em;direction:ltr;vertical-align:middle}.qtip-icon,.qtip-icon .ui-icon{-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;text-decoration:none}.qtip-icon .ui-icon{width:18px;height:14px;text-align:center;text-indent:0;font:normal bold 10px/13px Tahoma,sans-serif;color:inherit;background:transparent none no-repeat -100em -100em}.qtip-focus{}.qtip-hover{}.qtip-default{border-width:1px;border-style:solid;border-color:#F1D031;background-color:#FFFFA3;color:#555}.qtip-default .qtip-titlebar{background-color:#FFEF93}.qtip-default .qtip-icon{border-color:#CCC;background:#F1F1F1;color:#777}.qtip-default .qtip-titlebar .qtip-close{border-color:#AAA;color:#111}/*! Light tooltip style */.qtip-light{background-color:#fff;border-color:#E2E2E2;color:#454545}.qtip-light .qtip-titlebar{background-color:#f1f1f1}/*! Dark tooltip style */.qtip-dark{background-color:#505050;border-color:#303030;color:#f3f3f3}.qtip-dark .qtip-titlebar{background-color:#404040}.qtip-dark .qtip-icon{border-color:#444}.qtip-dark .qtip-titlebar .ui-state-hover{border-color:#303030}/*! Cream tooltip style */.qtip-cream{background-color:#FBF7AA;border-color:#F9E98E;color:#A27D35}.qtip-cream .qtip-titlebar{background-color:#F0DE7D}.qtip-cream .qtip-close .qtip-icon{background-position:-82px 0}/*! Red tooltip style */.qtip-red{background-color:#F78B83;border-color:#D95252;color:#912323}.qtip-red .qtip-titlebar{background-color:#F06D65}.qtip-red .qtip-close .qtip-icon{background-position:-102px 0}.qtip-red .qtip-icon{border-color:#D95252}.qtip-red .qtip-titlebar .ui-state-hover{border-color:#D95252}/*! Green tooltip style */.qtip-green{background-color:#CAED9E;border-color:#90D93F;color:#3F6219}.qtip-green .qtip-titlebar{background-color:#B0DE78}.qtip-green .qtip-close .qtip-icon{background-position:-42px 0}/*! Blue tooltip style */.qtip-blue{background-color:#E5F6FE;border-color:#ADD9ED;color:#5E99BD}.qtip-blue .qtip-titlebar{background-color:#D0E9F5}.qtip-blue .qtip-close .qtip-icon{background-position:-2px 0}.qtip-shadow{-webkit-box-shadow:1px 1px 3px 1px rgba(0,0,0,.15);-moz-box-shadow:1px 1px 3px 1px rgba(0,0,0,.15);box-shadow:1px 1px 3px 1px rgba(0,0,0,.15)}.qtip-rounded,.qtip-tipsy,.qtip-bootstrap{-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px}.qtip-youtube{-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;-webkit-box-shadow:0 0 3px #333;-moz-box-shadow:0 0 3px #333;box-shadow:0 0 3px #333;color:#fff;border-width:0;background:#4A4A4A;background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0, #4A4A4A),color-stop(100%,black));background-image:-webkit-linear-gradient(top, #4A4A4A 0,black 100%);background-image:-moz-linear-gradient(top, #4A4A4A 0,black 100%);background-image:-ms-linear-gradient(top, #4A4A4A 0,black 100%);background-image:-o-linear-gradient(top, #4A4A4A 0,black 100%)}.qtip-youtube .qtip-titlebar{background-color:#4A4A4A;background-color:rgba(0,0,0,0)}.qtip-youtube .qtip-content{padding:0px;font:12px arial,sans-serif;filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr=#4a4a4a, EndColorStr=#000000);-ms-filter:"progid:DXImageTransform.Microsoft.Gradient(GradientType=0, StartColorStr=#4a4a4a, EndColorStr=#000000);"}.qtip-youtube .qtip-icon{border-color:#222}.qtip-youtube .qtip-titlebar .ui-state-hover{border-color:#303030}.qtip-jtools{background:#232323;background:rgba(0,0,0,.7);background-image:-webkit-gradient(linear,left top,left bottom,from( #717171),to( #232323));background-image:-moz-linear-gradient(top, #717171, #232323);background-image:-webkit-linear-gradient(top, #717171, #232323);background-image:-ms-linear-gradient(top, #717171, #232323);background-image:-o-linear-gradient(top, #717171, #232323);border:2px solid #ddd;border:2px solid rgba(241,241,241,1);-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;-webkit-box-shadow:0 0 12px #333;-moz-box-shadow:0 0 12px #333;box-shadow:0 0 12px #333}.qtip-jtools .qtip-titlebar{background-color:transparent;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#717171, endColorstr=#4A4A4A);-ms-filter:"progid:DXImageTransform.Microsoft.gradient(startColorstr=#717171, endColorstr=#4A4A4A)"}.qtip-jtools .qtip-content{filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#4A4A4A, endColorstr=#232323);-ms-filter:"progid:DXImageTransform.Microsoft.gradient(startColorstr=#4A4A4A, endColorstr=#232323)"}.qtip-jtools .qtip-titlebar,.qtip-jtools .qtip-content{background:transparent;color:#fff;border:0 dashed transparent}.qtip-jtools .qtip-icon{border-color:#555}.qtip-jtools .qtip-titlebar .ui-state-hover{border-color:#333}.qtip-cluetip{-webkit-box-shadow:4px 4px 5px rgba(0,0,0,.4);-moz-box-shadow:4px 4px 5px rgba(0,0,0,.4);box-shadow:4px 4px 5px rgba(0,0,0,.4);background-color:#D9D9C2;color:#111;border:0 dashed transparent}.qtip-cluetip .qtip-titlebar{background-color:#87876A;color:#fff;border:0 dashed transparent}.qtip-cluetip .qtip-icon{border-color:#808064}.qtip-cluetip .qtip-titlebar .ui-state-hover{border-color:#696952;color:#696952}.qtip-tipsy{background:#000;background:rgba(0,0,0,.87);color:#fff;border:0 solid transparent;font-size:11px;font-family:'Lucida Grande',sans-serif;font-weight:700;line-height:16px;text-shadow:0 1px black}.qtip-tipsy .qtip-titlebar{padding:0px;;background-color:transparent}.qtip-tipsy .qtip-content{padding:0px;}.qtip-tipsy .qtip-icon{border-color:#222;text-shadow:none}.qtip-tipsy .qtip-titlebar .ui-state-hover{border-color:#303030}.qtip-tipped{border:3px solid #959FA9;-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;background-color:#F9F9F9;color:#454545;font-weight:400;font-family:serif}.qtip-tipped .qtip-titlebar{border-bottom-width:0;color:#fff;background:#3A79B8;background-image:-webkit-gradient(linear,left top,left bottom,from( #3A79B8),to( #2E629D));background-image:-webkit-linear-gradient(top, #3A79B8, #2E629D);background-image:-moz-linear-gradient(top, #3A79B8, #2E629D);background-image:-ms-linear-gradient(top, #3A79B8, #2E629D);background-image:-o-linear-gradient(top, #3A79B8, #2E629D);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#3A79B8, endColorstr=#2E629D);-ms-filter:"progid:DXImageTransform.Microsoft.gradient(startColorstr=#3A79B8, endColorstr=#2E629D)"}.qtip-tipped .qtip-icon{border:2px solid #285589;background:#285589}.qtip-tipped .qtip-icon .ui-icon{background-color:#FBFBFB;color:#555}.qtip-bootstrap{font-size:14px;line-height:20px;color:#333;padding:0px;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,.2);-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);-moz-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2);-webkit-background-clip:padding-box;-moz-background-clip:padding;background-clip:padding-box}.qtip-bootstrap .qtip-titlebar{padding:8px 14px;margin:0;font-size:14px;font-weight:400;line-height:18px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;-webkit-border-radius:5px 5px 0 0;-moz-border-radius:5px 5px 0 0;border-radius:5px 5px 0 0}.qtip-bootstrap .qtip-titlebar .qtip-close{right:11px;top:45%;border-style:none}.qtip-bootstrap .qtip-content{padding:0px 0px}.qtip-bootstrap .qtip-icon{background:transparent}.qtip-bootstrap .qtip-icon .ui-icon{width:auto;height:auto;float:right;font-size:20px;font-weight:700;line-height:18px;color:#000;text-shadow:0 1px 0 #fff;opacity:.2;filter:alpha(opacity=20)}.qtip-bootstrap .qtip-icon .ui-icon:hover{color:#000;text-decoration:none;cursor:pointer;opacity:.4;filter:alpha(opacity=40)}.qtip:not(.ie9haxors) div.qtip-content,.qtip:not(.ie9haxors) div.qtip-titlebar{filter:none;-ms-filter:none}.qtip .qtip-tip{margin:0 auto;overflow:hidden;z-index:10}.qtip .qtip-tip,.qtip .qtip-tip .qtip-vml{position:absolute;color:#123456;background:transparent;border:0 dashed transparent}.qtip .qtip-tip canvas{top:0;left:0}.qtip .qtip-tip .qtip-vml{behavior:url(#default#VML);display:inline-block;visibility:visible}#qtip-overlay{position:fixed;left:-10000em;top:-10000em}#qtip-overlay.blurs{cursor:pointer}#qtip-overlay div{position:absolute;left:0;top:0;width:100%;height:100%;background-color:#000;opacity:.7;filter:alpha(opacity=70);-ms-filter:"alpha(Opacity=70)"}.qtipmodal-ie6fix{position:absolute!important}
			
			.qtip-contentWrapper{border:0px solid #B7B7B7 !important;padding:0px !important;margin:0px !important;}
		</style>
		<script>
		$(document).ready(function() {			
			$('#calendar').fullCalendar({
				header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: ''
                    },
				firstDay:1,
				timeFormat: 'H(:mm)',
				background: '#ffffff',
				border:'#00CCFF',
				editable: false,
				<?php if (isset($_GET['category_id']) and $_GET['category_id'] != ""){?>
				events: "json-events.php?category_id=<?php echo $_GET['category_id'];?>",
				<?php } else {
				?>
				events: "json-events.php",
				<?php
				}?>
				loading: function(bool) {
					if (bool) $('#loading').show();
					else $('#loading').hide();
				},
				eventRender: function(event, element) {
					if (event['dayname'] == "Saturday" || event['dayname'] == "Friday" || event['dayname'] == "Thursday" || event['dayname'] == "Sunday"){
						element.qtip({
							content: event.description,
							position: {corner: {tooltip: 'rightMiddle', target: 'leftCenter', adjust: { method: 'flipinvert', screen: true }}},
							style:{background: '#ffffff',border:'#00CCFF'},
							tip:!0,
							hide: {
								fixed: true // Helps to prevent the tooltip from hiding ocassionally when tracking!
							}	
						});	 
					}else{
						element.qtip({
							content: event.description,
							position: {corner: {tooltip: 'leftMiddle', target: 'rightMiddle', adjust: { method: 'flipinvert', screen: true }}},
							style:{background: '#ffffff',border:'#00CCFF'},
							tip:!0,
							hide: {
								fixed: true // Helps to prevent the tooltip from hiding ocassionally when tracking!
							}	
						});	 
					}
				}
			});
			
		});
	</script>
	
	<script charset="utf-8">
	function emailevent(email,eventid) {
		var emailauto = "";
		var emailaddress = prompt("Kontakt zum Ort: Email : ");
		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailaddress)){
			$.ajax({
				url: "download-ical.php?email=1&id="+eventid+"&email_address="+emailaddress,
				cache: false,
				success: function(html){
					alert("Email versandt!");
				}
			})
		}	
	}
	</script>
		<div id='calendar' style="width:550px;margin-top:20px;font-family:Arial,Helvetica,Geneva,Swiss,SunSans-Regular;"></div>

 </body>    
     