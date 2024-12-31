<section id="booking">
    <h2>Termin buchen</h2>
    <label for="datepicker">Datum wählen:</label>
    <input type="text" id="datepicker" placeholder="Datum wählen">
</section>

<!-- Flatpickr einfügen -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#datepicker", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
</script>