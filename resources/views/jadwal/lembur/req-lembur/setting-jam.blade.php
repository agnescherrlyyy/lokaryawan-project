<script type="text/javascript">
    $(document).ready(function () {
        function setValidTime(el) {
            $(el).on("input", function () {
                var timeValue = $(el).val().split(":");
                var minutes = parseInt(timeValue[1]);

                if (minutes < 30) {
                    minutes = '00';
                    var hours = timeValue[0];
                    // console.log(hours);
                    // console.log(minutes);
                } else if (minutes >= 30) {
                    minutes = '30';
                    var hours = timeValue[0];
                    // console.log(hours);
                    // console.log(minutes);
                }

                $(el).val(hours + ":" + minutes);
            });
        }

        var startTimeInput = $("#mulai-lembur");
        var endTimeInput = $("#akhir-lembur");

        setValidTime(startTimeInput);
        setValidTime(endTimeInput);
    });
</script>