
					
					     	var load_ad = function(){
								var pucl = document.getElementById("article_bottom");
								
								if(pucl != null){
									var script = document.createElement("script");
							        script.src = "http://ggs.myzaker.com/zk_wap_ggs.php?pk=556951569490cbd918000062&app_id=13&author=%E7%BD%91%E6%98%93%E7%A7%91%E6%8A%80&f=&url_host=tech.163.com";
							        script.type = "text/javascript";
							        pucl.appendChild(script);
			
								}
							}
			
							var get_content_bottom_y = function(){
			
								if(isWap){
									var divContent = document.getElementById("content_text");
									if(divContent){
										return parseInt(divContent.offsetHeight);
									}
								}else{
									if(!$ && !jQuery){
										return 0;
									}
									var divContent = $("#content_text");
									if(divContent){
										return parseInt(divContent.css("height"));
									}
								}
								
								return 0;
							}
							
							if(typeof ad_load == 'undefined'){
								ad_load = false;
								
								windowHeight = window.screen.height;
						
								//documentHeight = document.body.scrollHeight;
								documentHeight = get_content_bottom_y();
							}
							
							
							var mayload = function(){
								
								documentHeight = get_content_bottom_y();
								if(documentHeight <= 0){
									return;
								}
			
								scrollTop = document.documentElement.scrollTop + document.body.scrollTop;
			
								if((documentHeight > windowHeight && scrollTop >= documentHeight - windowHeight) || (documentHeight < windowHeight && scrollTop != 0)){
						
									if(ad_load == false){
										ad_load = true;
										
										load_ad();
									}
									
								}
						        
						    }			
							
							if(documentHeight < windowHeight){
								mayload();
							}
			
							window.onscroll = mayload;
						
					