@extends('layouts.app')

@section('content')
<link href='/css/fullcalendar.css' rel='stylesheet' />
<link href='/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='/js/moment.min.js'></script>
<script src='/js/jquery.min.js'></script>
<script src='/js/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'agendaWeek, agendaDay, month'
			},
			defaultDate: '2016-09-12',
			navLinks: true, // can click day/week names to navigate views
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('Job Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2016-09-01'
				},
				{
					title: 'Long Event',
					start: '2016-09-07',
					end: '2016-09-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-09-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-09-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-09-11',
					end: '2016-09-13'
				},
				{
					title: 'Meeting',
					start: '2016-09-12T10:30:00',
					end: '2016-09-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-09-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-09-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-09-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-09-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-09-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2016-09-28'
				}
			]
		});
		
	});

</script>
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>SCHEDULING</strong></div>

                <div class="panel-body">
                  
                  <div class="col-sm-4">
                    <a href="scheduling"><button type="button" style="width:270px;" class="active btn btn-primary btn-lg">SCHEDULING</button></a><br /><br />
                    <a href="inputs"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">INPUTS</button></a><br /><br />
                    <a href="notifications"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">NOTIFICATIONS</button></a><br /><br />
                    <a href="groups"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">GROUPS</button></a><br /><br />
										<a href="settings"><button type="button" style="width:270px;" class="btn btn-primary btn-lg">SETTINGS</button></a>
                  </div>
                  <div class="col-sm-8">
                  <div id="calendar"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
