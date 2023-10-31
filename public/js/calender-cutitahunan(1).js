document.addEventListener("DOMContentLoaded", function () {
    const selectedDates = [];
    const calendar = document.getElementById("calendar");
    const currentMonthElement = document.getElementById("current-month");
    const selectedDateElement = document.getElementById("selected-date-value");
    const prevMonthButton = document.getElementById("prev-month");

    const options = {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
    };

    let currentDate = new Date();

    function renderCalendar() {
        const today = new Date();
        const oneWeekFromNow = new Date(today);
        oneWeekFromNow.setDate(oneWeekFromNow.getDate() + 7);

        currentMonthElement.textContent = currentDate.toLocaleDateString(
            "id-ID",
            { year: "numeric", month: "long" }
        );

        const firstDay = new Date(
            currentDate.getFullYear(),
            currentDate.getMonth(),
            1
        );
        const firstDayIndex = firstDay.getDay();

        const lastDay = new Date(
            currentDate.getFullYear(),
            currentDate.getMonth() + 1,
            0
        );
        const daysInMonth = lastDay.getDate();

        calendar.innerHTML = "";

        for (let i = 0; i < 7; i++) {
            const dayElement = document.createElement("div");
            dayElement.classList.add("calendar-day", "day-name", "disabled");
            dayElement.textContent = ["M", "S", "S", "R", "K", "J", "S"][i];
            calendar.appendChild(dayElement);
        }

        for (let i = 0; i < firstDayIndex; i++) {
            const dayElement = document.createElement("div");
            dayElement.classList.add("calendar-day", "empty", "disabled");
            calendar.appendChild(dayElement);
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const dayElement = document.createElement("div");
            dayElement.classList.add("calendar-day");
            dayElement.textContent = i;

            if (
                selectedDates.some(
                    (date) =>
                        date.getDate() === i &&
                        date.getMonth() === currentDate.getMonth()
                )
            ) {
                dayElement.classList.add("selected");
            }

            if (
                currentDate.getFullYear() === today.getFullYear() &&
                // currentDate.getMonth() === today.getMonth() &&
                (i < today.getDate() ||
                    i >= today.getDate() + oneWeekFromNow.getDate() - today.getDate() + 1)
            ) {
                dayElement.classList.add("disabled");
            }

            if (
                currentDate.getFullYear() === today.getFullYear() &&
                currentDate.getMonth() === today.getMonth() &&
                i === today.getDate()
            ) {
                dayElement.classList.add("today");
            }

            calendar.appendChild(dayElement);
        }

        const remainingDays = 42 - (firstDayIndex + daysInMonth);
        for (let i = 1; i <= remainingDays; i++) {
            const dayElement = document.createElement("div");
            dayElement.classList.add("calendar-day", "empty", "disabled");
            calendar.appendChild(dayElement);
        }
    }

    renderCalendar();

    prevMonthButton.addEventListener("click", function () {
        currentDate.setMonth(currentDate.getMonth() - 1);

        renderCalendar();
    });

    document.getElementById("next-month").addEventListener("click", function () {
        currentDate.setMonth(currentDate.getMonth() + 1);

        renderCalendar();
    });
});
