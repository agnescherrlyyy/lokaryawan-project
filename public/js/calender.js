document.addEventListener("DOMContentLoaded", function () {
    const currentDate = new Date();
    let selectedDate = currentDate;

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

    function updatePrevMonthButton() {
        const today = new Date();
        const isCurrentMonth =
            currentDate.getFullYear() === today.getFullYear() &&
            currentDate.getMonth() === today.getMonth();

        prevMonthButton.disabled = isCurrentMonth;
    }

    updatePrevMonthButton();

    prevMonthButton.addEventListener("click", function () {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar();
        updatePrevMonthButton();
    });

    document
        .getElementById("next-month")
        .addEventListener("click", function () {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
            updatePrevMonthButton();
        });

    calendar.addEventListener("click", function (event) {
        if (
            event.target.classList.contains("calendar-day") &&
            !event.target.classList.contains("disabled")
        ) {
            const selectedDay = calendar.querySelector(
                ".calendar-day.selected"
            );
            if (selectedDay) {
                selectedDay.classList.remove("selected");
            }

            event.target.classList.add("selected");

            selectedDate = new Date(
                currentDate.getFullYear(),
                currentDate.getMonth(),
                event.target.textContent
            );

            selectedDateElement.textContent = selectedDate.toLocaleDateString(
                "id-ID",
                options
            );
        }
    });

    selectedDateElement.textContent = currentDate.toLocaleDateString(
        "id-ID",
        options
    );

    function renderCalendar() {
        currentMonthElement.textContent = currentDate.toLocaleDateString(
            "id-ID",
            { year: "numeric", month: "long" }
        );

        const today = new Date();
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

        const weekdays = ["M", "S", "S", "R", "K", "J", "S"];
        for (let i = 0; i < 7; i++) {
            const dayElement = document.createElement("div");
            dayElement.classList.add("calendar-day", "day-name", "disabled");
            dayElement.textContent = weekdays[i];
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
                currentDate.getFullYear() === today.getFullYear() &&
                currentDate.getMonth() === today.getMonth() &&
                i < today.getDate()
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
});
