@extends('main-layout')

@section('title', 'Kalender')

@section('content')    
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kalender Kegiatan</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li>Kalender</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Kalender Section ======= -->
    <div class="container-md">
      <section id="portfolio" class="portfolio">
        <div class="content">
          <div id='calendar'></div>
        </div>
      </section>
    </div>

    <!-- End Kalender Section -->

  </main><!-- End #main -->

  <script>
    document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var today = new Date(); // Mendapatkan tanggal hari ini
  var defaultDate = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'interaction', 'dayGrid' ],
    locale:'id',
    defaultDate: defaultDate,
    editable: false,
    eventLimit: true, // allow "more" link when too many events
    displayEventEnd: true,
    eventOverlap: true, // Mengizinkan acara bertumpuk
    eventDisplay:'block',

    events: [

    // YYYY-MM-DD
      {
        title: 'Mendak Ida Betara Kawitan',
        start: '2024-03-18'
      },
      {
        title: 'Eedan Piodalan',
        start: '2024-03-19',
        end: '2024-03-23'
      },
      {
        title: 'Upacara Penyineban',
        start: '2024-03-22'
      },
      
      
      // {
      //   title: 'All Day Event',
      //   start: '2020-02-01'
      // },
      // {
      //   title: 'Long Event',
      //   start: '2020-02-07',
      //   end: '2020-02-10'
      // },
      // {
      //   groupId: 999,
      //   title: 'Repeating Event',
      //   start: '2020-02-09T16:00:00'
      // },
      // {
      //   groupId: 999,
      //   title: 'Repeating Event',
      //   start: '2020-02-16T16:00:00'
      // },
      // {
      //   title: 'Conference',
      //   start: '2020-02-11',
      //   end: '2020-02-13'
      // },
      // {
      //   title: 'Meeting',
      //   start: '2020-02-12T10:30:00',
      //   end: '2020-02-12T12:30:00'
      // },
      // {
      //   title: 'Lunch',
      //   start: '2020-02-12T12:00:00'
      // },
      // {
      //   title: 'Meeting',
      //   start: '2020-02-12T14:30:00'
      // },
      // {
      //   title: 'Happy Hour',
      //   start: '2020-02-12T17:30:00'
      // },
      // {
      //   title: 'Dinner',
      //   start: '2020-02-12T20:00:00'
      // },
      // {
      //   title: 'Birthday Party',
      //   start: '2020-02-13T07:00:00'
      // },
      // {
      //   title: 'Click for Google',
      //   url: 'http://google.com/',
      //   start: '2020-02-28'
      // }
    ]
  });

  calendar.render();
});

</script>

@endsection('content')    