@extends('layouts.flowtime')

@section('content')

	<div class="flowtime">
		<div class="ft-section" data-id="section-1">
			<div id="/section-1/page-1" class="ft-page" data-id="page-1" data-title="A Presentation Framework by @marcolago">
				<div class="stack-center">
					<div class="stacked-center">
						<a href="#/section-1/page-2"><img src=" {{ asset('flowtime/assets/img/logo-white-shadow.png') }} "></a>
						<p class="page-title">Catalogue | iceberg: people, projects, products
</p>
						<p>Press <strong>Down Key</strong> to continue<br>
							Or <strong>Swipe Up</strong> if you prefer.</p>
					</div>
				</div>
			</div>
			<div id="/section-1/page-2" class="ft-page" data-id="page-2">
				<h1>What is it?</h1>
				<p><strong>Flowtime.js</strong> is a framework for easily building HTML presentations or websites.</p>
				<p>It’s built with web standards in mind and on top of a solid full page grid layout.</p>
				<p>The animations are managed with native and accelerated CSS3 transitions.<br>
					Javascript takes care of the navigation behaviour and adds advanced functionalities and configuration options.</p>
				<p>Press <strong>Down Key</strong> or <strong>Swipe Up</strong> to continue.</p>
			</div>
			<div id="/section-1/page-3" class="ft-page" data-id="page-3">
				<h1>Compatibility and Support</h1>
				<p><strong>Flowtime.js</strong> is fully compatible with real moderns browsers:</p>
				<ul>
					<li>Firefox</li>
					<li>Chrome</li>
					<li>Safari</li>
					<li>Opera</li>
					<li>Internet Explorer 10</li>
				</ul>
				<p>Internet Explorer 9 and some old versions of other browsers lack the transitions and some modern Javascript features but the main navigation and functionalities will work.</p>
				<p>In older browsers degrades to a bi-directional scrolling navigation with anchor links.</p>
			</div>
			<div id="/section-1/page-4" class="ft-page" data-id="page-4">
				<h1>Touch Devices Support</h1>
				<p>On touch devices you can navigate through slides swiping in all directions.</p>
				<p>By now Flowtime.js was tested and works on Safari Mobile and Chrome Mobile on iOS devices but the support will be wider in the near future.</p>
			</div>
		</div>
		<div class="ft-section" data-id="section-2">
			<div id="/section-2/page-1" class="ft-page" data-id="page-1">
				<h1>Mastering the Navigation</h1>
				<p>You can navigate in many ways. The most common way is using the keyboard.</p>
				<h3>Navigation Keys and default behaviours:</h3>
				<ul>
					<li><strong>Down Key</strong> goes to the next page or shows up the next fragment (we’ll see this later).</li>
					<li><strong>Up Key</strong> goes to the previous page or hides the fragment.</li>
					<li><strong>Right Key</strong> goes to the adjacent page in the next section <span class="small">(if available, it’s like a grid, otherwise it goes to the last page in the next section).</span></li>
					<li><strong>Left Key</strong> goes to the adjacent page in the previous section.</li>
				</ul>
			</div>
			<div id="/section-2/page-2" class="ft-page" data-id="page-2">
				<h1>Alternate Navigation Control</h1>
				<p>Pressing the <strong>Shift Key</strong> you can alternate the the default navigation keys behaviour; let’s see how:</p>
				<ul>
					<li><strong>Down Key</strong> goes to the next page skipping all the fragments.</li>
					<li><strong>Up Key</strong> goes to the previous page skipping all the fragments.</li>
					<li><strong>Right Key</strong> goes to the first page in the next section.</li>
					<li><strong>Left Key</strong> goes to the first page in the previous section.</li>
				</ul>
			</div>
			<div id="/section-2/page-3" class="ft-page" data-id="page-3">
				<h1>Some Other Keys</h1>
				<p>Because: the more, the better.</p>
				<ul>
					<li><strong>Page Up Key</strong> goes to the first page of the current section.</li>
					<li><strong>Page Down Key</strong> goes to the last page of the current section.</li>
					<li><strong>Home Key</strong> goes to the first page of the first section.</li>
					<li><strong>End Key</strong> goes to the last page of the last section.</li>
				</ul>
			</div>
			<div id="/section-2/page-4" class="ft-page" data-id="page-4">
				<h1>Overview Mode.</h1>
				<p>You can look at the entire presentation by pressing <strong>ESC Key</strong>.<br>
					When in Overview Mode you can go back to the Page Mode by pressing again the ESC Key.</p>
				<p>Try it out!</p>
				<p><strong class="attention">WARNING! Experimental Feature.</strong> If you experience problems in webkit browser you can use the alternate Overview Mode; see the <a href="https://github.com/marcolago/flowtime.js" target="_blank">documentation</a> for more info.</p>
			</div>
			<div id="/section-2/page-5" class="ft-page" data-id="page-5">
				<h1>Navigating the Overview</h1>
				<p>In Overview Mode the arrow keys works in the same way as in Page Mode, highlighting the future destination. To navigate to the highlighted page just press <strong>Return or Enter Key</strong> or click on the desired page.</p>
			</div>
			<div id="/section-2/page-6" class="ft-page" data-id="page-6">
				<h1>Navigate via Links or Javascript API</h1>
				<p>You can links every page by simply building the <code>href</code> value using this schema:</p>
				<pre><code class="language-markup">
