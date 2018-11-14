$(function(){

	$.ajax({
		type: "GET",
		url: "/mobile/mobile-ajax.php",
		dataType: "json",
		success: function(data){
			//PC
			if(data.username!="" && data.username!=null){
				var pc_dom  = $("<li>").addClass("pull-right");
				var header_link = $("<a>").attr("href","#");
				var setting_link = $("<a>").attr("href","/setting");
				var logout_link = $("<a>").attr("href","/logout");
					
				header_link.append($("<img>").addClass("avatar").attr("width","40").attr("src",data.avatar));
				header_link.append(data.username);
				setting_link.append($("<span>").addClass("glyphicon glyphicon-cog").attr("aria-hidden","true"));
				logout_link.append($("<span>").addClass("glyphicon glyphicon-log-out").attr("aria-hidden","true"));
				pc_dom.append(header_link).append(setting_link).append(logout_link);
				$(".user_info_pc").append(pc_dom);

				var mob_dom  = $("<div>").addClass("dropdown pull-right");
				header_link = $("<a>").attr("href","#")
					.addClass("dropdown-toggle")
					.attr("data-toggle","dropdown")
					.attr("role","button")
					.attr("aria-haspopup","true")
					.attr("aria-expanded","false")
					.text(data.username);
				expand_link = $("<ul>").addClass("dropdown-menu").attr("style","bottom:inherit;");
				expand_link.append($("<li>").append(logout_link.clone().text("退出")));
				mob_dom.append(header_link).append(expand_link);
				$(".user_info_mob").append(mob_dom);
				//$("body").append(data.ucscript);
			}else{
				var login_link = $("<a>").attr("href","/login").addClass("navbar-brand head-link").text("登陆");
				$(".user_info_pc").append(login_link);
				$(".user_info_mob").append(login_link.clone().removeClass("navbar-brand"));
			}

       }
  });
})
