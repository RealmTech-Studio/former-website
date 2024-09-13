<!doctype html>
<html lang="zh_cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<meta name="viewport" content="width=device-width" />
		<link rel="shortcut icon" href="/icon64x64.png" type="image/x-icon">
		<meta name="generator" content="Astro v2.3.4" />
		<title>SparkPixel Navigation</title>
		<link rel="stylesheet" href="./index.c3d1c68a.css" />
		<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>

		<script type="module">



			kofiWidgetOverlay.draw("xhofe", {
                type: "floating-chat",
                "floating-chat.donateButton.text": "Support Me",
                "floating-chat.donateButton.background-color": "#00b9fe",
                "floating-chat.donateButton.text-color": "#fff",
            });
        </script>
		<input type="hidden" id="_w_simile" data-inspect-config="3" />
		<script
				type="text/javascript"
				src="chrome-extension://odphnbhiddhdpoccbialllejaajemdio/scripts/inspector.js">
		</script>
		<script>
		 var timerID;
		function refreshData() {
			$.ajax({
				url: 'https://api.imlazy.ink/mcapi/?host=play.SparkPixel.ru&type=json',
				type: 'get',
				dataType: 'json',  
				crossDomain: true,
				 success: function(response, status){
								console.log('请求服务器数据：' + status);
								console.log(response);
								if (response.players_online > 0) {
									var players = response.players;
									var playerNames = [];
									for (var i = 0; i < players.length; i++) {
										playerNames.push(players[i].name);
									}
									console.log(playerNames);
									
									var playerNamesStr = "";
									for (var i = 0; i < playerNames.length; i++) {
										playerNamesStr += playerNames[i];
										if (i < playerNames.length - 1) {
											playerNamesStr += ", ";
										}
									}
									playerNamesStr = '当前'+playerNames+'在服务器上';
									console.log(playerNamesStr); 



								
								}
								else
								{
									var playerNamesStr = "当前没有玩家在线";
								}
								if (response.status == "online") {
								}
								$('#scplayer').text(response.players_online + ' 人');//在线玩家
								$('#scstatus').text('当前' + response.status);//服务器开启或关闭状态
								
								$('#list').text(playerNamesStr);//服务器玩家列表
								
							},
				data: {},
			});
			}
			setTimeout(refreshData, 15900);
			refreshData();
		
			function copyUrl() {
				var url = "play.sparkpixel.ru";
				var textField = document.createElement("input");
				textField.value = url;
				document.body.appendChild(textField);
				textField.select();
				document.execCommand("copy");
				document.body.removeChild(textField);
				alert("已复制URL到剪贴板！");
			}
			</script>

	</head>
	<body>
		<main class="astro-J7PV25F6">
			<h1 class="astro-J7PV25F6">
				Hello, Welcome to <span class="text-gradient astro-J7PV25F6">SparkPixel</span>
			</h1>
			<p class="instructions astro-J7PV25F6">
				👦<strong class="astro-J7PV25F6">Minecraft</strong> Server /
				<code class="astro-J7PV25F6">Minecraft Transit Railway</code> Server
				<br
					class="astro-J7PV25F6" />
				服务器进入地址：
				<strong class="astro-J7PV25F6">play.sparkpixel.ru</strong>.<button onclick="copyUrl()" class="btn-animate btn-animate__vibrate"></button>
				<div>当前服务器<span id="scstatus">检测中</span> <span id="scplayer"></div>
				<div id="list"></span><span id="list"></span></div></p>
			<a
			   class="inline-flex text-current px-3 py-2 mt-2 mr-2 rounded-md transition-colors decoration-none hover:bg-gray-700 dark:hover:bg-white dark:hover:text-gray-900 hover:text-white"
			   bg="gray-500/20 dark:gray-400/20"
			   href="https://github.com/"
			   target="_blank">
				<div text-lg="">
					<div class="i-ri-github-fill"></div>
				</div>
				<div text-sm="" ml-1="" font-500="">Github</div>
			</a>
			<a
			   class="inline-flex text-current px-3 py-2 mt-2 mr-2 rounded-md transition-colors decoration-none hover:bg-gradient-to-r from-[#fd5949] to-[#d6249f] hover:text-white"
			   bg="gray-500/20 dark:gray-400/20"
			   href="http://wiki.sparkpixel.ru"
			   target="_blank">
				<div text-lg="">
					<div class="i-ri-book-2-line"></div>
				</div>
				<div text-sm="" ml-1="" font-500="">WIKI</div>
			</a>
			<a
			   class="inline-flex text-current px-3 py-2 mt-2 mr-2 rounded-md transition-colors decoration-none hover:bg-#ff8200 hover:text-white"
			   bg="gray-500/20 dark:gray-400/20"
			   href="#"
			   target="_blank">
				<div text-lg="">
					<div class="i-jam-stackoverflow"></div>
				</div>
			</a>
			<a
			   class="inline-flex text-current px-3 py-2 mt-2 mr-2 rounded-md transition-colors decoration-none hover:bg-[#00ACEE] hover:text-white"
			   bg="gray-500/20 dark:gray-400/20"
			   href="#"
			   target="_blank">
				<div text-lg="">
					<div class="i-ri-twitter-fill"></div>
				</div>
			</a>
			<a
			   class="inline-flex text-current px-3 py-2 mt-2 mr-2 rounded-md transition-colors decoration-none hover:bg-[#fb7299] hover:text-white"
			   bg="gray-500/20 dark:gray-400/20"
			   href="#"
			   target="_blank">
				<div text-lg="">
					<div class="i-ri-bilibili-fill"></div>
				</div>
			</a>
			<a class="inline-flex text-current px-3 py-2 mt-2 mr-2 rounded-md transition-colors decoration-none hover:bg-[#00b0ff] hover:text-white" bg="gray-500/20 dark:gray-400/20" href="" target="_blank">
				<div text-lg="">
					<div class="i-ri-mail-fill"></div>
				</div>
			</a>
			<a
			   class="inline-flex text-current px-3 py-2 mt-2 mr-2 rounded-md transition-colors decoration-none hover:bg-red-4 hover:text-white"
			   bg="gray-500/20 dark:gray-400/20"
			   href=""
			   target="_blank">
				<div text-lg="">
					<div class="i-twemoji:money-bag"></div>
				</div>
			</a>
			<img w-full="" src="github-snake-dark.svg" class="astro-J7PV25F6" />
			<h3 class="flex items-center mt-8 mb-4 font-semibold text-2xl">
				<span flex-1="" class="outfit">💻Websites List</span>
			</h3>
			
			<div class="grid gap-4 grid-cols-1 sm:grid-cols-2">
                <a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="http://skin.sparkpixel.ru"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>Skin Station</span>
							</div>
							<div op-50="" font-normal="" text-sm="">
								用于服务器登录验证以及服务器内玩家皮肤/披风/鞘翅显示
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-love-you-gesture-light-skin-tone"></div>
						</div>
					</div>
				</a>
				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="http://server.sparkpixel.ru:27001"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>Railway System Map</span>
								<!-- <img h-full src={`https://img.shields.io/github/stars/${repo}?color=%237b50c7`} alt=""> -->
							</div>
							<div op-50="" font-normal="" text-sm="">
								一个纯净的铁路线路地图.
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-framed-picture"></div>
						</div>
					</div>
				</a>
				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="http://www.sparkpixel.ru/Recharge/"
				   target="_parent">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>Railway System Recharge</span>
								<!-- <img h-full src={`https://img.shields.io/github/stars/${repo}?color=%237b50c7`} alt=""> -->
							</div>
							<div op-50="" font-normal="" text-sm="">
								一个mtr余额充值机（公测）.
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-framed-picture"></div>
						</div>
					</div>
				</a>
				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="http://server.sparkpixel.ru:27002"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>Dynmap</span>
								<!-- <img h-full src={`https://img.shields.io/github/stars/${repo}?color=%237b50c7`} alt=""> -->
							</div>
							<div op-50="" font-normal="" text-sm="">
								一个服务器动态地图，支持登陆后发送文字到服务器内，可以使用2D/3D视角.
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-framed-picture"></div>
						</div>
					</div>
				</a>
				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="https://wj.qq.com/s2/14868163/e2f4/"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>工单系统</span>
								<!-- <img h-full src={`https://img.shields.io/github/stars/${repo}?color=%237b50c7`} alt=""> -->
							</div>
							<div op-50="" font-normal="" text-sm="">
								任何非紧急情况请提交工单
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-framed-picture"></div>
						</div>
					</div>
				</a>
				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="http://storage.sparkpixel.top/d/Public/Minecraft/SparkPixel/Cilent/SparkPixelCilent.exe"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>下载客户端</span>
								<!-- <img h-full src={`https://img.shields.io/github/stars/${repo}?color=%237b50c7`} alt=""> -->
							</div>
							<div op-50="" font-normal="" text-sm="">
								下载官方客户端
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-framed-picture"></div>
						</div>
					</div>
				</a>