&lt;a href="#/[section data-id attribute]/[page data-id attribute]"&gt;
				</code></pre>
				<p>Where <code>data-id</code> attribute is an optional attribute you can add to every section or page.<br>
					I.e.: if you want to go to back to the first page <a href="#/section-1/page-1">click here</a> <span class="small">(press <strong>backspace</strong> to come back to this page)</span>.</p>
				<p>You can also trigger every navigation behaviour using the <strong>Flowtime.js Javascript API</strong>.<br>Take a look at the <a href="https://github.com/marcolago/flowtime.js" target="_blank">documentation</a> if you want to learn more.</p>
			</div>
			<div id="/section-2/page-7" class="ft-page" data-id="page-7">
				<h1>Navigate With History</h1>
				<p>Flowtime.js offers a full support for the HTML5 History API where available or gracefully degrades on the hashchange event.</p>
				<p>This means that you can navigate using the browser’s back and forward buttons and deeplink a page for sharing purposes.</p>
			</div>
			<div id="/section-2/page-8" class="ft-page" data-id="page-8">
				<h1>Progress Indicator</h1>
				<p>You can enable a default progress indicator useful not only to know what’s the current page you are looking, but also as a navigation tool.</p>
				<p><strong>Look at the bottom right corner</strong> and you can see a miniature of the presentation structure.</p>
				<p>Clicking on a page thumb will navigate to that page.</p>
			</div>
		</div>

		<div class="ft-section" data-id="section-3">
			<div id="/section-3/page-1" class="ft-page" data-id="page-1">
				<h1>Fragments Support</h1>
				<p>The built in fragments navigation allows to advance step by step inside a page.<br>
					Press down to try.</p>
				<p class="ft-fragment">You can discover single elements <span class="ft-fragment">or even a single part of an element, <span class="ft-fragment">one <span class="ft-fragment">at <span class="ft-fragment">a <span class="ft-fragment">time.</span></span></span></span></span></p>
				<p class="ft-fragment">Fragments navigation is deeply customizable with some configuration options<br>
					You can learn how in the <a href="https://github.com/marcolago/flowtime.js" target="_blank">documentation</a>.</p>
			</div>
			<div id="/section-3/page-2" class="ft-page" data-id="page-2">
				<h1>Fragments Unleashed</h1>
				<p>Fragments can be more than just delayed piece of page.<p>
				<p>Thanks to some special classes you can add a couple of useful custom behaviours.</p>
				<ul>
					<li class="ft-fragment step">The <code>.step</code> fragment will partially fades out;</li>
					<li class="ft-fragment shy">The <code>.shy</code> fragment will completely hides itself;</li>
					<li class="ft-fragment">You can use this two special fragment types to easily create special effects.</li>
				</ul>
				<p><span class="ft-fragment shy">This</span> <span class="ft-fragment shy">is</span> <span class="ft-fragment shy">a</span> <span class="ft-fragment shy"><code>.shy</code></span> <span class="ft-fragment shy">example!</span></p>
				<p><span class="ft-fragment step">And</span> <span class="ft-fragment step">this</span> <span class="ft-fragment step">is</span> <span class="ft-fragment step">a</span> <span class="ft-fragment step"><code>.step</code></span> <span class="ft-fragment step">one!</span></p>
			</div>
		</div>

		<div class="ft-section" data-id="section-4">
			<div id="/section-4/page-1" class="ft-page" data-id="page-1">
				<h1>Default HTML Structures</h1>
				<p>Flowtime.js comes with a default theme that styles the most common HTML structures, like:</p>
				<h1>1<sup>st</sup> Level Heading</h1>
				<h2>2<sup>nd</sup> Level Heading</h2>
				<h3>3<sup>rd</sup> Level Heading</h3>
				<h4>4<sup>th</sup>, 5<sup>th</sup> and 6<sup>th</sup> Level Heading</h4>
			</div>
			<div id="/section-4/page-2" class="ft-page" data-id="page-2">
				<h1>Unordered Lists</h1>
				<ul>
					<li>An item.</li>
					<li>Another item.</li>
					<li>Just another item.</li>
					<li>Ok, we get it!</li>
				</ul>
			</div>
			<div id="/section-4/page-3" class="ft-page" data-id="page-3">
				<h1>Ordered Lists</h1>
				<ol>
					<li>One.</li>
					<li>Two.</li>
					<li>Three.</li>
					<li>Four.</li>
				</ol>
			</div>
			<div id="/section-4/page-4" class="ft-page" data-id="page-4">
				<h1>Definition Lists</h1>
				<dl>
					<dt>One:</dt>
					<dd>a single unit of everything.</dd>
					<dt>Two:</dt>
					<dd>the only even prime number.</dd>
					<dt>Three:</dt>
					<dd>without the “h” is a plant.</dd>
					<dt>Four:</dt>
					<dd>“Quattro” in italian.</dd>
				</dl>
			</div>
			<div id="/section-4/page-5" class="ft-page" data-id="page-5">
				<h1>Quotes and Citations</h1>
				<p>My favourite quotation: <q>The bad craftsman blames his tools</q>.</p>
				<blockquote>
					Sotto un cespo di rose scarlatte dai al rospo the caldo col latte.<br>
					Sotto un cespo di rose paonazze tocca al rospo lavare le tazze.
				</blockquote>
				<p><cite><a href="http://html5doctor.com/blockquote-q-cite/" target="_blank">Quoting and citing with &lt;blockquote&gt;, &lt;q&gt;, &lt;cite&gt;, and the cite attribute</a>	</cite> on HTML5 Doctor.</p>
			</div>
			<div id="/section-4/page-6" class="ft-page" data-id="page-6">
				<h1>Theme and Styling</h1>
				<p>If you don’t like the default theme or you want to build your own (or both things),<br>
					or if you want to build a website on top of Flowtime.js,<br>
					you can write your own theme and replace the default one.</p>
				<p>Theme and core css are in separate files so you can’t break the layout (unless you override some classes).</p>
				<h2>Fluid Layout</h2>
				<p>Everything can be fluid, just use <strong>em</strong>, <strong>rem</strong> and <strong>%</strong> units if you want to make an element resizable.</p>
			</div>
		</div>


		<div class="ft-section" data-id="section-9">
			<div id="/section-9/page-1" class="ft-page" data-id="page-1">
				<h1>Use It! It’s Free</h1>
				<p>This project is open source, feel free to contribute to the development on <a href="https://github.com/marcolago/flowtime.js" target="_blank">Github</a>.</p>
				<p>Feedbacks, suggestions and bug reports are welcomes.</p>
				<p>Use it as you wish and build great things.<br>And when you’ll have done let me know the URL, I will appreciate it.</p>
			</div>

			<div id="/section-9/page-2" class="ft-page" data-id="page-2">
				<h1>Thank You</h1>
				<p>Designed and coded by Marco Lago<br>
					Interaction/Experience/Game/Designer/Developer</p>
				<p>You can find me on Twitter as <a href="https://twitter.com/marcolago" target="_blank">@marcolago</a></p>
				<p>If you like this work spread the word, you know how ;)</p>
				<h2>Have Fun</h2>
			</div>
		</div>
	</div>
@endsection
