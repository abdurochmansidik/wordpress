<div v-if="viewsActive.pageScreen == 'selectFeed'" class="ctf-fb-fs">
	<div class="ctf-fb-create-ctn ctf-fb-wrapper">
		<div class="ctf-fb-heading">
			<h1>{{selectFeedTypeScreen.mainHeading}}</h1>
			<div class="ctf-fb-btn ctf-fb-slctf-nxt ctf-fb-btn-ac ctf-btn-orange" :data-active="creationProcessCheckAction()" @click.prevent.default="creationProcessNext()">
				<span>{{genericText.next}}</span>
				<svg width="7" height="11" viewbox="0 0 7 11" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.3332 0.00683594L0.158203 1.18184L3.97487 5.00684L0.158203 8.83184L1.3332 10.0068L6.3332 5.00684L1.3332 0.00683594Z" fill="white"></path>
				</svg>
			</div>
		</div>
		<br>
<b>Fatal error</b>:  Uncaught Error: Undefined constant &quot;CTF_BUILDER_DIR&quot; in D:\xampp\htdocs\wordpress\wp-content\plugins\custom-twitter-feeds\admin\builder\templates\screens\select-feed.php:13
Stack trace:
#0 {main}
  thrown in <b>D:\xampp\htdocs\wordpress\wp-content\plugins\custom-twitter-feeds\admin\builder\templates\screens\select-feed.php</b> on line <b>13</b><br>
</div>
</div>