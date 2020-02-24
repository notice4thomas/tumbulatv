@extends('layouts.timeline')

@section('content')
Engagement path | reBOOT | 6 levels of social innovation
<script type="text/javascript">
		jQuery(function($){
			var data = {
				"timeline": [
					{
						"startDate":"2009-06-27",
						"endDate":"2010-01-01",
						"headline":"tumbula tribe",
						"text":"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.",
						"asset": {
							"asset":"",
							"thumbnail":"",
							"type": "",
							"caption":"",
						}
					},
					{
						"startDate":"2010-06-27",
						"endDate":"",
						"headline":"Text and image",
						"text":"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.",
						"asset": {
							"asset":"{{asset('timeline/img/lorempixel01.jpg') }} ",
							"thumbnail":"{{asset('timeline/img/lorempixel01.jpg') }} ",
							"type": "image",
							"caption":"",
						}
					},
					{
						"startDate":"2011-06-27",
						"endDate":"",
						"headline":"",
						"text":"",
						"asset": {
							"asset":"{{asset('timeline/img/lorempixel02.jpg') }} ",
							"thumbnail":"{{asset('timeline/img/lorempixel02.jpg') }} ",
							"type": "image",
							"caption":"Only image",
						}
					},
					{
						"startDate":"2012-06-27",
						"endDate":"",
						"headline":"Text and Google maps",
						"text":"To add a Google map, only add the embed link in the media field.",
						"asset": {
							"asset":"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d38604053.539696164!2d12.480607714614377!3d53.803645794129494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sde!2sat!4v1415620468057",
							"thumbnail":"",
							"type": "google-embed",
							"caption":"Worldmap",
						}
					},
					{
						"startDate":"2013-06-27",
						"endDate":"",
						"headline":"",
						"text":"",
						"asset": {
							"asset":"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d38604053.539696164!2d12.480607714614377!3d53.803645794129494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sde!2sat!4v1415620468057",
							"thumbnail":"",
							"type": "google-embed",
							"caption":"Only Google maps",
						}
					},
					{
						"startDate":"2014-11-09",
						"endDate":"",
						"headline":"Text and Youtube video",
						"text":"For a Youtube video, only add the id of the video in the media field.",
						"asset": {
							"asset":"gRfPZpbE0Hc",
							"thumbnail":"",
							"type": "youtube-embed",
							"caption":"berlin wall fall 25 years",
						}
					},
					{
						"startDate":"2014-11-09",
						"endDate":"",
						"headline":"",
						"text":"",
						"asset": {
							"asset":"gRfPZpbE0Hc",
							"thumbnail":"",
							"type": "youtube-embed",
							"caption":"Only Youtube video, berlin wall fall 25 years",
						}
					}
				],
				"config": {
					"zoom": 1,
					"keyboardCommands": true,
					"date": {
						"language": "de",
						"format": "d F Y",
						"buttonFormat": "d.m.y"
					}
				}
			};

			$("#jquery-timeline").jqueryTimeline(data);

			// TODO: display 2 timelines at the same time
		});
	</script>

@endsection