<!--				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="https://github.com/Xhofe/gh-contributors"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>gh-contributors</span>
							</div>
							<div op-50="" font-normal="" text-sm="">
								⭐ Generate svg of contributors, multiple repo supported
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-glowing-star"></div>
						</div>
					</div>
				</a>
				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="https://github.com/Xhofe/solid-contextmenu"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>solid-contextmenu</span>
							</div>
							<div op-50="" font-normal="" text-sm="">
								Add a context menu to your solidjs app with ease. Inspired by
								react-contexify but for Solidjs.
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-love-you-gesture-light-skin-tone"></div>
						</div>
					</div>
				</a>
				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="https://github.com/Xhofe/ipa-renamer"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>ipa-renamer</span>
							</div>
							<div op-50="" font-normal="" text-sm="">
								A command line tool for renaming your ipa files quickly and
								easily.
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-hammer-and-wrench"></div>
						</div>
					</div>
				</a>
				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="https://github.com/Xhofe/aper"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>aper</span>
							</div>
							<div op-50="" font-normal="" text-sm="">
								A simple music player built with solid.js and howler.js.
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-musical-notes"></div>
						</div>
					</div>
				</a>
				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="https://github.com/Xhofe/solid-iconify"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>solid-iconify</span>
							</div>
							<div op-50="" font-normal="" text-sm="">
								A icon component set for SolidJS using Iconify.
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-smiling-face-with-horns"></div>
						</div>
					</div>
				</a>
				<a
				   class="px-4 py-3 text-current rounded-md transition-colors decoration-none"
				   bg="gray-400/10 hover:gray-400/20 "
				   href="https://github.com/alist-org/alist-web"
				   target="_blank">
					<div class="flex h-full items-center justify-center">
						<div flex-1="" flex="~ col gap-1">
							<div
								 font-medium=""
								 leading-relaxed=""
								 flex=""
								 items-center=""
								 justify-between="">
								<span>alist-web</span>
							</div>
							<div op-50="" font-normal="" text-sm="">
								The front end of Alist V3
							</div>
						</div>
						<div ml-4="" text-4xl="" op-80="">
							<div class="i-twemoji-open-file-folder"></div>
						</div>
					</div>
				</a> -->
				
			</div>
<!--			<h3 text-2xl="">⚡Skills</h3>
-->
			<footer mt-12="" >
				<p text-sm="" op-40="" class="astro-J7PV25F6">SparkPixel Server 2024</p> 
				<!--<a style="color: #fff;text-decoration: none;opacity: .4;" class='icp' href="https://beian.miit.gov.cn/" target="_blank">津ICP备2024020589号-1</a>
				-->
			</footer>
			<style>
				.floatingchat-container-wrap,
				        .floating-chat-kofi-popup-iframe {
				          right: 16px;
				          left: unset;
				        }
			</style>
		</main>
	</body>
</html>