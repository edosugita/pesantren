<?=
$this->extend('Layout/LandingPage/template');
$this->section('content');
?>

<main>
    <div class="container">
        <section class="mt-5 mb-5 text-center">
            <h4>Jadwal Ta’lim</h4>
            <p>Pesantren Mahasiswa Al Mukmin</p>
        </section>
        <div id="calendar"></div>
    </div>
</main>

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     var booking = {
    //         'title': 'shortEvent',
    //         'start': '2022-08-30 22:11:16',
    //         'end': '2022-08-30 22:11:16'
    //     };
    //     var calendarEl = document.getElementById('calendar');
    //     var calendar = new FullCalendar.Calendar(calendarEl, {
    //             initialView: 'dayGridMonth'
    //         },
    //         events: booking);
    //     calendar.render();
    // });

    $(document).ready(function() {
        // console.log(booking);
        $('#calendar').fullCalendar({
            header: {
                left: 'title',
                right: 'prev, next today',
            },
            events: <?= $events ?>
        })
    })
</script>
<?= $this->endSection(); ?>